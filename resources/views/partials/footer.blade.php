<footer>
    <div id="upper-footer">
        <div class="wrapper">
            <div id="upper-footer-elements">
                <div>
                    <ul>
                        <li><h3>DC Comics</h3></li>
                        @foreach($dcComicsLinks as $link)
                            <li><a href="{{ $link['link'] }}">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                    <ul>
                        <li><h3>Shop</h3></li>
                        @foreach($shopLinks as $link)
                        <li><a href="{{ $link['link'] }}">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>DC</h3></li>
                        @foreach($dcLinks as $link)
                        <li><a href="{{ $link['link'] }}">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>Sites</h3></li>
                        @foreach($siteLinks as $link)
                        <li><a href="{{ $link['link'] }}">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="upper-footer-background-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC Comics Background Logo">
            </div>
        </div>
    </div>
    <div id="bottom-footer">
        <div class="wrapper">
            <div class="sign-up">
                <button>Sign-up now!</button>
            </div>
            <div class="follow-us">
                <ul>
                    <li>Follow us</li>
                    @foreach($socials as $social)
                        <li><a href="{{ $social['link'] }}"><img src="{{ Vite::asset('resources/' . $social['image']) }}" alt="{{ $social['text'] . ' Image'}}"></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>