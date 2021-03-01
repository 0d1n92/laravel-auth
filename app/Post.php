<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
      belongsTo('App\User');
    }

     protected $fillable=[
        'user_id',
        'title',
        'text',
        'subtitle',
        'pubblication_date',
        'slug', 
      ];

      public function InfoUser(){
        return $this->belongsTo('App\InfoUser');
      }
}
