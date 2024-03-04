@extends('layots.standard')

@section('title') Мой профиль @endsection
@section('content')

<h6>Написать личные данные и настройка </h6>
@endsection

@guest()
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
@endguest
