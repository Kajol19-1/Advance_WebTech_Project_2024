<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function teacherDash(){
        return view('pages.teachers.teacherDash');
    }

    public function myProfile(){
        $name = "kajol";
        $id = "19-40018-1";
        $dob = "20-08-1999";
        $names = array ("kajol","jesmin","tanvir");
        return view('pages.myprofile')
        ->with('name',$name)
        ->with('id',$id)
        ->with('dob',$dob)
        ->with('names',$names);
    
    }


}
