<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Models\Course;

class courseController extends Controller
{
    //
    public function courseTeacher(){

        $c = Course::where('id',1)->first();
        //belongsto
        // return $c->teacher;
        //Eloquent
        return $c->assignedTeacher();

    }
}
