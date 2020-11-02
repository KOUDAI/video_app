<h1>コーチ一覧</h1>
<ul>
    @foreach ($videos as $video)
        <!-- // リンク先をidで取得し名前で出力 -->
        <li><a href="/videos/{{ $video->id }}">{{ $video->name }}</a></li>
    @endforeach
</ul>