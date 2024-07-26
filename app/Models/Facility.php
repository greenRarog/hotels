<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use App\Models\Hotel;

class Facility extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'name',
        'icon',
        'description',
        'service_hours',
    ];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }
}
