<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    protected $fillable = [
        'access','type',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function course(){
    	return $this->belongsToMany(Course::class);
    }
}
