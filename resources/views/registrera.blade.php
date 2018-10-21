@extends('layouts.master')

@section('customcss')
    <link rel="Stylesheet" type="text/css" href="{{ asset('css/loggaIn_registrera.css') }}">
@endsection

@section('content')
    <div id="ram">
        <div class="rubrik">
            <h2>Registrera ny användare</h2>
        </div>
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
        <form method="POST" action="{{ url('/register/saveUser') }}">
            {{ csrf_field() }}
            <span class="info">*Alla fält måste fyllas i.</span>
            <div class="cont">
                <label><b>Email</b></label>
                <input type="email" name="email"/>

                <label><b>Användarnamn</b></label>
                <input type="text" name="username"/>

                <label><b>Lösenord</b></label>
                <input type="password" name="password"/>

                <label><b>Upprepa lösenord</b></label>
                <input type="password" name="passwordRepeat"/>

                <div class="buttons">
                    <input type="submit" name="register" class="btn" value="Registrera mig"/>
                </div>
            </div>
        </form>
    </div>
@endsection