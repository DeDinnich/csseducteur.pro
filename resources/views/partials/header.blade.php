<header>
    <nav class="header">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('search') }}">Search</a></li>
            <li><a href="{{ route('whoiam') }}">Who I Am</a></li>
            <li><a href="{{ route('graph') }}">Graph</a></li>
        </ul>
    </nav>
</header>