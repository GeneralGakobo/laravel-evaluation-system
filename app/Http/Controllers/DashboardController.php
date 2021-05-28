<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;
use App\Models\Session;
use App\Models\Program;
use App\Models\department;
use App\Models\School;

class DashboardController extends Controller
{
    function regsession(){
        return view('dashboard.regsession');
    }
    function session(Request $request){
        
        $request->validate([

            'session_name'=>'required|unique:sessions',
       ]);
        if(!$request){
            return back()->with('fail', 'Session already registred');
        }
    

       $query = DB::table('sessions')
            ->insert([
                'session_name'=>$request->session_name,
               
            ]);

        if($query){
            return back()->with('success', 'Session Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }

    }
      


    function viewsession(){
        $data = Session::all();
        //dd($data);
        return view('dashboard.regsession', ['sessions'=>$data]);
    }


    function delete_session($id){
        $delete = DB::table('sessions')
        ->where('id', $id)
        ->delete($id);
    
    //validate 
    
        if($delete){
           
            return back()->with('succes', 'Session Deleted Succesfully');
        }else{
            return back()->with('succe', 'Oops, something went wrong');
        }
    }


 
    function edit_session($id){
        $edit = Session::find($id);
        return view('dashboard.edit_session',compact('session','id'));
  
    }

    function update($id){
       
    
        $edit = UserData::find($id);
        $edit->type = request('sess_name');
        
        
        $edit->save();
       
        return json_encode(array('statusCode'=>200));
      
    
    }
    






    function school(Request $request){
        
        $request->validate([
            
            'school_name'=>'required|unique:schools',
       ]);
        if($request==false){
            return back()->with('fail', 'School already registred');
        }
    

       $query = DB::table('schools')
            ->insert([
                'school_name'=>$request->school_name,
               
            ]);

        if($query){
            return back()->with('success', 'School Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }

    }
    function viewschool(){
        $data = School::all();
        //dd($data);
        return view('dashboard.schools', ['schools'=>$data]);
    }


    function department(Request $request){
        
        $request->validate([
            
            'department_name'=>'required|unique:departments',
            'school_id'=>'required',
       ]);
        if(!$request){
            return back()->with('fail', 'Department already registred');
        }
    

               $query = DB::table('departments')->insert([
                    'department_name' => $request->department_name,
                    'school_id' => $request->school_id,
                ]);
            
               
   

        if($query){
            return back()->with('success', 'Department Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    }
    function viewdepartment(){
        $data = Department::all();
        //dd($data);
        return view('dashboard.departments', ['departments'=>$data]);
    }


    function program(Request $request){
        
        $request->validate([
            
            'program_name'=>'required|unique:programs',
            'department_id'=>'required',
       ]);
        if(!$request){
            return back()->with('fail', 'Program already registred');
        }
    

               $query = DB::table('programs')->insert([
                    'program_name' => $request->program_name,
                    'department_id' => $request->department_id,
                ]);
            
               
   

        if($query){
            return back()->with('success', 'Program Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    }
    
    function viewprogram(){
        $data = Program::all();
        //dd($data);
        return view('dashboard.programs', ['programs'=>$data]);
    }








    function panels(){
        return view('dashboard.panels');
    }
    function morris(){
        return view('dashboard.morris');
    }
    function empty(){
        return view('dashboard.empty');
    }
    function tables(){
        return view('dashboard.tables');
    }
    function forms(){
        return view('dashboard.forms');
    }
    function index(){
        return view('dashboard.index');
    }
 
}
