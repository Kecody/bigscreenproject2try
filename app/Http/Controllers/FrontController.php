<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Answerer;
use App\Models\Question;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function form()
    {
        return view('front.quizForm', ['questions' => Question::all()]);
    }
    public function message(Request $request)
    {
        $results=$request->all();
        $email=$results[1];
        //save surveyed data in database
        $surveyed= new Answerer();
        $surveyed->user_email=$email;
        $surveyed->user_token=$token;
        $surveyed->save();
        //save answer in database
        for($i=1;$i<count($results);$i++){
            $answer= new Answer();
            $answer->question_id=$i;
            $answer->surveyed_id=$surveyed->id;
            $answer->answer=$results[$i];
            $answer->save();
        }    
        return view('front.quizUrl', ['user_token'=>$token]);
    }  
    
    public function result()
    {
        $token = $request->user_token;
        $user= Answerer::where('user_token',$token)->first();
        $answererId= $user->id;
        $questions= Question::all();
        $answers= Answer::where('answerer_id',$answererId)->get();
        return view('front.quizResult', ['questions'=>$questions],['answers'=>$answers]);
    }    
}
