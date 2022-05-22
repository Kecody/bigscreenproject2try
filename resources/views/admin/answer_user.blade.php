@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection
{{--Page de toutes les réponses--}}
@section('content')
    <div class="d-flex align-items-center justify-content-center vh-50">
        <div class="card-body text-white bg-secondary my-3 mb-3 mx-auto rounded " style="max-width: 60rem;">
            {{--on boucle sur les répondants--}}
            @foreach($answerers as $answerer)
            <h6 class ="text-success bold">Remplit le : {{$answerer->created_at}}</h6>
            <table class="table table-bordered-rounded table-dark table-striped table-hover " id ="margintable">
                <thead class = "hiddenChild">
                    <th>Q°</th>
                    <th>Description</th>
                    <th>Réponses</th>
                </thead>
                <tbody>
                    {{-- on boucle sur les réponses de chaque répondants --}}
                        @foreach($answerer->answers as $answer)
                        <tr>
                            <td class="text-info">{{$answer->question_id}}</td>
                            <td class="label">{{$answer->question->description}}</td>
                            <td>{{$answer->answer}}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            @endforeach
        </div>
    </div>  
@endsection