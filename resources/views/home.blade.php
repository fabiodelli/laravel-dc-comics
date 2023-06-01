@extends('layouts.app')
@section('title', 'Admin')
@section('content')
<div class="container">

    <div class="container">
        <div class="row">
            @forelse ($products as $product)
            <div class="col-6">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="{{$product->title}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->title}}</h4>
                        <p class="card-text">Text</p>
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
