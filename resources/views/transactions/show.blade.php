@extends('layouts.app')

@section('content')
<h2>Transaction #{{ $transaction->id }}</h2>
<p><strong>Phone:</strong> {{ $transaction->phone->name }}</p>
<p><strong>User:</strong> {{ $transaction->user->name }}</p>
<p><strong>Quantity:</strong> {{ $transaction->quantity }}</p>
<p><strong>Total:</strong> ${{ number_format($transaction->total, 2) }}</p>

<a href="{{ route('transactions.index') }}" class="btn btn-secondary">Back</a>
@endsection
