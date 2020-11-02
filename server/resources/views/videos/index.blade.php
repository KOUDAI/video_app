{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUCCESS</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container"> --}}
@extends('layouts.app')

@section('title', '一覧画面')

@section('content')
<ul>
    @foreach ($videos as $video)
        <li class="list-unstyled border mb-5 pl-3 shadow">
        <!-- // リンク先をidで取得し名前で出力 -->
        {{-- <a href="/videos/{{ $video->id }}">{{ $video->name }}</a> --}}
        {{-- <a href="{{ route('videos.show', $video->id) }}">{{ $video->name }}</a> --}}
        @include('layouts.video', compact('video'))
    @endforeach
</ul>
<a href="/videos/create"><button>新規登録</button></a>
{{-- </body>
</div>
</html> --}}
@endsection