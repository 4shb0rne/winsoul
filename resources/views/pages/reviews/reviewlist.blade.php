@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<div class="d-flex justify-content-center">
    <div>
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
    </div>
</div>
@endsection
