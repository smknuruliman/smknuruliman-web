<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spmb extends Model
{
    use HasFactory;

    protected $table = 'registrasi_pelajar';

    protected $fillable = [
        'full_name',
        'birth_place',
        'birth_date',
        'gender',
        'email',
        'phone',
        'address',
        'prev_school',
        'nisn',
        'graduation_year',
        'major',
        'avg_grade',
        'achievements',
        'parent_name',
        'photo',
    ];
}
