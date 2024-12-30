<?php

namespace App\Models;

use MongoDB\Eloquent\Model as Eloquent;

class Analytics extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'analytics';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'test_results',
        'diagnosis',
        'date',
        'created_at'
    ];
}
