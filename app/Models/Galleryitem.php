<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleryitem extends Model
{
    use HasFactory;

    protected $fillable = [
        'photopath',
        'gallery_id',
    ];
}
