@extends('layouts.app')

{{-- sistemare il nome che non si vede --}}
@section('title',$formato['titolo'])    

@section('content')
    <div class="container">
        <h1>{{$formato['titolo']}}</h1>    
        <div class="prodotti">
            {{-- visualizzo le immagini --}}
            <img src="{{$formato['src-h']}}" alt="immagine pasta">
            <img src="{{$formato['src-p']}}" alt="immagine pasta">   
        </div>
        {{-- /prodotti --}}
        {{-- visualizzo la descrizione uso !! per vedere i br che ho del database pasta--}} 
        <div class="descrizione">
            <p>{!!$formato['descrizione']!!}</p>
        </div>
    </div>
    {{-- /container --}}

@endsection