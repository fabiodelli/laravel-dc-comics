@extends('layouts.app')
@section('title',$product->title)
@section('content')
<div class="container pt-3 pb-3">
    <div class="d-flex">
        <img class="p-3" width="200" src="{{$product->thumb}}" alt="{{$product->title}}">
        <div class="p-3">
            <h4 class="card-title">{{$product->title}}</h4>
            <p class="card-text">description:{{$product->description}}</p>
            <span class="card-text me-3">{{$product->series}}</span>
            <span class="card-text me-3">{{$product->title}}</span>
            
            <span class="card-text">{{$product->sale_date}}</span>

        </div>
        <div class="card-footer">
            
            <strong class="card-text">€{{$product->price}}</strong>
        </div>
    </div>
</div>

@endsection


