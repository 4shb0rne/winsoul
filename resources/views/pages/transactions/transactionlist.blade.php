@extends('index')
@section('content')
<h1 class="text-center">Transaction List</h1>
<div class="row mt-3" style="margin-left: 15%;">
    <div class="col-10">
        @if (count($transactions) == 0)
            <h2 class="text-center text-danger mt-5">No Transaction</h2>
        @else
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">Transaction ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Username</th>
                <th scope="col">Transaction Date</th>
                <th scope="col" style="padding-left: 35px">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->TransactionID }}</td>
                    <td>{{ $transaction->UserID }}</td>
                    <td>{{ $transaction->user->username }}</td>
                    <td>{{ $transaction->TransactionDate }}</td>
                    <td>
                        <a href="{{ url('transactions/'.$transaction->TransactionID) }}" style="text-decoration: none">
                            <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-info fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="{{ url('deletetransaction/'.$transaction->TransactionID) }}" style="text-decoration: none">
                            <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-trash-alt fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
