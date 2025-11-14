<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    protected $table = "profile";
    protected $fillable = ['profile_desc', 'profile_img1', 'profile_img2', 'profile_img3'];
}
