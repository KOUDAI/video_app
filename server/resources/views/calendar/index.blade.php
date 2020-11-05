@extends('layout')
@section('title', 'カレンダー')
@section('content')
    {!!$cal_tag!!}
    <a href="{{ url('/holiday') }}">スケジュール管理(ホスト用)</a>
@endsection