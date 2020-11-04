@extends('layout')
@section('title', 'カレンダー')
@section('content')
    {!!$cal_tag!!}
    <a href="{{ url('/holiday') }}">休日設定</a>
@endsection