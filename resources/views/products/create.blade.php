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
                <h4>Product Creation</h4>
            </div>
            <div class="card-body">
                <a href="{{ route('products.index') }}" class="btn btn-info mb-3">Back</a>
                
                <form action="{{route('products.store')}}" method="POST">
                    @csrf
                    <div class="mt-2">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control">
                        @error("name") 
                        <span class="text-danger">{{$message}}</span>   
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label for="">Details</label>
                        <textarea name="details" placeholder="details" class="form-control"></textarea>
                          @error("details") 
                        <span class="text-danger">{{$message}}</span>   
                        @enderror
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-info" type="submit">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
