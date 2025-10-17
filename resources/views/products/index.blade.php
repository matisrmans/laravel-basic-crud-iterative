@extends('products.layout')


@section('content')

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach ($allProducts as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td><a href="{{ route('product.show', [$product]) }}" id= 'show'>Show</a></td>
                <td><a href="{{ route('products.edit', [$product]) }}">Edit</a></td>
                <td><form action="{{ route('products.destroy', [$product]) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete">
                </form></td>
            </tr>
        @endforeach
        </table>
    
@endsection
