<div class="paralax_banner">
    <div class="paralax_text text-center">
        <h1>Waterpolo</h1>
        <h2>Waterpolo is teamgeest, spelinzicht, speltechniek, wedstrijdtactiek en discipline </h2>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <a class="navbar-brand" href="/">
        Arethusa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav ml-auto m-1">
            <li class="nav-item">
                <a class="navbar_link navbar_link--tandem nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="navbar_link navbar_link--tandem nav-link" href="/information">Informatie</a>
            </li>
            <li class="nav-item">
                <a class="navbar_link navbar_link--tandem nav-link" href="/recreanten">Recreanten</a>
            </li>
            <li class="nav-item">
                <a class="navbar_link navbar_link--tandem nav-link" href="/zwemles">Zwemles</a>
            </li>
            <li class="nav-item">
                <a class="navbar_link navbar_link--tandem nav-link" href="/waterpolo">Waterpolo</a>
            </li>
            <li class="nav-item">
                <a class="navbar_link navbar_link--tandem nav-link" href="/wedstrijdzwemmen">Wedstrijdzwemmen</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="navbar_link navbar_link--tandem nav-link"
                       href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="navbar_link navbar_link--tandem nav-link"
                           href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="navbar_link navbar_link--tandem nav-link dropdown-toggle" href="#"
                       role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="navbar_link navbar_link--tandem dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            <li>
                <form class="form-inline justify-content-center">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i
                            class="fas fa-search"></i>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>

