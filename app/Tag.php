<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  
  public $timestamps = true;	
    
  protected $table = 'tags';



  protected $fillable = [

      'title'
  ];


 public function post() {

   return $this->belongsTo(Post::class);
}



 public static function getTag($tag) {
        
    $tag = \App\Tag::where('title' => $tag)->first();

     if (!$tag)

         return null;

       return $tag;

    }



}
