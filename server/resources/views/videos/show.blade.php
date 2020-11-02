{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>プロフィール画面</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container"> --}}
@extends('layouts.app')

@section('title', '一覧画面')

@section('content')
@include('layouts.video', compact('video'))
        <table class="table-bordered mb-5 mt-3">
            {{-- <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup> --}}
            <tbody>
                <tr>
                    <th>名前</th>
                    <td>
                        {{ $video->name }}</td>
                </tr>
                <tr>
                    <th>アピール</th>
                    <td>{{ $video->description }}</td>
                </tr>
                <tr>
                    <th>一時間あたり</th>
                    <td>{{ $video->price }}円</td>
                </tr>
                <tr>
                    <th>メール</th>
                    <td>{{ $video->email }}</td>
                </tr>
                <tr>
                <img src="{{ $video->image_url }}">
                    {{-- <th>その他</th>
                    <td>{{ $video->note }}</td> --}}
                </tr>
            </tbody>
        </table>
        <a href="/videos/">戻る</a>
    {{-- </div>
</body>
</html> --}}
@endsection