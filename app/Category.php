<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
 public $timestamps = true;	
    
 protected $table = 'categories';


protected $fillable = [

      'user_id','title'
  ];


  public function user() {

    return $this->hasMany(User::class);

    }

  public function post() {

   return $this->hasOne(Post::class);

  }


 
  public function comments() {

   return $this->hasMany(Comment::class);

  }


   public static function getTitle() {

        return $this->title;
    }





}
