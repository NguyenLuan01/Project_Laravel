<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Profile Form</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .form-box{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px
        }
    </style>
</head>
<body>

<div class="container">
    <h1 align="center" style="margin-bottom: 40px">Thêm sản phẩm</h1>

    <section class="form-box">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ session('error')}}</li>
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{session('success')}}</li>
                </ul>
            </div>

        @endif
        <form action="#" class="col-md-5" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Book Name</label>
                <input type="text" id="bookname" name="bookname"  class="form-control" >
            </div>
            <div class="form-group">
                <label for="name">Author Name</label>
                <input type="text" id="author" name="author"  class="form-control" >
            </div>
            <div class="form-group">
                <label for="name">Price</label>
                <input type="text" id="price" name="price"  class="form-control" >
            </div>
            @csrf
            <div class="form-group">
                <label for="photo">Attach a photograph</label>
                <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </section>
</div>
</body>
</html>

