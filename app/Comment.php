<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   
 public $timestamps = true;	
    
 protected $table = 'comments';


protected $fillable = [

      'user_id','body'
  ];



public function user() {

return $this->belongsTo('User::class');

}



 public static function countComments($user_id) {
        
       $result = \App\Comment::where('user_id' => $user_id)->get()->count();

     if (!$result)

            return null;

        return $result;
    }






}
