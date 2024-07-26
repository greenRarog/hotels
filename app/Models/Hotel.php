<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use App\Models\News;
use App\Models\Review;
use App\Models\Facility;
use Orchid\Filters\Types\Like;

class Hotel extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'name',
        'seo_h2',
        'short_description'
    ];
    protected $allowedSorts = [
        "name" => Like::class,
        "created_at",
        "updated_at",
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return date("d.m.Y", strtotime($value));
    }
    public function getUpdatedAtAttribute($value)
    {
        return date("d.m.Y", strtotime($value));
    }
}
