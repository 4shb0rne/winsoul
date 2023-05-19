@extends("index")
@section("content")
<h1 class="text-center">Transaction Detail</h1>
<div class="row mt-3" style="margin-left: 15%;">
    <div class="col-10">
        @if (count($transactions) == 0)
            <h2 class="text-center text-danger mt-5">Transaction is Empty</h2>
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
              </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->product->ProductID }}</td>
                    <td><img src="{{ asset('storage/assets/'.$transaction->product->productimage) }}" width="100px" height="100px"></td>
                    <td>{{ $transaction->product->productname }}</td>
                    <td>${{ $transaction->product->productprice }}</td>
                    <td>{{ $transaction->Quantity }}</td>
                    <td>${{ $transaction->Quantity * $transaction->product->productprice }}</td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>${{ $total_price }}</td>
                </tr>
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection

