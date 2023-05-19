@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<div class="d-flex justify-content-center mt-5">
    <div>
        <div>
            <p class="h5"><b>{{ $product->product_name }}</b></p>
            <div>
                <div class="mb-3 h2">
                    {{ $product->productname }}
                </div>
                <div>
                    <img src="{{ asset('storage/assets/'.$product->productimage) }}" width="400px" height="400px" class="border">
                    <div class="mt-5">
                        <p class="h3"><b>Description</b></p>
                        <p class="mt-3">{{ $product->productdescription }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex flex-column">
            <div class="row" style="width: 300px">
                <div class="col-md-6">
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" disabled />
                        <label for="star5" class="star filled"></label>
                        <input type="radio" id="star4" name="rating" value="4" disabled />
                        <label for="star4" class="star filled"></label>
                        <input type="radio" id="star3" name="rating" value="3" disabled />
                        <label for="star3" class="star filled"></label>
                        <input type="radio" id="star2" name="rating" value="2" disabled />
                        <label for="star2" class="star filled"></label>
                        <input type="radio" id="star1" name="rating" value="1" disabled />
                        <label for="star1" class="star filled"></label>
                      </div>
                </div>
                <div class="col-md-3 mt-2">
                    5 Star
                </div>
                <div class="col-md-3 mt-2">
                    <div class="percentage-box">
                        <div class="fill" style="width: 83%"></div>
                        <p class="percentage-text">83%</p>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 300px">
                <div class="col-md-6">
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" disabled />
                        <label for="star5" class="star"></label>
                        <input type="radio" id="star4" name="rating" value="4" disabled />
                        <label for="star4" class="star filled"></label>
                        <input type="radio" id="star3" name="rating" value="3" disabled />
                        <label for="star3" class="star filled"></label>
                        <input type="radio" id="star2" name="rating" value="2" disabled />
                        <label for="star2" class="star filled"></label>
                        <input type="radio" id="star1" name="rating" value="1" disabled />
                        <label for="star1" class="star filled"></label>
                      </div>
                </div>
                <div class="col-md-3 mt-2">
                    4 Star
                </div>
                <div class="col-md-3 mt-2">
                    <div class="percentage-box">
                        <div class="fill" style="width: 10%"></div>
                        <p class="percentage-text">10%</p>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 300px">
                <div class="col-md-6">
                    <div class="star-rating">
                        <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5" disabled />
                            <label for="star5" class="star"></label>
                            <input type="radio" id="star4" name="rating" value="4" disabled />
                            <label for="star4" class="star"></label>
                            <input type="radio" id="star3" name="rating" value="3" disabled />
                            <label for="star3" class="star filled"></label>
                            <input type="radio" id="star2" name="rating" value="2" disabled />
                            <label for="star2" class="star filled"></label>
                            <input type="radio" id="star1" name="rating" value="1" disabled />
                            <label for="star1" class="star filled"></label>
                          </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    3 Star
                </div>
                <div class="col-md-3 mt-2">
                    <div class="percentage-box">
                        <div class="fill" style="width: 2%"></div>
                        <p class="percentage-text">2%</p>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 300px">
                <div class="col-md-6">
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" disabled />
                        <label for="star5" class="star"></label>
                        <input type="radio" id="star4" name="rating" value="4" disabled />
                        <label for="star4" class="star"></label>
                        <input type="radio" id="star3" name="rating" value="3" disabled />
                        <label for="star3" class="star"></label>
                        <input type="radio" id="star2" name="rating" value="2" disabled />
                        <label for="star2" class="star filled"></label>
                        <input type="radio" id="star1" name="rating" value="1" disabled />
                        <label for="star1" class="star filled"></label>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    2 Star
                </div>
                <div class="col-md-3 mt-2">
                    <div class="percentage-box">
                        <div class="fill" style="width: 3%"></div>
                        <p class="percentage-text">3%</p>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 300px">
                <div class="col-md-6">
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" disabled />
                        <label for="star5" class="star"></label>
                        <input type="radio" id="star4" name="rating" value="4" disabled />
                        <label for="star4" class="star"></label>
                        <input type="radio" id="star3" name="rating" value="3" disabled />
                        <label for="star3" class="star"></label>
                        <input type="radio" id="star2" name="rating" value="2" disabled />
                        <label for="star2" class="star"></label>
                        <input type="radio" id="star1" name="rating" value="1" disabled />
                        <label for="star1" class="star filled"></label>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    1 Star
                </div>
                <div class="col-md-3 mt-2">
                    <div class="percentage-box">
                        <div class="fill" style="width: 2%"></div>
                        <p class="percentage-text">2%</p>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{ url('addreview/'.$product->ProductID) }}">
            @csrf
            <div class="m-2">
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5"/>
                    <label for="star5" class="star"></label>
                    <input type="radio" id="star4" name="rating" value="4"/>
                    <label for="star4" class="star"></label>
                    <input type="radio" id="star3" name="rating" value="3"/>
                    <label for="star3" class="star"></label>
                    <input type="radio" id="star2" name="rating" value="2"/>
                    <label for="star2" class="star"></label>
                    <input type="radio" id="star1" name="rating" value="1"/>
                    <label for="star1" class="star"></label>
                </div>
                <div class="d-flex">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="content"></textarea>
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
            </div>
        </form>
        <div class="mt-5">
            @foreach($reviews as $review)
                <div class="container border">
                    <div class="row">
                    <div class="col-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="star-rating">
                                    <input type="radio" id="star5" name="rating" value="5" disabled />
                                    <label for="star5" class="star"></label>
                                    <input type="radio" id="star4" name="rating" value="4" disabled />
                                    <label for="star4" class="star"></label>
                                    <input type="radio" id="star3" name="rating" value="3" disabled />
                                    <label for="star3" class="star"></label>
                                    <input type="radio" id="star2" name="rating" value="2" disabled />
                                    <label for="star2" class="star"></label>
                                    <input type="radio" id="star1" name="rating" value="1" disabled />
                                    <label for="star1" class="star filled"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div>
                            <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> William</h4>
                            <p class="card-text">Review Content</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
