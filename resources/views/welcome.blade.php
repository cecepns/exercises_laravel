<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
  <div class="container mt-5">
    <h1> Nama Saya {{$nama}} </h1>  
    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Crud Post</a>
    <a class="btn btn-secondary" href="{{ url('/kuis') }}"> Kuis</a>
    <a class="btn btn-danger" href="{{ url('/admin') }}"> Admin Quiz</a>
  </div>
</body>
</html>