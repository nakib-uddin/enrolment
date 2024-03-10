<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'teacher_name',
        'teacher_phone',
        'teacher_address',
        'teacher_department',
        'teacher_image',
    ];
}
