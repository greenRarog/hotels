<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use App\Models\Hotel;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use App\Models\Attachment as Miniature;

class News extends Model
{
    use HasFactory, AsSource, Attachable;

    protected $fillable = [
        'name',
        'short_description',
        "hotel_id",
        "miniature",
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function getCreatedAtDayAttribute($value)
    {
        return date("d", strtotime($value));
    }

    public function getCreatedAtMonthAttribute($value)
    {
        return date("M", strtotime($value));
    }
    public function Miniature()
    {
        return $this->hasOne(Miniature::class, "id", "miniature");
    }
}
