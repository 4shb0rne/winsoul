@extends('index')
@section('content')
<div class="insertform">
    <div class="text-center"><h2>Update Product</h2></div>
    <form action="{{ url('updateproduct/'.$product->ProductID) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control @error('productname')is-invalid @enderror" name="productname"  value="{{ $product->productname }}">
            @error('productname')
                <div class="invalid-feedback">
                    Product Name must be filled
                </div>
            @enderror
        </div>
        <div class="form-group mt-1">
            <label>Product Description</label>
            <textarea class="form-control @error('productdescription')is-invalid @enderror" rows="5" name="productdescription">{{ $product->productdescription }}</textarea>
            @error('productdescription')
                <div class="invalid-feedback">
                    Product Description must be filled
                </div>
            @enderror
        </div>
            <div class="form-group mt-1">
                <label>Product Price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control @error('productprice')is-invalid @enderror" name="productprice" value="{{ $product->productprice }}">
                    @error('productprice')
                    <div class="invalid-feedback">
                        Product Price must be filled
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-1">
                <label>Product Image</label>
                <input type="file" class="form-control mt-1" name="productimage">
                @error('productimage')
                    <div class="invalid-feedback">
                        Product image must be filled
                    </div>
                @enderror
            </div>
        <p class="mt-3"><button type="submit" class="btn btn-dark" style="width: 100%;">Submit</button></p>
    </form>
</div>
@endsection
