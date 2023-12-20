<header>
    <div class="container">
        <nav class="d-flex align-items-center gap-4 py-3">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </a>
            </div>
    
            <ul class="nav-menu d-flex gap-4 mb-0">
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Characters</a>
                </li>
                <li class="menu-item {{ Route::currentRouteName() === 'comic_books.index' ? 'active' : '' }}">
                    <a href="{{ route('comic_books.index') }}" class="text-uppercase text-decoration-none fw-medium">Comics</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Movies</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Tv</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Games</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Collectibles</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Videos</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Fans</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">News</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="text-uppercase text-decoration-none fw-medium">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</header>