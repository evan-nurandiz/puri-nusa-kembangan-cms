<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_title',
        'article_created_by',
        'article_body',
        'article_thumbnail',
        'article_banner',
        'article_main_image',
        'article_link'
    ];
}
