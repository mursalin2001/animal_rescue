<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'animal_age',
        'animal_type',
        'animal_condition',
        'contact_number',
        'upazila',
        'latitude',
        'longitude',
        'animal_number',
        'exact_location',
        'description',
    ];

    public function postImages()
    {
        return $this->hasMany(Media::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    public function userLikes()
    {
        return $this->hasMany(Like::class)->where('user_id', auth()->id());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
