<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorProfile extends Model
{
    protected $fillable = [
        'user_id',
        'specialization',
        'qualifications',
        'experience',
        'bio',
        'consultation_fee',
        'available_days',
        'available_hours',
        'phone_number',
        'profile_photo',
        'is_available'
    ];

    protected $casts = [
        'available_days' => 'array',
        'available_hours' => 'array',
        'is_available' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
