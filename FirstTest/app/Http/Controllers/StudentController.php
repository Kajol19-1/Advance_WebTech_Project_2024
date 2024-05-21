<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StudentController extends Controller
{

   public function __construct(){
      $this->middleware('validTeacher');
      }

    public function create(){

        return view('pages.students.create');
     }

     public function createSubmit(Request $request){

    //     $validate = $request->validate([
    //         'name'=>'required|min:5|max:10',
    //         'id'=> 'required',
    //         'dob'=> 'required',
    //         'email'=> 'required',
    //         'phone'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/'
    //     ],
    //     [
    //         'name.required'=>'please put your name',
    //         'name.min'=>'Name must be greated than 2 character'
    

    //     ]
    // );
         $this-> validate(
            $request,
             [
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

    $var = new Student();
    $var ->name = $request->name;
    $var ->s_id = $request->id;
    $var ->email = $request->email;
    $var ->phone = $request->phone;
    $var ->dob = $request->dob;
    $var->save();
    
    

    return "OK";

     }

     public function list(){

            // $students = array();

            // for($i=0; $i<10; $i++)
            // {
            //     $student=array(

            //         "name"=>"student".($i+1),
            //         "id"=>($i+1),
            //         "dob"=>"12-12-2012"
            //     );

            //     $students[]=(object)$student;
            // }

            $students = Student::all();

            return view('pages.students.list')->with('students',$students);

     }



     public function studentProfile(Request $request)
     {
         $students = Student::where('id', '=', $request->id)
                                 ->select('name','s_id','email','dob','phone','id')
                                 ->first();
                                 
         return view('pages.students.profile')
                     ->with('student', $students);
     }

     public function edit(Request $request){
        //return $request->id;
        $id =$request->id;
        $student= Student::where('id',$id)->first();
        //return $student;
        return view('pages.students.edit')->with('student', $student);
      
     }


     public function editSubmit(Request $request){

      $var = Student::where('id', $request->id)->first();
      $var->name = $request->name;
      $var->s_id = $request->s_id;
      $var->email = $request->email;
      $var->phone = $request->phone;
      $var->dob = $request->dob;
      $var->save();
      return redirect()->route('student.list');
   
     } 


     public function delete(Request $request){

      $var = Student::where('id',$request->id)->first();
      $var->delete();
      return redirect()->route('student.list');

     }
}
