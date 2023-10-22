@php
    $routeName = Route::current()->getName();
@endphp
<header class="clear-marge">
    <div class="header">
        <div class="logo">
            <h1><a style="color: #000" href="/">datagenes-africa</a></h1>
        </div>
        <nav class="nav">
            <ul style="" class="nav-links clear-marge">
                <li style="border: none">
                    <a style="color: #000; border: none; text-transform: uppercase"
                        class="nav-link {{ $routeName === 'home' ? 'active' : '' }}" href="{{ route('home') }}">home</a>
                </li>
                <li style="border: none">
                    <a style="color: #000; border: none; text-transform: uppercase" class="nav-link {{ $routeName === 'contact' ? 'active' : '' }}"
                        href="{{ route('contact') }}">contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
