<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected string $name = 'news';
    protected $fillable = [
        'title',
        'content',
        'thumbnail',
    ];
}
