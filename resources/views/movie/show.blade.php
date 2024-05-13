@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{$movie->cover_url}}" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">{{$movie->title}}</p>
                    <p>jumlah viewer: <b>{{$movie->viewer}}</b>viewer</p>
                    <p>Desc : {{$movie->description}}</p>
                    <p><a href="{{$movie->trailer_url}}">Link</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
