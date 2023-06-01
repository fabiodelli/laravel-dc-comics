@extends('layouts.app')
@section('title',$product->title)
@section('content')
<div class="container">
    <div class="card">
        <img class="" width="200" src="{{$product->thumb}}" alt="{{$product->title}}">
        <div class="card-body">
            <h4 class="card-title">{{$product->title}}</h4>
            <p class="card-text">description:{{$product->description}}</p>
            <p class="card-text">{{$product->series}}</p>
            <p class="card-text">{{$product->sale_date}}</p>
        </div>
        <div class="card-footer">
            
            <p class="card-text">€{{$product->price}}</p>
        </div>
    </div>
</div>

@endsection


