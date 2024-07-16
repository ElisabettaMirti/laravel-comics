<header>
    <section class="logo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">
    </section>

    <section class="navbar">
        <nav>
            <ul>
                @foreach ($headerNav as $link)
                <li >
                    <a href="#">
                        {{ $link['name'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
</header>
</section><section class="jumbo"></section>
