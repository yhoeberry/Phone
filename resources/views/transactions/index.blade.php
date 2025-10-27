@extends('layouts.app')

@section('content')
<h2>Transactions</h2>
<a href="{{ route('transactions.create') }}" class="btn btn-success mb-3">New Transaction</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Phone</th><th>User</th><th>Quantity</th><th>Total</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
        <tr>
            <td>{{ $transaction->id }}</td>
            <td>{{ $transaction->phone->name }}</td>
            <td>{{ $transaction->user->name }}</td>
            <td>{{ $transaction->quantity }}</td>
            <td>${{ number_format($transaction->total, 2) }}</td>
            <td>
                <a href="{{ route('transactions.show', $transaction) }}" class="btn btn-info btn-sm">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
