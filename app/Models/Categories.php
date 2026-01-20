<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function posts() {
        return $this->hasMany(Posts::class)->where('published', true);
    }
}
