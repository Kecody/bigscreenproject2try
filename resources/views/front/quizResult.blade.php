@extends('layouts.front')

@section('title')
BigScreen - Questionnnaire
@endsection

@section('content')
<div class="bg-dark mx-auto my-3 py-2 px-2 rounded" style="max-width: 65rem;">
        <div class= "mx-0 mb-2 py-3">
            <img class ="mx-auto mb-4 mt-3 fade-in-fade-out" src="{{asset('img/logo_bigscreen.png')}}" alt="logo bigscreen">
            <p class ="date text-blue text-center" >Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le "{{$answers[0]->created_at}}"</p>
        </div>        
        <div class="d-flex align-items-center justify-content-center vh-50">
            <div class="card-body text-white bg-dark rounded mt-3 mb-2 mx-2 " style="max-width: 65rem;">
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
                            <td width="15%" class ="text-info">{{ $questions[$answer->question_id-1]->title }}</td>
                            <td width="60%" class="label">{{ $questions[$answer->question_id-1]->description }}</td>
                            <td width="25%">{{$answer->answer}}</td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>      
            </div>
        </div>
    </div> 
</div>      
@endsection

