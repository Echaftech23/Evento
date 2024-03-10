<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

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

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
