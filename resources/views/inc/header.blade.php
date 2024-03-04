
<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="btn btn-outline-success" href="{{ route('home') }}">Главная страница</a>

                @guest()
                <a type="button" class="btn btn-outline-success" href="{{ route('register') }}">Регистрация</a>
                @endguest
            </div>

            <div class="col-4 text-center">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="{{route('home')}}">NewsBlog</a>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn btn-info" type="button" href="{{ route('about') }}">Про нас</a>


                    <a class="col-4 text-center link-secondary" href="{{route('search')}}" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="mx-2" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                </a>




                @auth()
                    <a class="btn btn-sm btn-outline-secondary" href="{{route("my-profile")}}">Профиль</a>
                @endauth

                @guest()
            <a class="btn btn-sm btn-outline-secondary" href="{{route("login")}}">Войти</a>
                @endguest


            </div>
        </div>
    </header>


        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <a class="nav-item nav-link link-body-emphasis active" href="{{ route('newsworld') }}">Мировые новости</a>
                <a class="nav-item nav-link link-body-emphasis" href="{{ route('sport') }}">Спорт</a>
                <a class="nav-item nav-link link-body-emphasis" href="{{ route('music') }}">Музыка</a>
                <a class="nav-item nav-link link-body-emphasis" href="{{ route('business') }}">Бизнес</a>
                <a class="nav-item nav-link link-body-emphasis" href="{{ route('health') }}">Здоровье</a>
                <a class="nav-item nav-link link-body-emphasis" href="{{ route('travel') }}">Путешествие</a>
                <a class="nav-item nav-link link-body-emphasis" href="{{ route('science') }}">Наука</a>
            </nav>
        </div>




</div>

