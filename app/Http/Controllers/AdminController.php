<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //////////////////////\\\\\\\\\\\\\\\\\\\\
     ////////////////Auth\\\\\\\\\\\\\\\\\\\\\
     ////////////////////\\\\\\\\\\\\\\\\\\\\\\\

    public function __construct()
    {
        $this->middleware('auth');
    } 

    //////////////////////\\\\\\\\\\\\\\\\\\\\
     ////////////////Logged\\\\\\\\\\\\\\\\\\\\\
     ////////////////////\\\\\\\\\\\\\\\\\\\\\\\


    public function logged() {

        return  view('admin.logged');  
    }

     //////////////////////\\\\\\\\\\\\\\\\\\\\
     ////////////////Chart\\\\\\\\\\\\\\\\\\\\\
     ////////////////////\\\\\\\\\\\\\\\\\\\\\\\

     public function graphdata(Request $request)
     {
       // methode pour afficher le graphe de la question six
       // on store les différents réponses a la questions six dans un tableau quantity_six
       
       $quantity_six = [
         env('APP_OCCULUS_RIFTS')=>0,
         env('APP_HTC_VIVE')=>0,
         env('APP_WINDOWS_MIXED_REALITY')=>0,
         env('APP_PSVR')=>0
       ];
       
         $result_six = Answer::where('question_id', 6)->get();
        //              
         foreach($result_six as $value){
          // dump($value->answer);
          $quantity_six[$value->answer]++; 
         }
        //  dump($quantity_six);
        //  dd($result_six); 
   
       // on store les différents réponses a la questions sept dans un tableau quantity_seven
       $quantity_seven = [
          env('APP_STEAM_VR')=>0,
          env('APP_OCCULUS_STORE')=>0,
          env('APP_VIVEPORT')=>0,
          env('APP_PLAYSTATION_VR')=>0,
          env('APP_GOOGLE_PLAY')=>0,
          env('APP_WINDOWS_STORE')=>0
       ];
       // récupèr l'id de la question sept et dans un foreach on store les différents réponses des utilisateurs
       // ceci permet en même temps de faire le compte de chaque réponse de la question sept
         $res = Answer::where('question_id',7)->get();                  
         foreach($res as $val){
           $quantity_seven[$val->answer]++;
         }
       // on store les différents réponses a la questions dix dans un tableau quantity_ten
       $quantity_ten = [
        env('APP_WATCH_TV')=>0,
        env('APP_WATCH_FILM')=>0,
        env('APP_PLAYSOLO')=>0,
        env('APP_PLAYTEAM')=>0
       ];
       // récupèr l'id de la question dix et dans un foreach on store les différents réponses des utilisateurs
       // ceci permet en même temps de faire le compte de chaque réponse de la question dix
         $res = Answer::where('question_id', 10)->get();                  
         foreach($res as $val){
           $quantity_ten[$val->answer]++;
         }
   
       // on store les différents réponses a la questions onze dans un tableau quantity_eleven
       $quantity_eleven = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       // récupèr l'id de la question onze et dans un foreach on store les différents réponses des utilisateurs
       // ceci permet en même temps de faire le compte de chaque réponse de la question onze
         $res = Answer::where('question_id',11)->get();                  
         foreach($res as $val){
           $quantity_eleven[$val->answer]++;
         }
   
       // on store les différents réponses a la questions douze dans un tableau quantity_twelve
       $quantity_twelve = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       // récupèr l'id de la question douze et dans un foreach on store les différents réponses des utilisateurs
       // ceci permet en même temps de faire le compte de chaque réponse de la question douze
         $res = Answer::where('question_id',12)->get();                  
         foreach($res as $val){
           $quantity_twelve[$val->answer]++;
         }
   
       // on store les différents réponses a la questions treize dans un tableau quantity_thirteen
       $quantity_thirteen = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       // récupèr l'id de la question treize et dans un foreach on store les différents réponses des utilisateurs
       // ceci permet en même temps de faire le compte de chaque réponse de la question treize
         $res = Answer::where('question_id',13)->get();                  
         foreach($res as $val){
           $quantity_thirteen[$val->answer]++;
         }
   
       // on store les différents réponses a la questions quartorce dans un tableau quantity_fourteen
       $quantity_fourteen = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       // récupère l'id de la question quartorze et dans un foreach on store les différents réponses des utilisateurs
       // ceci permet en même temps de faire le compte de chaque réponse de la question quartorce
         $res = Answer::where('question_id',14)->get();                  
         foreach($res as $val){
           $quantity_fourteen[$val->answer]++;
         }
   
       // on store les différents réponses a la questions quinze dans un tableau quantity_fifteen
       $quantity_fifteen = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       // récupèr l'id de la question quinze et dans un foreach on store les différents réponses des utilisateurs
       // ceci permet en même temps de faire le compte de chaque réponse de la question quinze
         $res = Answer::where('question_id','15')->get();                  
         foreach($res as $val){
           $quantity_fifteen[$val->answer]++;
         }
   
     
       // on fait appel aux resultat sur la vue home
       return view('admin.home',[
         'quantity_six' => $quantity_six,
         'quantity_seven' => $quantity_seven,
         'quantity_ten' => $quantity_ten,
         'quantity_eleven' => $quantity_eleven,
         'quantity_twelve' => $quantity_twelve,
         'quantity_thirteen' => $quantity_thirteen,
         'quantity_fourteen' => $quantity_fourteen,
         'quantity_fifteen' => $quantity_fifteen]);
     }
       
    //////////////////////\\\\\\\\\\\\\\\\\\\\\\\
    /////////////////Question\\\\\\\\\\\\\\\\\\\\\
    ////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function questions()
    {
        $questions = Question::get();
        $questionsData = [];
        foreach ($questions as $question) {
            array_push($questionsData, [
                'description' => $question->description,
                'type' => $question->type,
                'nth' => ($question->id),
            ]);
        }    
        return view('admin.questions',['questions' => $questionsData]);
    }  
    
    //////////////////////\\\\\\\\\\\\\\\\\\\\\\\
    /////////////////Reponse\\\\\\\\\\\\\\\\\\\\\
    ////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function answersUsers()
    {
        return view('admin.answer_user', 
        ['questions'=> Question::all()],
        ['answers'=> Answer::orderBy('created_at', 'desc')->get()]);
        // dd($answersData);
        
    }   
    
    //////////////////////\\\\\\\\\\\\\\\\\\\\\\\
    /////////////////Quiz\\\\\\\\\\\\\\\\\\\\\
    ////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\
    
    public function form()
    {
        $forms = Form::all();
        
        return view('admin.form',['forms'=>$forms]);
    }    

}
