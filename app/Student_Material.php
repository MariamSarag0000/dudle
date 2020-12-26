<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Material extends Model
{
    protected $table='students_materials';
    protected $fillable = ['student_id', 'material_code'];


}
