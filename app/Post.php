<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 

  public $timestamps = true;	
    
  protected $table = 'posts';



  protected $fillable = [

      'user_id','category_id','body'
  ];



public function category() {

return $this->belongsTo('Category::class');

}


 public function user() {

   return $this->belongsTo(User::class);
}


 public function revisons() {

   return $this->hasMany(Revision::class);

  }


  public function tags() {

   return $this->hasMany(Tag::class);

  }


   public static function getPostBody() {

        return $this->body;
    }





}
