<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Product List</h4>
            </div>
            <div class="card-body">
                @session("success")
                    <div class="alert alert-success">{{$value}}</div>
                @endsession
                <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add Product</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th width=60px>ID</th>
                            <th>Name</th>
                            <th>Detail</th>
                            <th width=200px>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="text-center">
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td class="text-start">{{ $product->details }}</td>
                                <td> <button class="btn btn-primary btn-sm">View</button>
                                     <button class="btn btn-info btn-sm">Edit</button>
                                     <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
