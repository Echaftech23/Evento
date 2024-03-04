<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'event_id',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
