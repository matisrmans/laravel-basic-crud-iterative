@extends('products.layout')

@section('content')
    <h1>{{ $singleProduct->name }}</h1>
    <h4>Quantity: {{ $singleProduct->quantity }}</h4>
    <p>{{ $singleProduct->description }}</p>
@endsection
