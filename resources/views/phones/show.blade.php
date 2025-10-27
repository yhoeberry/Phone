@extends('layouts.app')

@section('content')
<h2>{{ $phone->name }}</h2>
<p><strong>Brand:</strong> {{ $phone->brand }}</p>
<p><strong>Price:</strong> ${{ number_format($phone->price, 2) }}</p>
<p><strong>Description:</strong> {{ $phone->description }}</p>

<a href="{{ route('phones.index') }}" class="btn btn-secondary">Back</a>
@endsection
