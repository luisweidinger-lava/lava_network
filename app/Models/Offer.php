<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'title', 'body', 'rent', 'size', 'available_from'
    ];
    public function city() {
        return $this->belongsTo(City::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'offer_tags');
    }
}

//Anywhere in app :
//$offers = Offer::all();
//Laravel will automatically run:
//SELECT * FROM offers;

