<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
   
 public $timestamps = true;	
    
 protected $table = 'revisions';


protected $fillable = [

      'post_id','message','status'
  ];


public function post() {

return $this->belongsTo('Post::class');

}


 public static function getStatus() {
  
       return $this->status;
       
    }


 protected static function boot() {

         parent::boot();

          static::addGlobalScope('status', function(Builder $builder) {

            $builder->where('status', true);

        });

    }



}
