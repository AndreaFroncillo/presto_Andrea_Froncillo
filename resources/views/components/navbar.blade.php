<nav class="navbar navbar-expand-lg shadow bg-o">
    <div class="container-fluid">
        <a class="navbar-brand text-c" href="{{route('homepage')}}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-c" aria-current="page" href="{{route('homepage')}}">{{ __('ui.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-c" aria-current="page" href="{{route('article.index')}}">{{ __('ui.all_articles') }}</a>
                </li>
                <li class="nav-item dropdwon">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('ui.categories') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a href="{{route('byCategory', ['category' => $category])}}" class="dropdown-item text-capitalize">{{ __("ui.$category->name") }}</a>
                        </li>
                        @if (!$loop->last)
                        <hr class="dropdown-divider">
                        @endif
                        @endforeach
                    </ul>
                </li>
                @auth
                @if(Auth::user()->is_revisor)
                <li class="navitem">
                    <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25">
                    {{ __('ui.revisor_area') }}
                        <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
                    </a>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-c" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('ui.hello') }}, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-c" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">{{ __('ui.logout') }}</a></li>
                        <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form>
                        <li><a class=" dropdown-item text-c" href="{{route('create.article')}}">{{ __('ui.create') }}</a></li>
                    </ul>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-c" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('ui.hello') }}!
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-c" href="{{route('login')}}">{{ __('ui.login') }}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-c" href="{{route('register')}}">{{ __('ui.register') }}</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
            <x-_locale lang="it" />
            <x-_locale lang="en" />
            <x-_locale lang="fr" />
            <form class="d-flex ms-auto" role="search" action="{{route('article.search')}}" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="query" class="form-control" placeholder="{{ __('ui.search') }}" aria-label="search">
                    <button type="submit" class=" input-group-text btn btn-outline-success" id="basic-addon2">
                    {{ __('ui.search') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>