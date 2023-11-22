<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'slug',
        'description',
        'iframe',
        'meta_description',
        'meta_title',
        'meta_keywords',
        'status',
        'user_id',
        'category_id'
    ];
}
