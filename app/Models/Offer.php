<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    //allows to use model factories for quick fake data
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'rent',
        'size',
        'available_from',
        'available_to',
        'price',
        'city_id',
        'user_id',

    ];
    public function city() {
        return $this->belongsTo(City::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    //1-N relationship
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    /*public function favourite() {
        return $this->hasMany(Favourite::class);
    }
    */
    public function tags() {
        return $this->belongsToMany(Tag::class, 'offer_tags');
    }
}

//Anywhere in app :
//$offers = Offer::all();
//Laravel will automatically run:
//SELECT * FROM offers;

