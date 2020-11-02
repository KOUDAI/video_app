<p>
    <b>商品名：{{ $video->name }}</b>
</p>

<p>
    <b>商品詳細：{{ $video->description }}</b>
</p>

<p>
    <b>価格：{{ $video->price }}</b>
</p>

<p>
    <b>電子メール：{{ $video->email }}</b>
</p>

<p>
    <img src="{{ $video->image_url }}">
</p>