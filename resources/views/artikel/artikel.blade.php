@extends('layout.layout')
@section('content')
<div class="container">
    <h3 align="center" class="py-4" style="font-family: cursive">Artikel
        <hr>
    </h3>
    <div class='row'>
        @foreach($artikel as $dudu)
        <div class="col">
            <center>
            <div class="card" style="width: 18rem;">
                <img src="{{$dudu->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        <a href="artikel/id/{{$dudu->id}}">{{$dudu->judul}}</a>
                        <br>
                        <a href="artikel/kategori/{{$dudu->kategori}}">{{$dudu->kategori}}</a>
                    </p>
                </div>
            </div>
            </center>
        </div>
        @endforeach
    </div>
</div>
@endsection
