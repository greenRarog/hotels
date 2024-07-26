<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use App\Models\Comment;
use Orchid\Attachment\Attachable;

class Post extends Model
{
    use AsSource, Attachable;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'body',
        'author'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}