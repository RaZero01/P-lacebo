{{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</div>
</div>
</nav> --}}


<section class="header">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #000">
        <div class="container" style="text-align: center">
            <div class="navbar-header">
                {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse" style="height: 1px; text-align: center; margin-left: 60px">
                    <ul class="nav navbar-nav">
                        <li><a href="./"><span class="menu">ГЛАВНАЯ</span></a></li>
                        <li><a href="About.php"><span class="menu">О КОМПАНИИ</span></a></li>
                        <li><a href="Partners.php"><span class="menu">ПАРТНЕРЫ</span></a></li>
                        <li><a href="Events.php"><span class="menu">СОБЫТИЯ</span></a></li>
                        <li><a href="Contacts.php"><span class="menu">КОНТАКТЫ</span></a></li>
                    </ul>
                </div>
                <div> <a href="./"><img style="width: 25%; min-height: 50px; min-width: 170px;text-align: center; margin-left: 4%" src="img/Logo2.png">
                    </a></div>
                <div class="navbar-collapse collapse" style="height: 0; text-align: center; margin-right: 0">
                    <ul class="nav navbar-nav">
                        <li><a href="ART.php"><span class="menu">ART</span></a></li>
                        <li><a href="Accessories.php"><span class="menu">АКСЕССУАРЫ</span></a></li>
                        <li><a href="Interior.php"><span class="menu">ПРЕДМЕТЫ ИНТЕРЬЕРА</span></a></li>
                        <li><a href="Clothes.php"><span class="menu">ОДЕЖДА</span></a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>