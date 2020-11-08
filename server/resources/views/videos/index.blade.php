<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUCCESS</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <div class= "index">
    <body>
      <div class="container">
        <div class="container-sm"></div>
        <div class="container-md"></div>
        <div class="container-lg"></div>
        <div class="container-xl"></div>
        @extends('layouts.app')
        @section('title','コーチ一覧')
        @section('content')
        <div class="container">
        <div class="row">
        {{-- <ul>  --}}
          @foreach ($videos as $video)
          {{-- <li class="list-unstyled border mb-5 pl-3 shadow"> --}}
            <div class="card-deck  col-4 mb-5">
              <div class="card">
                <img src="{{ url($video->image_url) }}" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title>
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('videos.show', $video->id) }}">{{ $video->name }}</h5>
                  <p class="card-text"></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          </div>
          @endsection
        </body>
      </div>
@auth
<a class="btn btn-primary" href="/videos/create" role="button">アカウント登録(コーチ用)</a>
{{-- <a href="/videos/create"><button>新規登録</button></a> --}}
@endauth
