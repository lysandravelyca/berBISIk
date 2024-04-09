<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSchedule extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the EventSchedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function events(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    // }
}
