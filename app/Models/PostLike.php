<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    protected $fillable = ['user_id', 'posts_id'];

    public function post() {
        return $this->belongsTo(Posts::class, 'posts_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
