<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'user_id',
        'establishment_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function establishments()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
