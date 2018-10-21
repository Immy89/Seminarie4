@extends('layouts.master')

@section('customcss')
    <link rel="Stylesheet" type="text/css" href="{{ asset('css/Kalender.css') }}">
@endsection

@section('content')
    <div id="ram">
        <h2>Kalender</h2>
        <div id="kalender">
            <div class="valjManad">
                <span class="foregaende">
                    <a href="{{ route('Januari2018') }}">&#10094;</a>
                </span>
                <span class="manadAr">Februari
                    <br>2018</span>
                <span class="nasta">
                    <a href="{{ route('SidanUnderUppbyggnad') }}">&#10095;</a>
                </span>
            </div>
            <div class="vdagar">
                <span class="veckodagar">Måndag</span>
                <span class="veckodagar">Tisdag</span>
                <span class="veckodagar">Onsdag</span>
                <span class="veckodagar">Torsdag</span>
                <span class="veckodagar">Fredag</span>
                <span class="veckodagar">Lördag</span>
                <span class="veckodagar">Söndag</span>
            </div>
            <div class="vecka">
                <span class="dag"></span>
                <span class="dag"></span>
                <span class="dag"></span>
                <span class="dag">1
                    <a href="{{ url('/recipe/3') }}">
                        <img src="{{ asset('images/Vietnamesiska_Pannkakor.jpg') }}" alt="Vietnamesiska_Pannkakor.jpg" />
                    </a>
                </span>
                <span class="dag">2</span>
                <span class="dag">3</span>
                <span class="dag">4</span>
            </div>
            <div class="vecka">
                <span class="dag">5</span>
                <span class="dag">6</span>
                <span class="dag">7</span>
                <span class="dag">8</span>
                <span class="dag">9</span>
                <span class="dag">10</span>
                <span class="dag">11</span>
            </div>
            <div class="vecka">
                <span class="dag">12</span>
                <span class="dag">13
                    <a href="{{ url('/recipe/1') }}">
                        <img src="{{ asset('images/Köttbullar_med_mos.jpg') }}" alt="Köttbullar_med_mos.jpg" />
                    </a>
                </span>
                <span class="dag">14</span>
                <span class="dag">15</span>
                <span class="dag">16</span>
                <span class="dag">17</span>
                <span class="dag">18</span>
            </div>
            <div class="vecka">
                <span class="dag">19</span>
                <span class="dag">20</span>
                <span class="dag">21</span>
                <span class="dag">22
                    <a href="{{ url('/recipe/2') }}">
                        <img src="{{ asset('images/Veganska_Bananpankakor.jpg') }}" alt="Veganska_Bananpankakor.jpg" />
                    </a>
                </span>
                <span class="dag">23</span>
                <span class="dag">24</span>
                <span class="dag">25</span>
            </div>
            <div class="vecka">
                <span class="dag">26</span>
                <span class="dag">27</span>
                <span class="dag">28</span>
                <span class="dag"></span>
                <span class="dag"></span>
                <span class="dag"></span>
                <span class="dag"></span>
            </div>
        </div>
    </div>
@endsection

