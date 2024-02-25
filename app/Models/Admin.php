<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password',
    ];
}
