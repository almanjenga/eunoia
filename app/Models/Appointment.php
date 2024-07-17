<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'professional_id',
        'user_id',
        'appointment_datetime', // Update to reflect new field name
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }

    // public function availability()
    // {
    //     return $this->belongsTo(Availability::class);
    // }
}