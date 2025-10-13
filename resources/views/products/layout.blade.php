<html>
    <head>
        <title>Product Layout</title>
    </head>
    <body>
        <h1>Product Management</h1>
        
        <nav>
            <a href="{{ route('products.index') }}">All Products</a> |
            <a href="{{ route('products.create') }}">Create Product</a>
        </nav>
        
        <div>
            @yield('content')
        </div>

        

    </body>
</html>