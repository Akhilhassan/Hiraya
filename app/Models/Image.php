<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;
class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'projects_id',
    ];

    public function projects(){
        return $this->belongsTo(Post::class);
    }
}
