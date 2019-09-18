<div class="rs-navbar">
    <nav class="container navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Real-Shit') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fal fa-user"></i> {{ __('Inloggen') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><i class="far fa-user-plus"></i> {{ __('Registreren') }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user"></i> {{ Auth::user()->firstname }} {{ Auth::user()->prefix }} {{ Auth::user()->lastname }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fal fa-truck"></i> Mijn bestellingen</a>
                            <a class="dropdown-item" href="{{ route('login', [ 'id' => Auth::id() ]) }}"><i class="fal fa-user-tag"></i> Mijn gegevens</a>
                            <a class="dropdown-item" href="#"><i class="fal fa-hands-heart"></i> Mijn verlanglijstje</a>
                            <a class="dropdown-item" href="#"><i class="fal fa-shopping-cart"></i> Mijn winkelmandje</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fal fa-sign-out-alt"></i> {{ __('Uitloggen') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @if(Auth::user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fal fa-user-secret"></i></a>
                        </li>
                    @endif
                @endguest
            </ul>
        </div>
    </nav>
</div>