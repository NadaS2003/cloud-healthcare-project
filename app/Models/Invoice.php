<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Invoice extends Model
{
    use Notifiable;
    protected $fillable = [
        'patient_id', 'amount', 'status', 'issued_at'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
// في نموذج Invoice
    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class, 'diagnosis_id');
    }

}
