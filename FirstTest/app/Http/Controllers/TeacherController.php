<?php

namespace App\Http\Controllers;
use App\Models\Course;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TeacherController extends Controller
{
    
    public function create(){
        return view('pages.teachers.create');
    }

    public function createSubmit(Request $request){

        $var = new Teacher();
        $var->name = $request->name;
        $var->phone = $request->phone;
        $var->password = md5($request->password);
        $var->save();
        return "Added";
    }

    public function list(){

        $teachers = Teacher::all();
        return view('pages.teachers.list')->with('teachers',$teachers);
    }

    public function teacherCourses(){

        $t = Teacher::where('id',1)->first();
        //hasmany
        // return $t->courses;

        //eloquent
        return $t->assignedCourses();
    }
}
