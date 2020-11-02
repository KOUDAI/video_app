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
<h1>アカウント作成</h1>
<form action="/videos" method="post">
    @csrf
    <p>
        名前：<br>
        <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        アピール：<br>
        <input type="text" name="description" value="{{ old('description') }}">
    </p>
    <p>
        1時間あたり：<br>
        <input type="number" name="price" value="{{ old('price') }}">
    </p>
    <p>
        電子メール：<br>
        <input type="text" name="email" value="{{ old('email') }}">
    </p>
    <p>
        商品画像URL：<br>
        <input type="text" name="image_url" value="{{ old('image_url') }}">
    </p>

    <input type="submit" value="登録">
</form>