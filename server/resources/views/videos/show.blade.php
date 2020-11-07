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
    

            {{-- @include('layouts.video', compact('video')) --}}
    

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
    @section('title', 'プロフィール')
    @section('content')
            {{-- @include('layouts.video', compact('video')) --}}
    <div class="profile block">
            <div class="image">
                <img src="{{ url($video->image_url) }}" class="square-img">
            </div>
            <table class="table-bordered mb-5 mt-3">
                            {{-- <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup> --}}
                <div class="info">
                    <p>
                        <b>名前:{{ $video->name }}</b>
                    </p>
                    <p>
                        <b>アピール：{{ $video->description }}</b>
                    </p>
                    <p>
                        <b>一時間あたり：{{ $video->price }}円</b>
                    </p>
                    <p>
                        <b>メール：{{ $video->email }}</b>
                        {{-- {{HTML::mailto('$video->email')}} --}}
                    </p>
                    
                </div>
            </div>
            <div clsss='block'>
                
                
                {!!$cal_tag!!}
                {{-- @auth --}}
                <p>対応可能日時より､ご希望の予約日をお選びください｡</p>
                {{-- {{ $video->id }}
                {{ Auth::id() }}<br> --}}

                @if (Auth::id() == $video->id)
                        <a href='/videos/{{ $video->id }}/editH'>スケジュール登録(ホスト用)</a>
                        <a href="/videos/{{ $video->id }}/edit">編集する</a>
                    @else
                       {{-- <a href="{{ route('register') }}">いらん</a> --}}
                        @endif
                </div>
              
            
                {{-- <a href='/videos/{{ $video->id }}/editH'>スケジュール登録(ホスト用)</a> --}}
                
    {{-- @endauth --}}
</div>


    
    {{-- <!-- 商品のidを元に編集ページへ遷移する -->
    <a href="/videos/{{ $video->id }}/edit"><button>編集する</button></a>
    <form action="/videos/{{ $video->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form> --}}
@endsection
{{-- </div>
    </body>
    </html> --}}