<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;
use App\Models\Lecturer;
use App\Models\Department;

use Illuminate\Http\Request;

class UnitsController extends Controller
{
    function add_unit(){
        return view('units.add_units');
    }
    function unit(Request $request){
        
        $request->validate([
            
            'course_id'=>'required',
            'lecturer_id'=>'required'
            
       ]);
        if(!$request){
            return back()->with('fail', 'Unit already registred');
        }
    

               $query = DB::table('units')->insert([
                    'course_id' => $request->course_id,                  
                   
                    'lecturer_id' => $request->lecturer_id,
                   
                 
                ]);
            
               
   

        if($query){
            return back()->with('success', 'Unit Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    }
    function view_unit(){
        $data = Unit::all();
        //dd($data);
        return view('units.add_units', ['units'=>$data]);
        
    }

    function delete_unit($id){
        $delete = DB::table('units')
        ->where('id', $id)
        ->delete($id);
    
    //validate 
    
        if($delete){
           
            return back()->with('succes', 'Unit Deleted Succesfully');
        }else{
            return back()->with('succe', 'Oops, something went wrong');
        }
    }
}
