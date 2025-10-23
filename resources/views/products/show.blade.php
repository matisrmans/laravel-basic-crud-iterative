@extends('products.layout')

@section('content')
<div class="detail-container">
    <div class="detail-header">
        <h2>Product Details</h2>
        <div class="detail-actions">
            <a href="{{ route('products.edit', [$singleProduct]) }}" class="btn btn-edit">Edit Product</a>
            <a href="{{ route('products.index') }}" class="btn btn-cancel">Back to List</a>
        </div>
    </div>

    <div class="detail-content">
        <div class="detail-group">
            <label>Product Name</label>
            <div class="detail-value">{{ $singleProduct->name }}</div>
        </div>

        <div class="detail-group">
            <label>Quantity</label>
            <div class="detail-value">{{ $singleProduct->quantity }}</div>
        </div>

        <div class="detail-group">
            <label>Description</label>
            <div class="detail-value description">{{ $singleProduct->description }}</div>
        </div>
    </div>
</div>
@endsection
