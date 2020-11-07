<?php

namespace App\Http\Controllers;

use App\Holiday;
use App\Calendar;
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
        return view('videos.edit', ['video' => $video ]);
    }

    public function editH($id)
    {
        $data = Holiday::find($id);
    
        $list = Holiday::where('user_id', $id)->get()->sortBy('day');
        return view('videos.editH', ['list' => $list, 'data' => $data, 'id' => $id]);

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

    public function show(Request $request, $id)
    {
        $video = Video::find($id);

        $list = Holiday::where('user_id', $id)->get();
        $cal = new Calendar($list);
        $tag = $cal->showCalendarTag($request->month, $request->year);

        return view('videos.show', ['video' => $video, 'cal_tag' => $tag]);
        
    }
    public function Top($id)
    {
        $video = Video::find($id);
        return view('videos.top', ['video' => $video]);
    }

    public function getHoliday($id)
    {
        // 休日データ取得
        $data = new Holiday();
        $list = Holiday::all();
        return view('videos.editH', ['list' => $list, 'data' => $data, 'id' => $id]);
        // return view('videos.show', ['list' => $list, 'data' => $data]);
    }

    public function getHolidayId($id)
    {
        // 休日データ取得
        $data = new Holiday();
        if (isset($id)) {
            $data = Holiday::where('id', '=', $id)->first();
        }
        $list = Holiday::all();
        return view('calendar.holiday', ['list' => $list, 'data' => $data]);
        // return view('videos.show', ['list' => $list, 'data' => $data]);
    }

    public function postHoliday(Request $request, $id)
    {
        $validatedData = $request->validate([
            'day' => 'required|date_format:Y-m-d',
            'description' => 'required',
        ]);

        // POSTで受信した休日データの登録
        if (isset($request->id)) {
            $holiday = Holiday::where('id', '=', $request->id)->first();
            $holiday->day = $request->day;
            $holiday->description = $request->description;
            $holiday->save();
        } else {
            $holiday = new Holiday();
            $holiday->day = $request->day;
            $holiday->description = $request->description;
            $holiday->user_id = $request->user_id;
            $holiday->save();
        }
        // 休日データ取得
        // $data = new Holiday();
        // $list = Holiday::all();
        return redirect('/videos/' . $id . '/editH');
        // return view('calendar.holiday', ['list' => $list, 'data' => $data]);
        // return view('videos.show', ['list' => $list, 'data' => $data]);
    }

    public function caledarIndex(Request $request)
    {

        $list = Holiday::all();
        $cal = new Calendar($list);
        $tag = $cal->showCalendarTag($request->month, $request->year);

        return view('videos.show', ['cal_tag' => $tag]);
    }

    public function deleteHoliday(Request $request)
    {
        // DELETEで受信した休日データの削除
        if (isset($request->id)) {
            $holiday = Holiday::where('id', '=', $request->id)->first();
            $holiday->delete();
        }
        // 休日データ取得
        $data = new Holiday();
        $list = Holiday::all();
        return view('calendar.holiday', ['list' => $list, 'data' => $data]);
        // return view('videos.show', ['list' => $list, 'data' => $data]);
    }

}
