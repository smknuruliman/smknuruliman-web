<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homepages extends Model {
    protected $table = 'homepages';

    protected $fillable = [
        //hero section
        'hero_title',
        'hero_desc',
        // footer
        'footer_desc',
        'footer_addres',
        'footer_sosmed(1)',
        'footer_sosmed(2)',
        'footer_email',
        'footer_phone',
    ];

}
