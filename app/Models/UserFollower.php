<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserFollower extends Model
{

    protected $fillable = ['user_id', 'follower_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    

}
