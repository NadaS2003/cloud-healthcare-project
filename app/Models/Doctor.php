<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'specialization', 'phone_number','license_number','experience_years','user_id'
    ];
}
