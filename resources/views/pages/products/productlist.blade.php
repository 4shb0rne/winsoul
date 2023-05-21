@extends("index")
@section("content")
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<div class="d-flex justify-content-center">
    <div class="mt-4" style="min-width: 90%">
        <form action="/searchproduct" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" name="productname" value="{{ $search }}"/>
                <button type="submit">
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </button>
            </div>
        </form>
        <div class="container">
            @if (count($data) == 0)
                <h2 class="text-center text-danger mt-5">Product not found</h2>
            @endif
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
  <div class="d-flex justify-content-center mt-5">
    {{ $data->links() }}
  </div>
@endsection
