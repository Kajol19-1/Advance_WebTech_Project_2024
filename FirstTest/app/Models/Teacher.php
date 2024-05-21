<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';
    protected $primaryKey = "phone";
    public $timestamps = false;

     //using hasmany verb one to many
     public function courses(){
        return $this->hasMany(Course::class,'teacherId');
    }

    //using eloquent
    public function assignedCourses(){
        return Course::where('teacherId', $this->id)->get();
    }
}
