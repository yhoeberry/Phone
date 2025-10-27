@extends('layouts.app')

@section('content')
<div class="card p-4">
  <h3>Login</h3>
  <form method="POST" action="{{ route('login.post') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" class="form-control mb-2">
    <input type="password" name="password" placeholder="Password" class="form-control mb-2">
    <button class="btn btn-primary w-100">Login</button>
  </form>
  <a href="{{ route('register') }}">Register</a>
</div>
@endsection
