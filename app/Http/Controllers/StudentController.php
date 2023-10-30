<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.addstudent');
    }

    public function insert(Request $request){

        $student = new Student;

        $student->name=$request->name;
        $student->weight=$request->weight;

        $student->save();

        return redirect(route('viewstudent'));

        // return view('student.addstudent');
    }

    public function fetchStudent(){
          
        $students=Student::all();
        return view('student.studentview',compact('students'));

    }
}
