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
                        <img src="{{ asset('storage/assets/' . $product->productimage) }}" width="400px" height="400px"
                            class="border">
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
                            <div class="fill" style="width: {{ number_format($star5, 2) }}%"></div>
                            <p class="percentage-text"> {{ number_format($star5, 2) }}% </p>
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
                            <div class="fill" style="width: {{ number_format($star4, 2) }}%"></div>
                            <p class="percentage-text">{{ number_format($star4, 2) }}%</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="width: 300px">
                    <div class="col-md-6">
                        <div class="star-rating">
                            <div class="star-rating">
                                <input type="radio" name="rating" value="5" disabled />
                                <label for="star5" class="star"></label>
                                <input type="radio" name="rating" value="4" disabled />
                                <label for="star4" class="star"></label>
                                <input type="radio" name="rating" value="3" disabled />
                                <label for="star3" class="star filled"></label>
                                <input type="radio" name="rating" value="2" disabled />
                                <label for="star2" class="star filled"></label>
                                <input type="radio" name="rating" value="1" disabled />
                                <label for="star1" class="star filled"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        3 Star
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="percentage-box">
                            <div class="fill" style="width: {{ number_format($star3, 2) }}%"></div>
                            <p class="percentage-text">{{ number_format($star3, 2) }}%</p>
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
                            <div class="fill" style="width: {{ number_format($star2, 2) }}%"></div>
                            <p class="percentage-text">{{ number_format($star2, 2) }}%</p>
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
                            <div class="fill" style="width: {{ number_format($star1, 2) }}%"></div>
                            <p class="percentage-text">{{ number_format($star1, 2) }}%</p>
                        </div>
                    </div>
                </div>
            </div>
            @auth
                <form method="POST" enctype="multipart/form-data" action="{{ url('addreview/' . $product->ProductID) }}">
                    @csrf
                    <div class="mt-5 border p-3">
                        <div class="star-rating">
                            <input type="hidden" id="score" name="reviewscore" value="0">
                            <input type="radio" id="star_5" name="rating" value="5" />
                            <label for="star_5"></label>
                            <input type="radio" id="star_4" name="rating" value="4" />
                            <label for="star_4"></label>
                            <input type="radio" id="star_3" name="rating" value="3" />
                            <label for="star_3"></label>
                            <input type="radio" id="star_2" name="rating" value="2" />
                            <label for="star_2"></label>
                            <input type="radio" id="star_1" name="rating" value="1" />
                            <label for="star_1"></label>
                        </div>
                        <div class="d-flex">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="content"></textarea>
                            <button type="submit" class="btn btn-primary" style="margin-left: 20px">Insert</button>
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="text-danger mt-1">{{ $error }}</div>
                            @endforeach
                        @endif
                    </div>
                </form>
            @endauth
            <div>
                @foreach ($reviews as $review)
                    <div class="container border p-3">
                        <div class="row">
                            <div class="col-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="star-rating">
                                            <input type="radio" id="star5" name="rating" value="5"
                                                disabled />
                                            <label for="star5"
                                                class="star {{ $review->reviewscore >= 5 ? 'filled' : '' }}"></label>
                                            <input type="radio" id="star4" name="rating" value="4"
                                                disabled />
                                            <label for="star4"
                                                class="star {{ $review->reviewscore >= 4 ? 'filled' : '' }}"></label>
                                            <input type="radio" id="star3" name="rating" value="3"
                                                disabled />
                                            <label for="star3"
                                                class="star {{ $review->reviewscore >= 3 ? 'filled' : '' }}"></label>
                                            <input type="radio" id="star2" name="rating" value="2"
                                                disabled />
                                            <label for="star2"
                                                class="star {{ $review->reviewscore >= 2 ? 'filled' : '' }}"></label>
                                            <input type="radio" id="star1" name="rating" value="1"
                                                disabled />
                                            <label for="star1"
                                                class="star {{ $review->reviewscore >= 1 ? 'filled' : '' }}"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <img src="{{ asset('storage/assets/' . $review->user->profile_picture) }}"
                                                style="width:25px; border-radius: 10px" />
                                            <span>{{ $review->user->username }}</span>
                                        </h5>
                                        <p class="card-text mt-2">{{ $review->content }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex" style="align-items: center; justify-content: flex-end;">
                                @auth
                                    @if (Auth::user()->UserID == $review->user->UserID)
                                        <a class="btn btn-danger"
                                            href="{{ url('deletereview/' . $review->ReviewID . '/' . $product->ProductID) }}">
                                            <i class="fa-icon fa fa-trash">
                                            </i></a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
