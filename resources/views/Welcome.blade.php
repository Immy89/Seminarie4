@extends('layouts.master')

@section('customcss')
<link rel="Stylesheet" type="text/css" href="{{ asset('css/startsidan.css') }}">
@endsection

@section('content')
    <div class="kalenderReklam">
        <h2 class="header2">Välkommen till Smarriga Recept</h2>
        <p>Har du svårt att bestämma vad du ska äta till middag? Här kan du hitta massor med smarriga recept.</p>
        <p>Spana in vår kalenderfunktion med möjlighet att planera din matsedel!</p>
        <a href="{{ route('Januari2018') }}">
            <img src="{{ asset('images/seasons.jpg') }}" alt="seasons.jpg" /> 
        </a>
    </div>
@endsection

