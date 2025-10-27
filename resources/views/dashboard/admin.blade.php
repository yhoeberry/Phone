@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admin Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}</p>

    <h3>Phones Management</h3>
    <a href="{{ route('phones.create') }}" class="btn btn-primary mb-2">Add New Phone</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phones as $phone)
                <tr>
                    <td>{{ $phone->brand }}</td>
                    <td>{{ $phone->name }}</td>
                    <td>{{ $phone->description }}</td>
                    <td>{{ $phone->price }}</td>
                    <td>{{ $phone->stock }}</td>
                    <td>
                        <a href="{{ route('phones.edit', $phone->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('phones.destroy', $phone->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3 class="mt-5">All Transactions</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Phone</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\Transaction::with('user','phone')->get() as $transaction)
                <tr>
                    <td>{{ $transaction->user->name }}</td>
                    <td>{{ $transaction->phone->brand }} {{ $transaction->phone->name }}</td>
                    <td>{{ $transaction->quantity }}</td>
                    <td>{{ $transaction->total_price }}</td>
                    <td>{{ $transaction->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
