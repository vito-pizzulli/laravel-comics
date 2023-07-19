<header>
    <div class="wrapper">
        <div id="header-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics Logo">
        </div>
        <nav id="header-navbar">
            <ul>
                @foreach($dcComicsLinks as $link)
                    <li>
                        <a href="{{ $link['link'] }}">{{ $link['text'] }}</a>
                        <div class="light-bar"></div>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>