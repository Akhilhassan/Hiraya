<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Threed extends Model
{
    use HasFactory;

    protected $table = '3d';

    protected $fillable = [
        'image','title'
    ];
}
