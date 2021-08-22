<header class="market-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img
                    src="/public/assets/front/images/version/market-logo.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('category.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
                        </li>
                    @endforeach
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('user.logout') }}">Выйти</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('user.store') }}">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('user.login') }}">Вход</a>
                        </li>
                    @endif

                </ul>
                <form class="form-inline" method="get" action="{{ route('search') }}">
                    <input class="form-control mr-sm-2" type="text" placeholder="Найти" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>
            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->
