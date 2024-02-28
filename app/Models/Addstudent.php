<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addstudent extends Model
{
    use HasFactory;
  
       protected $fillable = [
        'student_id',
        'student_name',
        'student_roll',
        'student_fathername',
        'student_mothername',
        'student_email',
        'student_phone',
        'student_department',
        'student_address',
        'student_year',
        'student_password',
        'student_image',
    ];
}
