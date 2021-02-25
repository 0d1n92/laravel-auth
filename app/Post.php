<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
      belongsTo('App\User');
    }

     protected $fillable=[
        'text',
        'title',
        'slug',
        'user_id',
      
      ];
}
