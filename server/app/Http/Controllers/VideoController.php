<?php

namespace App\Http\Controllers;
use App\Video;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $videos = Video::all();
        // Videosティレクトリーの中のindexページを指定し、videosの連想配列を代入
        return view('videos.index', ['videos' => $videos]);
    }



    // showページへ移動
    public function show($id)
    {
        $video = Video::find($id);
        return view('videos.show', ['video' => $video]);
    }
}
