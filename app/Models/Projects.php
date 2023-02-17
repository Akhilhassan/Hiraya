<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'area',
        'cover',
        'client'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
