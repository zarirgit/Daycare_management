<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = ['start_time', 'end_time', 'capacity'];

    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }

    public function getAvailability()
    {
        $enrollments = $this->enrolls()->count();
        return $this->capacity - $enrollments;
    }
}
