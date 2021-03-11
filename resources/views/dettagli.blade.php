@extends('layouts.app')

{{-- sistemare il nome che non si vede --}}
@section('title',$formato['titolo'])    

@section('content')
    <div class="container">
        <h1>{{$formato['titolo']}}</h1>    
    </div>

    <div class="prodotti">
        <img src="{{$formato['src-h']}}" alt="immagine pasta">
        <img src="{{$formato['src-p']}}" alt="immagine pasta">
    </div>


@endsection