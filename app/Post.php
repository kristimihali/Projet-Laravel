<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    //protected $table = 'posts';

    use Commentable;
    public function author()
   {
       return $this->belongsTo('App\User','user_id');
   }
}
