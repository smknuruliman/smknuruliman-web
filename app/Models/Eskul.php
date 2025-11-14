<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = "eskul";
    protected $fillable = ['title', 'desc', 'gambar', 'joinCount'];
}
