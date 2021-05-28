<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Program;

class StudentController extends Controller
{
    function add_student(){
        return view('student.add_student');
    }


    function student(Request $request){
        
        $request->validate([
            
            'student_name'=>'required',
            'student_id'=>'required|unique:students',
            'student_email'=>'required|unique:students',
            'program_id'=>'required',
            'student_gender'=>'required',
            'student_phone'=>'required',
       ]);
        if(!$request){
            return back()->with('fail', 'Student already registred');
        }
    

               $query = DB::table('students')->insert([
                    'student_name' => $request->student_name,
                    'student_id' => $request->student_id,
                    'student_email' => $request->student_email,
                    'program_id' => $request->program_id,
                    'student_gender' => $request->student_gender,
                    'student_phone' => $request->student_phone,
                 
                ]);
            
               
   

        if($query){
            return back()->with('success', 'Student Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    }
    function view_student(){
        $data = Student::all();
        //dd($data);
        return view('student.view_student', ['students'=>$data]);
    }

}
