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
<h1>登録情報変更</h1>
<!--更新先はvideosのidにしないと増える php artisan rote:listで確認①-->
<form action="/videos/{{ $video->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $video->id }}">
    <p>
        名前：<br>
        <input type=" text" name="name" value="{{ $video->name }}">
    </p>
    <p>
        アピール：<br>
        <input type="text" name="description" value="{{ $video->description }}">
    </p>
    <p>
        1時間あたり：<br>
        <input type="number" name="price" value="{{ $video->price }}">
    </p>
    <p>
        メール：<br>
        <input type="text" name="email" value="{{ $video->email }}">
    </p>
    <p>
        写真URL：<br>
        <input type="text" name="image_url" value="{{ $video->image_url }}">
    </p>
    <input type="submit" value="更新">
</form>