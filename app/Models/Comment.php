<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Autor;
use App\Models\Post;


class Comment extends Model
{
    use HasFactory;
   protected $with = "autor";

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    protected function childs(): Attribute
    {
        return Attribute::make(            
            get: fn (mixed $value, array $attributes) => Comment::where("comment_id", "=", $attributes["id"])->get(),
        );
    }

    public function getCountParentsAttribute()
    {
        $count = 0;
        if (!is_null($this->comment_id)) {
            $count++;
            $parentComm = Comment::find($this->comment_id);
            if (!is_null($parentComm->comment_id)) {
                $count++;
                $grendPaComment = Comment::find($parentComm->comment_id);                        
            }
        }
        return $count;        
    }

}
