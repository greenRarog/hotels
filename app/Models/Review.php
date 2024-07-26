<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use App\Models\Hotel;

class Review extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'name',
        'content',
        'hotel_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
