
{{--   
@php
    $title = env('APP_NAME');
@endphp
@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        {{ __('My practice for basic CRUD of Laravel 5.7 on Heroku.') }}
    </p>
    <ul>
        <li>
            GitHub:
            <a href="https://github.com/sutara79/demo-laravel-crud" target="_blank">
                https://github.com/sutara79/demo-laravel-crud
            </a>
        </li>
        <li>
            Qiita:
            <a href="http://qiita.com/sutara79/items/ef30fcdfb7afcb2188ea" target="_blank">
                Laravel 5.7で基本的なCRUDを作る
            </a>
        </li>
    </ul>
    <h2>{{ __('Feature') }}</h2>
    <ul>
        <li>{{ __('All visitors can read all posts.') }}</li>
        <li>{{ __('All visitors can read all users\' profile except email address.') }}</li>
        <li>{{ __('All visitors can sign up.') }}</li>
        <li>{{ __('Each the logged in user can post, edit and delete.') }}</li>
        <li>
            {{ __('The admin can edit and delete all users\' accounts and posts.') }}
            <ul>
                <li>
                    {{ __('Admin') }}:
                    <ul>
                        <li>id: 1</li>
                        <li>name: sutara79</li>
                        <li>email: toumin.m7@gmail.com</li>
                        <li>password: 1234</li>
                    </ul>
                </li>
                <li>
                    {{ __('User') }}:
                    <ul>
                        <li>id: 2</li>
                        <li>name: foo1</li>
                        <li>email: foo1@foo.com</li>
                        <li>password: 1234</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SUCCESS</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636B6F;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636B6F;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    SUCCESS
                </div>
                <div class="links">
                    <a href="https://laracasts.com"><img src="https://cdn.pixabay.com/photo/2016/03/27/18/13/laptop-1283368_1280.jpg" width="240" height="200" alt="Social"></a>
                    <a href="http://localhost/videos"><img src="https://cdn.pixabay.com/photo/2015/03/26/09/55/musicians-690591__340.jpg" width="240" height="200" alt=""></a>
                    <a href="https://laravel-news.com"><img src="https://cdn.pixabay.com/photo/2017/08/03/01/22/microphone-2574511__480.jpg"width="240" height="200" alt="Stage"></a>
                    <a href="https://laravel-news.com"><img src="https://cdn.pixabay.com/photo/2014/09/22/00/56/lead-singer-455750_1280.jpg" width="240" height="200" alt="Recruit"></a>
                    {{-- <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
        {{-- <div class="topcate">
          <select name=”category” onCharge="top.location.href=value">
            <option value=”cate”></option>
            <option value=”gakki”>楽器</option>
            <option value=”voice”>song</option>
            {{-- <option value=””>上級者向け</option> --}}
          {{-- </select> 
        </div> --}} 
            </div>
        </div>
    </body>
</html>
