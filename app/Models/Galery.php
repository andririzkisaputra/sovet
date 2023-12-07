<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    // STATUS
    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'status'
    ];
}
