@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<div class="row mt-5" style="margin-left: 20%;">
    <div class="col-8">
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
    @auth
    <div class="col-4" style="position: sticky; top: 0; align-self: flex-start; font-size:12px">
            @if(Auth::user()->role == "Admin")
            <p><a href="{{ url('updateproduct/'.$product->ProductID) }}"><input type="button" class="btn btn-secondary mt-3" style="width: 50%" value="Edit Product"/></a></p>
            @endif
            <div class="card mb-3" style="width: 200px; height:160px">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ url('addcart/'.$product->ProductID) }}">
                            @csrf
                            <p class="card-title h4">${{$product->productprice}}</p>
                            <p class="card-title">
                                <input type="number" class="border" value="1" name="quantity"/>
                            </p>
                            <p class="card-title">
                                <button type="submit" class="btn btn-success">
                                    Checkout
                                </button>
                            </p>
                        </form>
                    </div>
            </div>
    </div>
    @endauth
</div>
@endsection
