@extends('layouts.master')

@section('customcss')
    <link rel="Stylesheet" type="text/css" href="{{ asset('css/loggaIn_registrera.css') }}">
@endsection

@section('content')
    <div id="ram">
        <div id="loggaIn">
            <form action="LoggaIn.php" method="POST">
                <div class="rubrik">
                    <h2>Logga in</h2>
                </div>
                <div class="cont">
                    <label>
                        <b>Användarnamn</b>
                    </label>
                    <input type="text" placeholder="Användarnamn" name="usernameLogin" required/>

                    <label>
                        <b>Lösenord</b>
                    </label>
                    <input type="password" placeholder="Lösenord" name="passwordLogin" required/>

                    <div class="buttons">
                        <button type="submit">Logga in</button>
                        <!-- <button type="button" class="cancelbtn">Avbryt</button> -->
                    </div>
                </div>

                <!-- <div class="container">
                    <span class="forgotPassword">
                        <input type="checkbox" checked="checked"> Kom ihåg mig
                        <a href="#">Glömt lösenordet?</a>
                    </span>
                </div> -->
            </form>
        </div>
        <div id="registrera">
            <form action="Registrera.php" method="POST">
                <div class="rubrik">
                    <h2>Registrera ny användare</h2>
                </div>
                <span class="message">*Alla fält måste fyllas i.</span>
                <div class="cont">
                    <label>
                        <b>Mailadress</b>
                    </label>
                    <input type="email" placeholder="Mailadress" name="email" required>

                    <label>
                        <b>Användarnamn</b>
                    </label>
                    <input type="text" placeholder="Användarnamn" name="username" required>

                    <label>
                        <b>Lösenord</b>
                    </label>
                    <input type="password" placeholder="Lösenord" name="passwordRegister" required>

                    <label>
                        <b>Upprepa lösenord</b>
                    </label>
                    <input type="password" placeholder="Lösenord igen" name="passwordAgainRegister" required>

                    <div class="buttons">
                        <button type="submit">Registrera mig</button>
                        <!-- <button type="button" class="cancelbtn">Avbryt</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

