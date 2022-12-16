<div class="band"></div>
<div class="container">
    <header class="header">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav class="header-nav">
            <ul>
                @foreach ($headerItems as $item)
                    <li>
                        <a href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
</div>
