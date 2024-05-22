<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersEvent extends Model
{
    use HasFactory;

    protected $primaryKey = ['user_id', 'event_id'];

    public $incrementing = false;
    protected $keyType = 'array';


    protected $casts = [
        'user_id' => 'integer',
        'event_id' => 'integer',
    ];

    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
