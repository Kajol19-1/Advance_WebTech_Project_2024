<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StudentController extends Controller
{
    public function create(){

        return view('pages.students.create');
     }

     public function createSubmit(Request $request){

        $validate = $request->validate([
            'name'=>'required|min:5|max:10',
            'id'=> 'required',
            'dob'=> 'required',
            'email'=> 'required',
            'phone'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        [
            'name.required'=>'please put your name',
            'name.min'=>'Name must be greated than 2 character'
    

        ]
    );

    return "OK";

     }

     public function list(){

            $students = array();

            for($i=0; $i<10; $i++)
            {
                $student=array(

                    "name"=>"student".($i+1),
                    "id"=>($i+1),
                    "dob"=>"12-12-2012"
                );

                $students[]=(object)$student;
            }

            return view('pages.students.list')->with('students',$students);

     }

     public function edit(Request $request){
        return $request->id;
     }
}
