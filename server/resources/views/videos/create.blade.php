@if (count($errors) > 0)
<div>
    <P>
        <b>{{ count($errors) }}件のエラーがあります。</b>
    </P>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif
 
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
        integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <h1>MENTA</h1>
            </div>
            <form action="/videos" method="post" class="form-horizontal">
                <div class="form-group">
                    @csrf
                    <label class="col-sm-2 control-label">名前 <span class="label label-danger">必須</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="name" required value="{{ old('name') }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">アイコン用画像 <span class="label label-danger">必須</span></label>
                    <div class="col-sm-10">
                        <input type="img" name="image_url" class="form-control" placeholder="picture" required value="{{ old('image_url') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">料金設定<span class="label label-danger">必須</span></label>
                    <div class="col-sm-10">
                        <input type="price" name="price" class="form-control" placeholder="price" required value="{{ old('price') }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">メールアドレス<span class="label label-danger">必須</span></label>
                    <div class="col-sm-10">
                        <input type="mail" name="email" class="form-control" placeholder="mail" required value="{{ old('email') }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">自己紹介 <span class="label label-danger">必須</span></label>
                    <div class="col-sm-10">
                        <textarea class="self" name="description" class="form-control" placeholder="内容" required value="{{ old('description') }}"></textarea>
                        {{-- <textarea rows="10" cols="60"><input type="apel" name="apel" class="{{ old('description') }}" placeholder="apeel" required /> --}}
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">登録</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
