<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->only('identifier', 'password');

        // تحديد الحقل المستخدم للمصادقة (patient_id أو email)
        $field = filter_var($credentials['identifier'], FILTER_VALIDATE_EMAIL) ? 'email' : 'patient_id';

        if ($field === 'patient_id') {
            // البحث عن المريض باستخدام patient_id
            $patient = \App\Models\Patient::where('patient_id', $credentials['identifier'])->first();

            if (!$patient) {
                return back()->withErrors(['identifier' => 'Patient ID not found.']);
            }

            // البحث عن المستخدم المرتبط بالمريض باستخدام user_id
            $user = \App\Models\User::find($patient->user_id);

            if (!$user) {
                return back()->withErrors(['identifier' => 'No user associated with this Patient ID.']);
            }

            // التحقق من كلمة المرور
            if (!Hash::check($credentials['password'], $user->password)) {
                return back()->withErrors(['password' => 'The provided password is incorrect.']);
            }

            // تسجيل الدخول
            Auth::login($user);
            $request->session()->regenerate();

            // توجيه المريض إلى صفحة لوحة التحكم
            return redirect(route('patient.dashboard'));
        }

        // إذا كان الحقل هو البريد الإلكتروني، استخدم التحقق الافتراضي من جدول المستخدمين
        if (Auth::attempt(['email' => $credentials['identifier'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            $user = Auth::user();

            // توجيه المستخدم بناءً على الدور
            if ($user->role == 'doctor') {
                return redirect(route('doctor.dashboard'));
            }

            if ($user->role == 'admin') {
                return redirect(route('admin.dashboard'));
            }

            return redirect(route('patient.dashboard'));
        }

        // إذا فشلت المصادقة، أعد المستخدم مع رسالة خطأ
        return back()->withErrors([
            'identifier' => 'The provided credentials are incorrect.',
        ]);
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
