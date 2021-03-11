@extends('layouts.app')

{{-- sistemare il nome che non si vede --}}
@section('title',$formato['titolo'])    

{{-- cdn icone --}}
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

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
        <div class="box-icone">
            <div class="icone">
                <i class="fas fa-info"></i>
                <p>{!!$formato['tipo']!!}</p>
            </div>
            <div class="icone">
                <i class="fas fa-clock"></i>
                <p>{!!$formato['cottura']!!}</p>
            </div>
            <div class="icone">
                <i class="fas fa-weight-hanging"></i>
                <p>{!!$formato['peso']!!}</p>
            </div>
        </div>
    </div>
    {{-- /container --}}

@endsection