<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use App\Notifications\PatientCreatedNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use MongoClient;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:3',
            'role' => 'required|in:doctor,patient,admin',
        ]);

        if ($request->role == 'doctor') {
            $validatedData = array_merge($validatedData, $request->validate([
                'specialization' => 'required|string|max:255',
                'license_number' => 'required|string|max:255|unique:doctors,license_number',
                'doctor_phone_number' => 'required|string|max:255',
                'experience_years' => 'nullable|integer|min:0',
            ]));
        }

        if ($request->role == 'patient') {
            $validatedData = array_merge($validatedData, $request->validate([
                'address' => 'required|string|max:255',
                'dob' => 'required|date',
                'patient_phone_number' => 'required|string|max:255',
                'gender' => 'required|in:male,female',
            ]));
        }


        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($request->role == 'doctor') {
            Doctor::create([
                'user_id' => $user->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'specialization' => $request->specialization,
                'license_number' => $request->license_number,
                'phone_number' => $request->doctor_phone_number,
                'experience_years' => $request->experience_years,
            ]);
        }

        if ($request->role == 'patient') {
            $patient=Patient::create([
                'user_id' => $user->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'address' => $request->address,
                'dob' => $request->dob,
                'phone_number' => $request->patient_phone_number,
                'gender' => $request->gender,
                'patient_id' => 'PID-' . strtoupper(Str::random(8))
            ]);

            $patient->notify(new PatientCreatedNotification($patient));
            return redirect(route('patient.uploadDocumentsRegister'));
        }


        event(new Registered($user));
        Auth::login($user);

        return redirect(route('login'));
    }


}
