<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Student extends Model
{
    protected $fillable = ['name', 'phone', 'address', 'father_name', 'course_id', 'group_id', 'joined_date'];

    

    
}
