@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Manage Phones</h2>
    <a href="{{ route('phones.create') }}" class="btn btn-primary">Add Phone</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($phones as $phone)
        <tr>
            <td>{{ $phone->id }}</td>
            <td>{{ $phone->name }}</td>
            <td>{{ $phone->brand }}</td>
            <td>{{ $phone->description }}</td>
            <td>{{ $phone->price }}</td>
            <td>
                <a href="{{ route('phones.edit', $phone) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('phones.destroy', $phone) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this phone?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
