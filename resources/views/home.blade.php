@extends('layouts.app')

@section('title', 'DC Comics')

@section('main-section')
    <div id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Comics Jumbotron">
    </div>
    <div class="wrapper">
        <div class="title">
            <span>Current series</span>
        </div>
        <div id="comics-list">
            
            @foreach($comics as $comic)
                <div class="comics-element">
                    <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['series'] }}"><br>
                    <span>{{ $comic['series'] }}</span>
                </div>
            @endforeach
        </div>
        <button>Load more</button>
    </div>
    <div id="navbar-blue">
        <div class="wrapper">
            <ul>
                @foreach($navbarLinks as $link)
                    <li>
                        <img src="{{ Vite::asset('resources/' . $link['image']) }}" alt="{{ $link['text'] . ' Image' }}">
                        <a href="{{ $link['link'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection