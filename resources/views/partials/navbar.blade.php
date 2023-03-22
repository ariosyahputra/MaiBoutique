<nav class="navbar navbar-expand-md bg-white mt-3">
    <div class="container-lg">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">MaiBoutique</a>
        <button class="btn btn-outline-light ms-auto d-md-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span data-feather="menu" class="text-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link text-primary fw-semibold">Home</a>
                </li>
                <li class="nav-item"><a href="{{ route('searchProduct') }}"
                        class="nav-link text-primary fw-semibold">Search</a></li>

                @if (Auth::user()->role_id == 2)
                    <li class="nav-item"><a href="{{ route('cart') }}"
                            class="nav-link text-primary fw-semibold">Cart</a></li>
                    <li class="nav-item"><a href="{{ route('history') }}"
                            class="nav-link text-primary fw-semibold">History</a></li>
                @endif

                <li class="nav-item"><a href="{{ route('profile') }}"
                        class="nav-link text-primary fw-semibold">Profile</a></li>
                <li class="nav-item">
                    @if (Auth::user()->role_id == 1)
                        <a class="btn btn-sm btn-primary d-flex justify-content-center d-md-none mb-2 rounded-3"
                            href="{{ route('addItem') }}">Add Item</a>
                    @endif
                </li>

                @if (Auth::check())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary d-flex justify-content-center d-md-none w-100 rounded-3">
                                Logout
                            </button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto d-flex">
                @if (Auth::user()->role_id == 1)
                    <a class="btn btn-sm btn-primary d-none d-md-flex me-3 rounded-3" href="{{ route('addItem') }}">
                        Add Item
                    </a>
                @endif
                @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary d-none d-md-flex rounded-3">
                            Logout
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</nav>
