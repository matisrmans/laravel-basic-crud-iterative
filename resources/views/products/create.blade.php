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
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" name="name"><br>
    <input type="number" name="quantity"><br>
    <textarea name="description"></textarea><br>
    <input type="submit" value="Submit">
</form>
@endsection
