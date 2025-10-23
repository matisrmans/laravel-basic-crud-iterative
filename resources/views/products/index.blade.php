@extends('products.layout')


@section('content')

    <div class="table-container">
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
                    <td class="action-buttons">
                        <a href="{{ route('product.show', [$product]) }}" class="btn btn-show">Show</a>
                        <a href="{{ route('products.edit', [$product]) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('products.destroy', [$product]) }}" method="post" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
@endsection
