<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;

    protected $guarded = [];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function tag(string $tag) : void {
        $tag = Tags::firstOrCreate(["name" => $tag]);

        $this->tags()->attach($tag->id);
    }

    public function tags () : BelongsToMany {
        return $this->belongsToMany(Tags::class);
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Categories::class, 'categories_id');
    }

    public function removeTag(int $tagId) : void {
        $this->tags()->detach($tagId);
    }

    public function likes() {
        return $this->hasMany(PostLike::class, 'posts_id');
    }

    public function comments(){
        return $this->hasMany(Comments::class, 'posts_id');
    }


}
