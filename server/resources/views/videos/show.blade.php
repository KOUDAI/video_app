@extends('layouts.app')

@section('content')
@section('title', 'プロフィール')
{{-- @include('layouts.video', compact('video')) --}}

<body>
<div class="show">
    <div class="profile">
        <div class="row block">
            
            <div class="image col-3">
                <img src="{{ url($video->image_url) }}" class="square-img">
            </div>
                <div class="info col-7">
                    <p>
                        名前<br>{{ $video->name }}</b>
                    </p>
                    
                    <p>
                        アピール<br>{{ $video->description }}</b>
                    </p>
                    
                    <p>
                        一時間あたり:{{ $video->price }}円</b>
                    </p>
            </div>
        </div>
    </div>
        

    {!!$cal_tag!!}
    <h4>対応可能日時より､ご希望の予約日をお選びください｡</h4>
    {{-- @auth --}}<br>
    {{-- @auth --}}<br>
    {{-- @auth --}}<br>
                {{-- {{ $video->id }}
                {{ Auth::id() }}<br> --}}
                <br>
                @if (Auth::id() == $video->id)
                <a href='/videos/{{ $video->id }}/editH'>スケジュール登録(ホスト用)</a>
                        <a href="/videos/{{ $video->id }}/edit">アカウント情報変更(コーチ)</a>
                    @else
                    {{-- <a href="{{ route('register') }}">いらん</a> --}}
                    @endif
                </div>
                
                {{-- <a href='/videos/{{ $video->id }}/editH'>スケジュール登録(ホスト用)</a> --}}
                
                {{-- @endauth --}}
            </div>
            
            
            
            
            <div id="page">
                <div class="container">
                    <h1>SendForm</h1>
                    
                    <div class="row">
                        <div class="col-sm-9">
                            
                            <form method="post" action="{{ route('sendmail') }}" class="form-horizontal">
            @csrf
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">お名前</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-name" placeholder="お名前" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-mail" class="col-sm-2 control-label">メールアドレス</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="input-mail" placeholder="メールアドレス" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">希望日程</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option value="month">月</option>
                        <option value="num">1</option>
                        <option value="num">2</option>
                        <option value="num">3</option>
                        <option value="num">4</option>
                        <option value="num">5</option>
                        <option value="num">6</option>
                        <option value="num">7</option>
                        <option value="num">8</option>
                        <option value="num">9</option>
                        <option value="num">10</option>
                        <option value="num">11</option>
                        <option value="num">12</option>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option value="">日付</option>
                    <option value="num">1</option>
                    <option value="num">2</option>
                    <option value="num">3</option>
                    <option value="num">4</option>
                    <option value="num">5</option>
                    <option value="num">6</option>
                    <option value="num">7</option>
                    <option value="num">8</option>
                    <option value="num">9</option>
                    <option value="num">10</option>
                    <option value="num">11</option>
                    <option value="num">12</option>
                    <option value="num">13</option>
                    <option value="num">14</option>
                    <option value="num">15</option>
                    <option value="num">16</option>
                    <option value="num">17</option>
                    <option value="num">18</option>
                    <option value="num">19</option>
                    <option value="num">20</option>
                    <option value="num">21</option>
                    <option value="num">22</option>
                    <option value="num">23</option>
                    <option value="num">24</option>
                    <option value="num">25</option>
                    <option value="num">26</option>
                    <option value="num">27</option>
                    <option value="num">28</option>
                    <option value="num">29</option>
                    <option value="num">30</option>
                    <option value="num">31</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ご要望</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" required="required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">送信</button>
            </div>
        </div>
    </form>
</div>
</div>

</div><!-- /container -->
</div><!-- /page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
