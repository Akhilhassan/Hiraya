<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interiorthreed extends Model
{
    use HasFactory;

    protected $table = 'interiorthreed';

    protected $fillable = [
        'image','title'
    ];
}
