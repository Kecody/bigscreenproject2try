<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Answer;
use App\Models\Answerer;
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
       // Méthode pour afficher chaques graphes 6 7 10
       // On ajoute les réponses sous le format .env, cela évite le hard-coding de notre questionnaire dans un tableau
       ///pie-chart 6
       $quantity_six = [
         env('APP_OCCULUS_RIFTS')=>0,
         env('APP_HTC_VIVE')=>0,
         env('APP_WINDOWS_MIXED_REALITY')=>0,
         env('APP_PSVR')=>0
       ];
        //On récupère des questions et dans un foreach on store les différents réponses des utilisateurs
        //ceci permet en même temps de faire le compte de chaque réponse de la question dix
         $result_six = Answer::where('question_id', 6)->get();
                   
         foreach($result_six as $valueSix){
        
          $quantity_six[$valueSix->answer]++; 
         }
        
   
      ///pie-chart 7
       $quantity_seven = [
          env('APP_STEAM_VR')=>0,
          env('APP_OCCULUS_STORE')=>0,
          env('APP_VIVEPORT')=>0,
          env('APP_PLAYSTATION_VR')=>0,
          env('APP_GOOGLE_PLAY')=>0,
          env('APP_WINDOWS_STORE')=>0
       ];
       
       $result_seven = Answer::where('question_id',7)->get();                  
         foreach($result_seven as $valueSeven){
           $quantity_seven[$valueSeven->answer]++;
         }
       ///pie-chart 10
       $quantity_ten = [
        env('APP_WATCH_TV')=>0,
        env('APP_WATCH_FILM')=>0,
        env('APP_PLAYSOLO')=>0,
        env('APP_PLAYTEAM')=>0
       ];
      
       // Récupération de l'ID question, on ajoute les différentes réponses des utilisateurs
       // On compte toute les réponses de la question 14
       // On utilise cette méthode pour chaques question dont à besoin pour nos graphes
       $result_ten = Answer::where('question_id', 10)->get();                  
         foreach($result_ten as $valueTen){
           $quantity_ten[$valueTen->answer]++;
         }
   
       ///radar-chart 1.11
       $quantity_eleven = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
      

       $result_eleven = Answer::where('question_id',11)->get();                  
         foreach($result_eleven as $valueEleven){
           $quantity_eleven[$valueEleven->answer]++;
         }
   
      ///radar-chart 1.12
       $quantity_twelve = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       
       $result_twelve = Answer::where('question_id',12)->get();                  
         foreach($result_twelve as $valueTwelve){
           $quantity_twelve[$valueTwelve->answer]++;
         }
   
       ///radar-chart 1.13
       $quantity_thirteen = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       
       $result_thirteen = Answer::where('question_id',13)->get();                  
         foreach($result_thirteen as $valueThirteen){
           $quantity_thirteen[$valueThirteen->answer]++;
         }
   
       ///radar-chart 1.14
       $quantity_fourteen = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       
       $result_fourteen = Answer::where('question_id',14)->get();                  
         foreach($result_fourteen as $valueFourteen){
           $quantity_fourteen[$valueFourteen->answer]++;
         }
       ///radar-chart 1.15
       $quantity_fifteen = [
         '1' => 0,
         '2' => 0,
         '3' => 0,
         '4' => 0,
         '5' => 0
       ];
       
       $result_fifteen = Answer::where('question_id','15')->get();                  
         foreach($result_fifteen as $valueFifteen){
           $quantity_fifteen[$valueFifteen->answer]++;
         }
   
       // On retourne la totalité de nos réponses notre view HOME
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
      ///integration des question dans mon controller
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
        //integration des answerer question et answer dans mon controller
        return view('admin.answer_user', 
        ['questions'=> Question::all()],
        ['answerers'=> Answerer::all()],
        ['answers'=> Answer::where('answerer_id')->orderBy('created_at', 'DESC')->get()]);
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
