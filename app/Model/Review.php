<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'review';
    protected $primaryKey = 'id';
      public function userdata()
    {      
        return $this->hasone('App\User', 'id', 'user_id');
    }
}
