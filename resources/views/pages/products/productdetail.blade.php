@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@if(@session('success'))
    <div class="alert alert-success text-center">
        {{ @session('success') }}
    </div>
@endif
<div class="row mt-5" style="margin-left: 20%;">
    <div class="col-7">
        <p class="h5"><b>{{ $product->product_name }}</b></p>
        <div>
            <div class="mb-3 h2">
                {{ $product->productname }}
            </div>
            <div class="d-flex align-items-center">
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" disabled/>
                    <label for="star5"></label>
                    <input type="radio" id="star4half" name="rating" value="4.5" disabled/>
                    <label for="star4half" class="half"></label>
                    <input type="radio" id="star4" name="rating" value="4" disabled/>
                    <label for="star4"></label>
                    <input type="radio" id="star3half" name="rating" value="3.5" disabled/>
                    <label for="star3half" class="half"></label>
                    <input type="radio" id="star3" name="rating" value="3" disabled/>
                    <label for="star3"></label>
                    <input type="radio" id="star2half" name="rating" value="2.5" disabled/>
                    <label for="star2half" class="half"></label>
                    <input type="radio" id="star2" name="rating" value="2" disabled/>
                    <label for="star2"></label>
                    <input type="radio" id="star1half" name="rating" value="1.5" disabled/>
                    <label for="star1half" class="half"></label>
                    <input type="radio" id="star1" name="rating" value="1" disabled/>
                    <label for="star1"></label>
                </div>
                <span style="margin-left: 10px">30 Reviews</span>
            </div>
            <div>
                <img src="{{ asset('storage/assets/'.$product->productimage) }}" width="400px" height="400px">
                <div class="mt-5">
                    <p class="h3"><b>Description</b></p>
                    <p class="mt-3">{{ $product->productdescription }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5" style="position: sticky; top: 0; align-self: flex-start; font-size:12px">
            <p><a href=""><input type="button" class="btn btn-dark mt-3" style="width: 50%" value="Edit Product"/></a></p>
            <div class="card mb-3" style="width: 300px; height:250px">
                    <div class="card-body">
                        <p class="card-title">${{$product->productprice}}</p>
                    </div>
            </div>
    </div>
</div>
@endsection
