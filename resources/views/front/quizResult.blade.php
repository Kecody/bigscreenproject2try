@extends('layouts.front')

@section('title')
BigScreen - Questionnnaire
@endsection

@section('content')
<div class="card-header mb-2 py-3">
    <img class ="mx-auto mb-4 mt-3 fade-in-fade-out" src="{{asset('img/logo_bigscreen.png')}}" alt="logo bigscreen">
    <p class ="date text-blue text-center" >Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le "{{$answers[0]->created_at}}"</p>
</div>        
<div class="d-flex align-items-center justify-content-center vh-50">
    <div class="card-body text-white bg-dark rounded my-3 mb-3 mx-auto " style="max-width: 60rem;">
        {{-- <h5 class = "date"> Remplit le :</h5> --}}
        <table class = " table table-bordered table-dark table-striped table-hover">
            <thead>
                <th>Numéro</th>
                <th>Question</th>
                <th>Réponse</th>
            </thead>
            @foreach ($answers as $answer)
            <tbody>
                <tr>
                    <td class ="text-info">{{ $questions[$answer->question_id-1]->title }}</td>
                    <td class="label">{{ $questions[$answer->question_id-1]->description }}</td>
                    <td>{{$answer->answer}}</td>
                </tr>
                @endforeach 
            </tbody>
        </table>      
    </div>
</div>       
@endsection

