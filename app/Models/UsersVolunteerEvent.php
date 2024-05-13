<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersVolunteerEvent extends Model
{
    use HasFactory;
    protected $primaryKey = ['user_id', 'volunteer_event_id'];
}
