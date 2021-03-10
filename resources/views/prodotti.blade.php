@extends('layouts.app')

@section('content')
  <!-- <p>codice prodotti</p> -->
  <div class="container">
    <div class="card-container">
        @foreach($tipologie as $tipologia)
      <div class="card">
          <img src="{{$tipologia['src']}}" alt="">
        <div class="overlay">
          <a href="#">{{ $tipologia['titolo'] }}</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>



@endsection
