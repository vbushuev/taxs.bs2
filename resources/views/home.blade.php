@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="row-blocks row-blocks-3">
                        <li><a href="#">Total users:<span class="number" id="totalUsers">{{$total or -1}}</span></a></li><!--
                    --><li><a href="#">#:<span class="number" id="totalUsers">{{Auth::user()->id}}</span></a></li><!--
                    --><li class="text-right"><a href="#">{{Auth::user()->name}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 anketa">
                    <div class="panel panel-default">
                        <div class="panel-heading">Anketa</div>
                        <div class="panel-body">
                            @include('element.form.text',["title"=>"Name","name"=>"name","value"=>Auth::user()->name,"type"=>"field"])
                            @include('element.form.text',["title"=>"Country","name"=>"country","value"=>Auth::user()->country,"type"=>"field"])
                            @include('element.form.text',["title"=>"City","name"=>"city","value"=>Auth::user()->city,"type"=>"field"])
                            @include('element.form.text',["title"=>"Birthday","name"=>"birthday","value"=>Auth::user()->birthday,"type"=>"date"])
                            @include('element.form.text',["title"=>"About","name"=>"about","value"=>Auth::user()->about,"type"=>"text"])
                            @include('element.form.text',["title"=>"Education","name"=>"education","value"=>Auth::user()->education,"type"=>"text"])
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                @include('element.form.button',["title"=>"Fill","action"=>"fillAnketa()"])
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 dashboard">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="row-blocks row-blocks-2">
                                <li>
                                    Viewed: <span class="number" id="views">{{Auth::user()->views}}</span>
                                </li><li>
                                    Your rate: <span class="number" id="rate">6</span>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <center>
                                <canvas id="syms"></canvas>
                            </center>
                        </div>
                        <div class="panel-footer">
                            <a href="/home" target="_blank">Отправить анкету</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-left-4 newsfeed">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Live news feed
                        </div>
                        <div class="panel-body">
                            @foreach ($newses as $news)
                                @include('element.news',["news"=>$news])
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal.anketa')

@endsection
