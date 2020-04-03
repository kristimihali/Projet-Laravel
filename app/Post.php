<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use Commentable;

    protected $table = 'posts';

    public function author()
    {
      return $this->belongsTo('App\User','user_id');
    }
}
