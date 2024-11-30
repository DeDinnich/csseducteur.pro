<header>
    <nav class="header">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('search') }}" class="{{ Route::currentRouteName() === 'search' ? 'active' : '' }}">Search</a></li>
            <li><a href="{{ route('whoiam') }}" class="{{ Route::currentRouteName() === 'whoiam' ? 'active' : '' }}">Who I Am</a></li>
            <li><a href="{{ route('graph') }}" class="{{ Route::currentRouteName() === 'graph' ? 'active' : '' }}">Graph</a></li>
        </ul>
    </nav>
</header>