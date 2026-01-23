<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Newsletter extends Model
{
    protected $fillable = ['email', 'unsubscribe_token'];
}
