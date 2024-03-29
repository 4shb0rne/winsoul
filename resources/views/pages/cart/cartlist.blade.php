@extends('index')
@section('content')
<h1 class="text-center">My Cart</h1>
<div class="row mt-3" style="margin-left: 13%;">
    <div class="col-10">
        @if (count($carts) == 0)
            <div>
                <div class="d-flex justify-content-center mt-5">
                    <h2 class="text-center text-danger mt-5">Cart is Empty</h2>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <img src="{{ asset('storage/assets/emptycart.png') }}"/>
                </div>
                <h2 class="text-center mt-5">Looks like you haven't added anything to your cart</h2>
                <div class="d-flex justify-content-center mt-5">
                    <a href="/">
                        <button class="btn btn-dark">Go To Home</button>
                    <a>
                </div>
            </div>
        @else
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Total Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($carts as $cart)
                <tr>
                    <td>{{ $cart->product->ProductID }}</td>
                    <td><img src="{{ asset('storage/assets/'.$cart->product->productimage) }}" width="100px" height="100px"></td>
                    <td>{{ $cart->product->productname }}</td>
                    <td>${{ $cart->product->productprice }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>${{ $cart->quantity * $cart->product->productprice }}</td>
                    <td>
                        <a href="{{url('deletecart/'.$cart->product->ProductID)}}" class="text-danger"
                            style="text-decoration:none;">Delete</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>${{ $total_price }}</td>
                    <td>
                        <a class="text-success" style="text-decoration: none;" href="/checkout">Checkout</a>
                    </td>
                </tr>
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
