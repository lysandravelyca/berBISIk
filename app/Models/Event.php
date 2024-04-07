<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }

    public function event_types()
    {
        return $this->belongsTo(EventType::class, 'event_type_id', 'id');
    }
}
