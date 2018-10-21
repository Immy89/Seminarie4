@extends('layouts.master')

@section('customcss')
    <link rel="Stylesheet" type="text/css" href="{{ asset('css/loggaIn_registrera.css') }}">
@endsection

@section('content')
    <div id="ram">
        <div class="rubrik">
            <h2>Logga in</h2>
        </div>
        <div class="meddelande">
            @if(isset(Auth::user()->email))
                <script>window.location="/login/successlogin";</script>
            @endif
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
        </div>
        <form method="POST" action="{{ url('/login/checklogin') }}">
            {{ csrf_field() }}
            <div class="cont">
                <label><b>Email<b></label>
                <input type="email" name="email"/>

                <label><b>Password<b></label>
                <input type="password" name="password"/>

                <div class="buttons">
                    <input type="submit" name="login" class="btn" value="Logga In"/>
                </div>
            </div>
        </form>
        <p>Har du inte inget konto än? <a href="{{ url('/register') }}">Registrera dig här.</a></p>
    </div>
@endsection