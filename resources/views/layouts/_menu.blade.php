<nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container text-center text-nowrap">
        <button class="btn navbar-btn btn-secondary navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fa-lg"></i>
        </button>
        <a href="{{ route('home') }}" class="navbar-brand mx-auto">
            <img class="img-fluid" src="{{ $logo }}">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                @foreach ($menu_items as $item)
                @if (!is_null($item->dropdown_items))
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $item->title }}</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        @foreach ($item->dropdown_items as $dropdown_item)
                        <a class="dropdown-item nav-link {{ Request::url() == $dropdown_item->route ? 'disabled' : '' }}" href="{{ $dropdown_item->route }}">{{ $dropdown_item->title }}</a>
                        @endforeach
                    </div>
                </div>
                @else
                <a class="nav-item nav-link mx-1 my-0 {{ Route::is($item->route) ? 'disabled' : '' }}" href="{{ route($item->route) }}">{{ $item->title }}</a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</nav>