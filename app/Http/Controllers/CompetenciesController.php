<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Competency;
use App\Models\Score;
use App\Models\Unit;

class CompetenciesController extends Controller
{
    function add_competency(){
        return view('competencies.add_competency');
    }
    function competency(Request $request){
        
        $request->validate([
            
            'name'=>'required',
            'score_id'=>'required',
            'unit_id'=>'required',
       ]);
        if(!$request){
            return back()->with('fail', 'Unit already registred');
        }
    

               $query = DB::table('competencies')->insert([
                    'name' => $request->name,                  
                    
                    'score_id' => $request->score_id,
                    'unit_id' => $request->unit_id,
                 
                ]);
            
               
   

        if($query){
            return back()->with('success', 'Competency Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    }
    function view_competency(){
        $data = Competency::all();
        //dd($data);
        return view('competencies.view_competency', ['competencies'=>$data]);
    }
}
