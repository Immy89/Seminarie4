<div class="pageSetup">
    <div class="header">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/PlateIcon.jpg') }}" alt="PlateIcon.jpg" />
            </a>
        </div>
        <h1 id="webName">Smarriga Recept</h1>
        <h4 id="slogan"> - Rätterna man vill sätta tänderna i
            <img src="{{ asset('images/Emoji_Smarrigt.jpg') }}" alt="Emoji_Smarrigt.jpg" />
        </h4>
    </div>

    <ul class="meny">
        <li class="dropdown">
            <span class="button">Recept</span>
            <ul class="dropdown-content">
                <li class="dropdownInside">
                    <a href="{{ url('/recipe/1') }}">Gräddkokta viltköttbullar och rårörda lingon med pepparrot</a>
                </li>
                <li class="dropdownInside">
                    <a href="{{ url('/recipe/3') }}">Vietnamesiska Pannkakor</a>
                </li>
                <li class="dropdownInside">
                    <a href="{{ url('/recipe/2') }}">Veganska Bananpannkakor</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="button" href="{{ route('Januari2018') }}">Kalender</a>
        </li>
        <li class="dropdownRight">
            @if(Auth::check())
                <div class="alert alert-danger success-block">
                    <span class="button">{{ Auth::user()->username }}</span>
                    <ul class="dropdown-content">
                        <li class="dropdownInside">
                            <a href="{{ url('/logout') }}">Logga ut</a>
                        </li>
                    </ul>
                </div>
            @else
                <a class="button" href="{{ url('/login') }}">Logga in</a>
            @endif
        </li>
    </ul>
</div>