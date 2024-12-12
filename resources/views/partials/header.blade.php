<header>
    <nav class="header">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('logo.png') }}" alt="Logo">
        </a>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('blog') }}" class="{{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">Blog</a></li>
            <li><a href="{{ route('search') }}" class="{{ Route::currentRouteName() === 'search' ? 'active' : '' }}">Search</a></li>
        </ul>
    </nav>
</header>