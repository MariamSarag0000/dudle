<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $table='students';
    protected $fillable = ['name_en', 'name_ar', 'email', 'phone','student_id','password','gpa','units','address','image','birthdate','status','department_id'];

	protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function material(){
        return $this->belongsToMany('\App\Material', 'students_materials', 'student_id', 'material_code');

    }
}
