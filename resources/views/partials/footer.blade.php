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
</footer>
