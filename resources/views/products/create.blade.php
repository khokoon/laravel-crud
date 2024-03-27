<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel CRUD</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">PRODUCTS</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <h1>Add Products</h1>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form action="/products/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}">

                            <!-- required message -->
                            @if ($errors->has('name'))
                                <span class="text-danger"> {{ $errors->first('name') }} </span>
                            @endif
                        </div>

                        <div class="form-group">
                           <label for="">Description</label>
                           <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{ old('description') }}</textarea>

                           <!-- required message -->
                           @if ($errors->has('description'))
                                <span class="text-danger"> {{ $errors->first('description') }} </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control"
                            value="{{ old('description') }}">

                            <!-- required message -->
                            @if ($errors->has('image'))
                                <span class="text-danger"> {{ $errors->first('image') }} </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>

                </div>

            </div>
        </div>
    </div>





</body>
</html>
