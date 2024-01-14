<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory; 
    protected $fillable = ['full_name', 'user_email', 'mobile_num', 'about_user'];
}
