@extends('index')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-1 align-self-center">
                <a href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
            </div>
            <div class="col-10 col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/assets/banner1.png') }}" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/assets/banner2.png') }}" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/assets/banner3.png') }}" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 align-self-center">
                <a href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>    
    <div class="d-flex justify-content-center">
        <div class="mt-5">
            <form action="/searchproduct" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" name="productname" />
                    <button type="submit">
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </button>
                </div>
            </form>
            <h2 class="mt-5">Newly Released</h2>
            <div class="container">
                @foreach ($data->chunk(4) as $chunks)
                    <div class="row mt-4">
                        @foreach ($chunks as $product)
                            @include('components.productcard', ['product' => $product])
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $data->links() }}
    </div>
@endsection
