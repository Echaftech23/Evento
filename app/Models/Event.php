<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'address',
        'registerEndDate',
        'startDate',
        'endDate',
        'capacity',
        'price',
        'isAuto',
        'status',
        'city_id',
        'category_id',
        'organizer_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function organizers()
    {
        return $this->belongsToMany(Organizer::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function cities()
    {
        return $this->belongsTo(City::class);
    }
}
