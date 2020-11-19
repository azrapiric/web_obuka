<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'news';

    public $fillable = ['title','content','image','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
