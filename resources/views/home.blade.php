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
            <div class="comics-element">
                <img :src="comicsElement.thumb" :alt="comicsElement.series"><br>
                {{-- <span>{{ comicsElement.series }}</span> --}}
            </div>
        </div>
        <button>Load more</button>
    </div>
    <div id="navbar-blue">
        <div class="wrapper">
            <ul>
                <li v-for="link in navbarLinks">
                    <img :src="getImagePath(link.image)" :alt="link.text + ' Image'">
                    {{-- <a :href="link.link">{{ link.text }}</a> --}}
                </li>
            </ul>
        </div>
    </div>
@endsection