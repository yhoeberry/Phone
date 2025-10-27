@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}</p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h3>Available Phones</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phones as $phone)
                <tr>
                    <td>{{ $phone->brand }} {{ $phone->name }}</td>
                    <td>{{ $phone->description }}</td>
                    <td>{{ $phone->price }}</td>
                    <td>{{ $phone->stock }}</td>
                    <td>
                        <form action="{{ route('transaction.buy', $phone->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm"
                                @if($phone->stock < 1) disabled @endif>
                                Buy
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
