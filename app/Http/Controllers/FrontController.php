<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Form;
use App\Models\Answer;
use App\Models\Answerer;
use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function form()
    {   
        // $request->get();
        // 
        //     if ($form) {
        //         return view('front.quizForm', ['questions' => $form-> questions]);
        //     }
        //         return view('front.quizForm', ['questions' => []]);
        
        // on ajoute le lien du token
        $tokenForm = "XeoQJso1qWdj1DTPGI8nO1PSKP3ZYMEUYJwd0ngh";
        // on ajoute nos question et notre token au controller
        return view('front.quizForm', ['questions' => Question::all()], 
        ['formtoken'=> $tokenForm]);
    }
    
    public function message(Request $request)
    {
        $results= $request->all();
        $email= $results[1];
        $token= Str::random(32);
        //Sauvegarde des répondants
        $answerer= new Answerer();
        $answerer->user_email= $email;
        $answerer->user_token= $token;
        $answerer->status = true;
        $answerer->save();
        
        //Sauvegarde des réponses 
        for($i=1;$i<count($results);$i++){
            $answer= new Answer();
            $answer->question_id= $i;
            $answer->answerer_id= $answerer->id;
            $answer->answer= $results[$i];
            $answer->save();
        }    
        return view('front.quizUrl', ['user_token'=>$token]);
    }  
    
    public function result(Request $request)
    {
        //Récupération des réponses par le token de notre répondant
        $token = $request->token;
        $user= Answerer::where('user_token', $token)->first();
        $answererId= $user->id;
        $questions= Question::all();
        $answers= Answer::where('answerer_id',$answererId)->get();
        return view('front.quizResult', ['questions'=>$questions], ['answers'=>$answers]);
    }    
}
