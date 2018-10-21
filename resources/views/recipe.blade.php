@extends('layouts.master')

@section('customcss')
    <link rel="Stylesheet" type="text/css" href="{{ asset('css/recept.css') }}">
@endsection

@section('content')
    <div id="titel">
        <h2>{{ $title }}</h2>
    </div>
    <div id="bild">
    <img src="{{ asset($image) }}" alt="Köttbullar_med_mos.jpg" />
    </div>
    <div id="ingredienser">
        {!! $ingredients !!}
    </div>
    <div id="beskrivning">
        {!! $description !!}
    </div>
    <div id="recensioner">
        <h3>Recensioner:</h3>
        @if(Auth::check())
            <div id="SkapaRecensioner">
                @if($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/recipe/post_comment') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $id }}" />
                    <textarea placeholder="Kommentar" name="kommentar" required></textarea>
                    <input type="submit" class="btn" value="Publicera">
                </form>
            </div>
        @endif
        <div id="InlästaRecensioner">
            @isset($comments)
                <hr>
            @endisset
            @foreach ($comments as $comment)
                <div id="commentfield">
                    <span id="uname">{{ $comment->user->username }}:</span>
                    <span id="comment">{{ $comment->comment }}</span>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection