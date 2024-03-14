<!-- HEADER -->
<header>
    <!-- RECIPENTE LOGO -->
    <figcaption class="recipe-image">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="Logo Dc">
        </a>
    </figcaption>
    <!-- RECIPENTE LISTA LINK -->
    <nav class="recipe-nav">
        <ul>
            @foreach (config('header_links') as $link)
                <li class="link-hover"><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
            @endforeach
        </ul>
    </nav>
</header>
