<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Answerer;
use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function form()
    {
        //
        return view('front.quizForm', ['questions' => Question::all()]);
    }
    public function message(Request $request)
    {
        $results= $request->all();
        $email= $results[1];
        $token= Str::random(32);
        //save surveyed data in database
        $answerer= new Answerer();
        $answerer->user_email= $email;
        $answerer->user_token= $token;
        $answerer->status = true;
        // dd($token);
        $answerer->save();
        //save answer in database
        // dd($results);
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
        $token = $request->token;
        $user= Answerer::where('user_token', $token)->first();
        $answererId= $user->id;
        $questions= Question::all();
        $answers= Answer::where('answerer_id',$answererId)->get();
        return view('front.quizResult', ['questions'=>$questions], ['answers'=>$answers]);
    }    
}
