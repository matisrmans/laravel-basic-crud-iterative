@extends('products.layout')

@section('content')
<form action="{{ route('products.update', [$singleProduct]) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ old('name') }}"><br>
    <input type="number" name="quantity" value="{{ $singleProduct->quantity }}"><br>
    <textarea name="description">{{ $singleProduct->description }}</textarea><br>
    <input type="submit" value="Submit">
</form>
@endsection