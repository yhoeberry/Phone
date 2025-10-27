@extends('layouts.app')

@section('content')
<h2>My Transactions</h2>
<table class="table">
  <tr><th>ID</th><th>Phone</th><th>Qty</th><th>Total</th><th>Date</th></tr>
  @foreach($transactions as $t)
  <tr>
    <td>{{ $t->id }}</td>
    <td>{{ $t->phone->name }}</td>
    <td>{{ $t->quantity }}</td>
    <td>${{ $t->total_price }}</td>
    <td>{{ $t->created_at->format('Y-m-d H:i') }}</td>
  </tr>
  @endforeach
</table>
@endsection
