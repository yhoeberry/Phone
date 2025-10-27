@extends('layouts.app')

@section('content')
<h2>New Transaction</h2>
<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    <div class="mb-3">
        <label>Phone</label>
        <select name="phone_id" class="form-control">
            @foreach($phones as $phone)
            <option value="{{ $phone->id }}">{{ $phone->name }} - ${{ number_format($phone->price, 2) }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" name="quantity" class="form-control" min="1" value="1">
    </div>
    <button class="btn btn-primary">Checkout</button>
</form>
@endsection
