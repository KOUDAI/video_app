<?php

namespace App\Http\Controllers;


use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;


class VideoController extends Controller
{
    // indexページへ移動
    public function index(Request $request)
    {
        // モデル名::テーブル全件取得
        $videos = Video::all();
        // Videoティレクトリーの中のindexページを指定し、Videoの連想配列を代入
        return view('videos.index', ['videos' => $videos]);

        $name = $request->name;
        $category = $request->category;

        $query = Video::query();
        if($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }
        if($category) {
            $query->where('category', 'like', '%' . $category . '%');
        }
        $videos = $query->paginate(10);
        $videos->appends(compact('name', 'category'));
        return view('videos.index', compact('videos'));
    }


    public function create()
    {
        return view('videos.create');
    }

    public function store(VideoRequest $request)
    {
        // インスタンスの作成
        $video = new Video;

        // 値の用意
        $video->name = $request->name;
        $video->description = $request->description;
        $video->price = $request->price;
        $video->email = $request->email;
        $video->image_url = $request->image_url;
        $video->timestamps = false;

        // インスタンスに値を設定して保存
        $video->save();

        // 登録したらindexに戻る
        return redirect('/videos');
    }
    public function edit($id)
    {
        $video = Video::find($id);
        return view('videos.edit', ['video' => $video]);
    }
    public function update(VideoRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $video = Video::find($id);

        // 値の用意
        $video->name = $request->name;
        $video->description = $request->description;
        $video->price = $request->price;
        $video->email = $request->email;
        $video->image_url = $request->image_url;
        $video->timestamps = false;

        // 保存
        $video->save();

        // 登録したらindexに戻る
        return redirect('/videos');
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect('/videos');
    }

    public function show($id)
    {
        $video = Video::find($id);
        return view('videos.show', ['video' => $video]);
    }
    public function Top($id)
    {
        $video = Video::find($id);
        return view('videos.top', ['video' => $video]);
    }

}
