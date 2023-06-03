@extends('layouts.app')
@section('title', 'Admin')
@section('content')
<div class="container">

    <div class="container pt-3 pb-3 bg-white">
        <div class="row">
            @forelse ($products as $product)
            <div class="col-3" >
                <div class="card"  >
                    <img class=" overflow-hidden" height="350px" src="{{$product->thumb}}" alt="{{$product->title}}">
                    <div class="card-body" >
                        <h4 class="card-title">{{$product->title}}</h4>
                        <div class="card-text">{{$product->series}}</div>
                        <div>€{{$product->price}}</div>
                    </div>
                </div>
            </div>
            @empty
            <p>No products available.</p>
            @endforelse           
        </div>
    </div>
</div>

@endsection
