<footer>
    <div id="upper-footer">
        <div class="wrapper">
            <div id="upper-footer-elements">
                <div>
                    <ul>
                        <li><h3>DC Comics</h3></li>
                        {{-- <li v-for="link in dcComicsLinks"><a :href="link.link">{{ link.text }}</a></li> --}}
                    </ul>
                    <ul>
                        <li><h3>Shop</h3></li>
                        {{-- <li v-for="link in shopLinks"><a :href="link.link">{{ link.text }}</a></li> --}}
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>DC</h3></li>
                        {{-- <li v-for="link in dcLinks"><a :href="link.link">{{ link.text }}</a></li> --}}
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>Sites</h3></li>
                        {{-- <li v-for="link in sitesLinks"><a :href="link.link">{{ link.text }}</a></li> --}}
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
                    {{-- <li v-for="social in socials"><a :href="social.link"><img :src="getImagePath(social.image)" :alt="social.text"></a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</footer>