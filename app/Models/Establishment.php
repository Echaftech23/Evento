<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function organizers()
    {
        return $this->hasMany(Organizer::class);
    }
}
