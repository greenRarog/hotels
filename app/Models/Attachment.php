<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    protected $table = "attachments";
    public function getFullPathAttribute()
    {
        return "{$this->path}{$this->name}.{$this->extension}";
    }
}
