<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'phone',
        'gender',
        'doctor_id'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
