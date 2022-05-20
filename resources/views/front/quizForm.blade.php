  @extends('layouts.front')
  
  @section('title')
  BigScreen - Questionnnaire
  @endsection
  
  @section('content')
    <div class="bg-dark my-4 py-3 px-5 rounded">
      <img class ="mx-auto my-4 fade-in-fade-out" src="{{asset('img/logo_bigscreen.png')}}" alt="logo bigscreen">
      <legend></legend>
      <h4 class ="my-4 text-center text-blue font-weight-bold ">Merci de répondre à toute les questions et de valider en fin de formulaire</h4>
      <form class ="bg-secondary px-4 py-3 rounded" method="POST" action="/message">
        @csrf
        @foreach ($questions as $question)
        <div>
          <p class="text-justify my-3 text-info">{{ $question->title }}</p>
        </div>
        @if ($question->type=='A')
        <div>
          <label for="{{ $question->id }}" placeholder="Default input">{{ $question->description }}</label>
          <select name="{{ $question->id }}" id="{{ $question->id }}" class="form-select " aria-label="Floating label select example">
            @foreach($question->choices as $choice)
            <option value={{$choice}}>
              {{$choice}}
            </option>
            @endforeach
          </select>
        </div>
        <hr class ="bg-light ">
        @elseif($question->type=='B')
        <div>
          <label for="{{ $question->id }}" class="form-label">{{ $question->description }}</label>
          <input type="text" name="{{ $question->id }}" id="{{ $question->id }}" class="form-control">
        </div>
        <hr class ="bg-light ">
        @else
        <div>
          <p>{{ $question->description }}</p>
          @for ($i = 1; $i<=5; $i++)
          <div class="form-check form-check-inline">
            <label for="{{ $question->id }}">{{$i}}</label>
            <input type="radio" id="{{ $question->id }}"
            name="{{ $question->id }}" value="{{$i}}">
          </div>
          @endfor
        </div>
        <hr class ="bg-light ">
        @endif
        @endforeach
        <br>
        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Finaliser</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection