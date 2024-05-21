<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class loginController extends Controller
{
    //
    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $teacher = Teacher::where('phone',$request->phone)
                            ->where('password',md5($request->password))
                            ->first();
        if($teacher){
            $request->session()->put('user',$teacher->name);
            return redirect()->route('teacherDash');
        }

        return back();

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}