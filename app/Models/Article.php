<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
use HasFactory;
    
    protected $table = "articles";
    protected $fillable = [
        'title',
        'slug',
        'content',
        'cover_image',
        'category',
        'penulis',
        'user_id',
    ];
    protected static function booted()
{
    static::creating(function ($artikel) {
        $slug = \Str::slug($artikel->title);
        $count = \App\Models\Article::where('slug', 'like', "$slug%")->count();
        $artikel->slug = $count ? $slug . '-' . ($count + 1) : $slug;
    });
}

}





