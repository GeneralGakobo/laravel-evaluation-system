<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Questionnaire;
use App\Models\QuestionValues;
use App\Models\QuestionType;

class QuestionnaireController extends Controller
{
    
function add_questionnaire(){
    $question_values = QuestionValues::all();
    $question_types = QuestionType::all();
    return view('questionnaire.add_questionnaire',compact('question_values','question_types'));
}


    function questionnaire(Request $request){
        
        $request->validate([
            
            'question'=>'required',
            'question_type_id'=>'required',
            'value_id'=>'required',
          
       ]);
        if(!$request){
            return back()->with('fail', 'Question already registred');
        }
    

               $query = DB::table('questionnaires')->insert([
                    'question' => $request->question,                  
                    'question_type_id' => $request->question_type_id,
                    'value_id' => $request->value_id,
                 
                 
                ]);
            
               
   

        if($query){
            return back()->with('success', 'Questionnaire Created Succesfully');
        }else{
            return back()->with('fail', 'Oops! Something went wrong');
        }


    
}


}
