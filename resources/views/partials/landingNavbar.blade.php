<nav class="navbar navbar-light bg-white fw-bold mt-3">
    <div class="container-lg">
        <a href="{{ route('home') }}" class="navbar-brand">MaiBoutique</a>
        <div class="ms-auto">
            @guest
                @if (Request::is('/') && !Auth::check())
                    <a class="btn btn-sm btn-primary" href="{{ route('login') }}">Login</a>
                @endif

                @if (Request::is('login'))
                    <a class="btn btn-sm btn-primary" href="{{ route('register') }}">Register</a>
                @elseif (Request::is('register'))
                    <a class="btn btn-sm btn-primary" href="{{ route('login') }}">Login</a>
                @endif
            @endguest
        </div>
    </div>
</nav>
