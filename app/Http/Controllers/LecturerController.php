<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lecturer;
use App\Models\Department;

class LecturerController extends Controller
{
    function add_lecturer(){
        return view('lecturer.add_lecturer');
    }


    function lecturer(Request $request){
        
        $request->validate([
            
            'lecturer_name'=>'required',
            'lecturer_email'=>'required|unique:lecturers',
            'department_id'=>'required',
            'lecturer_phone'=>'required',
       ]);
        if(!$request){
            return back()->with('fail', 'Lecturer already registred');
        }
    

               $query = DB::table('lecturers')->insert([
                    'lecturer_name' => $request->lecturer_name,                  
                    'lecturer_email' => $request->lecturer_email,
                    'department_id' => $request->department_id,
                    'lecturer_phone' => $request->lecturer_phone,
                 
                ]);
            
               
   

        if($query){
            return back()->with('success', 'Lecturer Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    }
    function view_lecturer(){
        $data = Lecturer::all();
        //dd($data);
        return view('lecturer.view_lecturer', ['lecturers'=>$data]);
    }
}
