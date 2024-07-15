<footer>
    <div class="footer-container">
        <section class="navbar">
            <nav>
                <section class="nav-one">
                    <h3>dc comics</h3>
                    <ul>
                        @foreach ($footerComicsLinks as $link)
                            <li>
                            {{ $link['name'] }}
                            </li>
                        @endforeach
                    </ul>

                    <h3>shop</h3>
                    <ul>
                        @foreach ($footerShopLinks as $link)
                            <li>
                                {{ $link['name'] }}
                            </li>
                        @endforeach
                    </ul>
                </section>
                <section class="nav-two">
                    <h3>dc</h3>
                    <ul>
                        @foreach ($footerDcLinks as $link)
                            <li>
                                {{ $link['name'] }}
                            </li>
                        @endforeach
                    </ul>
                </section>
                <section class="nav-three">
                    <h3>sites</h3>
                    <ul>
                        @foreach ($footerSitesLinks as $link)

                        @endforeach
                        <li>
                            {{ $link['name'] }}
                        </li>
                    </ul>
                </section>
            </nav>
        </section>

        <section class="dc-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC main logo">
        </section>
    </div>
    <div class="footer-socials">
        <section class="sign-up-btn">
            <a href="#">sign-up now!</a>
        </section>

        <section class="links">
            <h2>follow us</h2>
            <ul>
                <li>
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="Facebook">
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="Twitter">
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="youTube">
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="Pinterest">
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="Periscope">
                </li>
            </ul>
        </section>
    </div>
</footer>
