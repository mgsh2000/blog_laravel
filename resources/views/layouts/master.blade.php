<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('/css/blog-home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">


</head>

<body>

<!-- Navigation -->
@include('layouts.header')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            @yield('content')
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            @section('sidebar')
                @include('layouts.sidebar')
            @show
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
@include('layouts.footer')

<!-- Bootstrap core JavaScript -->
<link rel="stylesheet" href="{{ asset('/vendor/jquery/jquery.min.js') }}">
<link rel="stylesheet" href="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">

</body>

</html>
