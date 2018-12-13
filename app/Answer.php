<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = ['body'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function question(){
        return $this->belongsTo('App\Question');
    }

    public function like(){
        return $this->hasMany('App\Like');
    }

    public function dislike(){
        return $this->hasMany('App\Dislike');
    }


}
