<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Competency;
use App\Models\Score;

class AnswerController extends Controller
{
    function Add_answer(){
        returnview('dashboard.answer');
    }

    function answer(Request $request){
        
        $request->validate([
            
            'answer_name'=>'required',
            'score_id'=>'required',
       ]);
        if($request==false){
            return back()->with('fail', 'Answer already registred');
        }
    

       $query = DB::table('answers')
            ->insert([
                'answer_name'=>$request->answer_name,
                'score_id'=>$request->implode($request->score_id, ',')
               
              
            ]);
           

        if($query){
            return back()->with('success', 'Answer Registred Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }

    }
    
    function view_answer(){
        $data = Answer::all();
        //dd($data);
        return view('dashboard.answer', ['answers'=>$data]);
    }

    function delete_answer($id){
        $delete = DB::table('answers')
        ->where('id', $id)
        ->delete($id);
    
    //validate 
    
        if($delete){
           
            return back()->with('succes', 'Session Deleted Succesfully');
        }else{
            return back()->with('succe', 'Oops, something went wrong');
        }
    }

}
