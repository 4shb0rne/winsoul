@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<div class="d-flex justify-content-center">
    <div class="mt-5">
        <h2>Newly Released</h2>
        <div class="container">
            @foreach($data->chunk(4) as $chunks)
                <div class="row mt-4">
                    @foreach($chunks as $product)
                        @include('components.productcard', ['product' => $product])
                    @endforeach
                </div>
            @endforeach
          </div>
    </div>
  </div>
@endsection
