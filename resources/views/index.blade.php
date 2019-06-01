@extends('layouts.app')
@section('title','首页')
{{--@section('description','')--}}
{{--@section('keywords','')--}}
@section('content')
    {{--<ul class="list-item list-inline rounded">--}}
        {{--@foreach($topics as $topic)--}}

            {{--<li class="list-inline-item text-left rounded">--}}
                {{--<a href="{{route('topic',$topic->id)}}">--}}
                    {{--<div>--}}
                        {{--<p class="text-center">--}}
                            {{--<img class="soft-icon" src="{{ $topic->avatar }}" alt="">--}}
                        {{--</p>--}}

                        {{--<div class="download_and_date">--}}
                            {{--<small class="float-left">--}}
                                {{--<img class="download_icon" src="{{ asset('download_icon.png') }}" alt="">--}}
                                {{--{{ $topic->download }}--}}
                            {{--</small>--}}

                            {{--<small class="float-right">--}}
                                {{--<img class="date_icon" src="{{ asset('date_icon.png') }}" alt="">--}}
                                {{--{{ $topic->updated_at->toDateString() }}--}}

                            {{--</small>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<br>--}}

                        {{--<p class="title">--}}
                            {{--{{ $topic->title }}--}}
                            {{--Elimisoft Duplicate Find good 破解版--}}
                        {{--</p>--}}

                        {{--<small class="introduction">--}}
                            {{--{{ $topic->introduction }}--}}
                            {{--是mac平台上一款非常好用的重复文件清理软件，能够帮助用户找到电脑里的所有能够帮助用户找到电脑里的所有...--}}
                        {{--</small>--}}
                        {{--<span>--}}
                            {{--<a class="float-left" href="123">--}}
                                {{--<span class="badge badge-success">--}}
                                    {{--{{ $topic->category->name }}--}}
                                {{--</span>--}}
                            {{--</a>--}}
                        {{--</span>--}}

                    {{--</div>--}}
                {{--</a>--}}

            {{--</li>--}}


        {{--@endforeach--}}
    {{--</ul>--}}
    <div style="margin-left: 1em">
        @foreach($categories as $k=>$v)
            <a href="{{route('category',$v->id)}}" style="margin-left: 1em;display: inline-block;">{{ $v->name }}</a>
        @endforeach
    </div>
    <div class="flex-container-4">
        <div class="related-app">
            <div class="related-app-list">
                <ul class="related-app-list-ul">
                    @foreach($topics as $topic)
                    <li class="related-app-list-li">
                        <a class="related-app-list-a" href="{{route('topic',$topic->id)}}">
                            <div class="related-app-list-div-1">

                                <div class="related-app-list-div-1-1">
                                    <img src="{{ $topic->avatar }}" alt="">
                                </div>

                                <div class="related-app-list-div-1-2">
                                    <div>
                                        <img src="{{ asset('download_icon.png') }}" alt="">
                                        {{ $topic->download }}
                                    </div>

                                    <div>
                                        <img src="{{ asset('date_icon.png') }}" alt="">
                                        {{ $topic->updated_at->toDateString() }}
                                    </div>
                                </div>
                                <div class="related-app-list-div-1-3">
                                    {{ $topic->title }}
                                    Elimisoft Duplicate Find good 破解版
                                </div>

                                <div class="related-app-list-div-1-4">
                                    {{ $topic->introduction }}
                                    是mac平台上一款非常好用的重复文件清理软件，能够帮助用户找到电脑里的所有能够帮助用户找到电脑里的所有...
                                </div>
                                <div class="related-app-list-div-1-5">
                                    <object>
                                        <a href="{{route('category',$topic->category()->first()->id)}}">
                                            <span class="badge badge-success">{{ $topic->category->name }}</span>
                                        </a>
                                    </object>
                                </div>

                            </div>
                        </a>

                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>

@stop