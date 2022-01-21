<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'appointment_address_id',
        'date',
        'appointment_timeslot_id',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'state',
        'zip',
        'comments',
    ];

    public function time_slot()
    {
        return $this->hasOne(AppointmentTimeslot::class, 'id', 'appointment_timeslot_id');
    }
}
