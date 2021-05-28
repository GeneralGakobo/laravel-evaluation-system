<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Department;

class CourseController extends Controller
{
    function add_course(){
        return view('courses.add_course');
    }


    function course(Request $request){
        
        $request->validate([
            
            'course_code'=>'required|unique:courses',
            'course_name'=>'required',
            'department_id'=>'required',
           
       ]);
        if(!$request){
            return back()->with('fail', 'course already registred');
        }
    

               $query = DB::table('courses')->insert([
                    'course_code' => $request->course_code,
                    'course_name' => $request->course_name,                  
                    'department_id' => $request->department_id,
                    
                 
                ]);
            
               
   

        if($query){
            return back()->with('success', 'course Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    }
    function view_course(){
        $data = Course::all();
        //dd($data);
        return view('courses.view_course', ['courses'=>$data]);
    }
}
