<div class="header-right">
    {{-- <i class="fa fa-user-o fa-2x" style="color: white;margin-right: 25px;"></i> --}}
    {{-- <a href="{{ route('website.cart') }}">
        <i class="fa fa-shopping-cart fa-2x" style="color: white;"></i>
        <span>2</span>
    </a> --}}
</div>
<nav class="main-menu mobile-menu">
    <ul>
        @if (\Auth::check())
            <li><a href="{{ route('website.logout') }}">Logout</a></li>
        @else
            <li><a class="{{ Request::is('register*') ? 'active' : '' }}" href="{{ route('website.register') }}">Register</a></li>
            <li><a class="{{ Request::is('signin*') ? 'active' : '' }}" href="{{ route('website.signin') }}">Sign in</a></li>
        @endif
    </ul>
</nav>