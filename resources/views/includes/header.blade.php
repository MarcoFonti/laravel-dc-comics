<!-- HEADER -->
<header>
    <!-- RECIPENTE LOGO -->
    <figcaption class="recipe-image">
        <img src="{{ asset('images/dc-logo.png') }}" alt="">
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
