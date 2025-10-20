<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARAVEL CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>





<div class="bg-dark py-2">
    <h1 class="text-white text-center text">LARAVEL CRUD APP</h1>
    <div class="d-flex justify-content-end my-1">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
</div>

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-dark">Create</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        @if(Session::has("success"))
            <div class="col-md-10 mt-3">
                <div class="alert alert-success">
                    {{ Session::get("success") }}
                </div>
            </div>
        @endif

        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-3">
                <div class="card-header bg-dark">
                    <h3 class="text-white text-center">Products</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Price</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($products->isNotEmpty())
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if($product->image)
                                            <img width="50" src="{{ asset('uploads/products/'.$product->image) }}" alt="Product Image">
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->sku }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->created_at->format("d M, Y") }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-dark btn-sm">Edit</a>

                                        <a href="#" onclick="event.preventDefault(); deleteProduct({{ $product->id }})" class="btn btn-danger btn-sm">Delete</a>


                                        <form id="delete-product-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">No products found.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function deleteProduct(id) {
    if(confirm("Are you sure you want to delete this product?")) {
        document.getElementById("delete-product-form-" + id).submit();
    }
}
</script>

</body>
</html>
