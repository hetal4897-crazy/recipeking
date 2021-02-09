<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $table = 'favorite';
    protected $primaryKey = 'id';

    
     public function userdata()
    {      
        return $this->hasone('App\User', 'id', 'user_id');
    }
    
    
}