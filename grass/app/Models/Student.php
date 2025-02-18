<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; 

   
    protected $fillable = [
        'student_id',
        'first_name',
        'last_name',
        'dob',
        'residence',
        'class_role',
        'student_group', 
        'phone',
        
    ];

    public $timestamps = true; 
}
