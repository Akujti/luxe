<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentTimeslot extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    protected $table = "appointment_timeslots";

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_timeslots');
    }
}
