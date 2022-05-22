@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection
{{--Page de toutes les formulaire--}}
@section('content')
<div class="d-flex align-items-center justify-content-center vh-50">
    <div class="card-body text-white bg-secondary my-3 mb-3 mx-auto rounded " style="max-width: 60rem;">
            <table class="table table-bordered-rounded table-dark table-striped table-hover ">
                <thead>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Numéro</th>
                </thead>
                {{--On boucle sur tous les formulaires disponibles--}}
                @foreach($forms as $form)
                <tbody>
                        <tr>
                            <td class ="text-info">{{$form->title}}</td>
                            <td class="label">{{$form->description}}</td>
                            <td class="label">{{$form->id}}</td>
                        </tr>
                </tbody>
                @endforeach
            </table>    
        </div>
    </div>  
@endsection