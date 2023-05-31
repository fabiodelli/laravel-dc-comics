@extends('layouts.app')
@section('title',$product->name)
@section('content')
<div class="container">
    <div class="card">
        <img class="" width="200" src="{{$comic->thumb}}" alt="{{$comic->name}}">
        <div class="card-body">
            <h4 class="card-title">{{$comic->name}}</h4>
            <p class="card-text">description:{{$comic->description}}</p>
            <p class="card-text">{{$comic->weight}}</p>
            <p class="card-text">{{$comic->in_stock}}</p>
        </div>
        <div class="card-footer">
            <p class="card-text">{{$comic->comic_code}}</p>
            <p class="card-text">{{$comic->price}}</p>
        </div>
    </div>
</div>

@endsection


