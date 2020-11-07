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
            {{-- <form action="/videos" method="post"> --}}
                <form class="form-horizontal">
                    <div class="form-group">
                        @csrf
                        <label class="col-sm-2 control-label">名前 <span class="label label-danger">必須</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="Name" class="{{ old('name') }}" placeholder="name" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">アイコン用画像 <span class="label label-danger">必須</span></label>
                        <div class="col-sm-10">
                            <input type="img" name="mail" class="{{ old('image_url') }}" placeholder="picture" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">自己紹介 <span class="label label-danger">必須</span></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name='content' placeholder="内容" rows="3">{{ old('content') }}</textarea>
                            <input type="apel" name="apel" class="{{ old('description') }}" placeholder="apeel" required />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">料金設定<span class="label label-danger">必須</span></label>
        <div class="col-sm-10">
            <input type="price" name="price" class="{{ old('price') }}" placeholder="price" required />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">メールアドレス<span class="label label-danger">必須</span></label>
        <div class="col-sm-10">
            <input type="mail" name="mail" class="{{ old('email') }}" placeholder="mail" required />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登録</button>
        </div>
    </div>
</form>
{{-- </div> --}}
{{-- </body> --}}
{{-- </html> --}}
{{-- </form> --}}