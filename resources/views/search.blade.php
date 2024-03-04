@extends('homepage')

@section('title') Поиск @endsection

@section('content')
    <br>
    <div class="columns-5 d-flex justify-content-end align-items-center">
        <textarea id="search" style="width: 800px; height: 30px; margin-left: 600px  " placeholder="поиск..."></textarea>
        <a class="container" href="#" aria-label="Search">

            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="mx-2" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
    </div>
    <br>
    <h4>Главная страница</h4>
    <br>
    <br>
    <br>
    <h4>Вложить рекомендации и рекламы</h4>
@endsection

