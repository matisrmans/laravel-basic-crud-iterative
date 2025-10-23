@extends('products.layout')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
<div class="form-container">
    <h2>Create New Product</h2>
    <form action="{{ route('products.store') }}" method="post" class="product-form">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter product name">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" placeholder="Enter quantity">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter product description">{{ old('description') }}</textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-create">Create Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-cancel">Cancel</a>
        </div>
    </form>
</div>
@endsection
