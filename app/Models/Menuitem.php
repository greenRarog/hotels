<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Menuitem extends Model
{
    use HasFactory, AsSource;
    protected $table = "menuitems";
    protected $fillable = [
        'location',
        'id_menuitem',
        'order',
        'url',
        'alias'
    ];
    public function getIsSubitemAttribute()
    {
        return !is_null($this->id_menuitem);
    }
}
