<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // 
    public function post(){
        //return $this->belongsTo(Post::class);
        return $this->belongsTo(Post::class);
    }
}
