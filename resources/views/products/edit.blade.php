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
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', [$singleProduct]) }}" method="post" class="product-form">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" 
                value="{{ old('name', $singleProduct->name) }}" placeholder="Enter product name">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" 
                value="{{ old('quantity', $singleProduct->quantity) }}" placeholder="Enter quantity">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" 
                placeholder="Enter product description">{{ old('description', $singleProduct->description) }}</textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-edit">Update Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-cancel">Cancel</a>
        </div>
    </form>
</div>
@endsection