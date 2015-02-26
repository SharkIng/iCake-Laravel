<!DOCTYPE html>
<html lang="en">

@extends('layouts.default')

@section('body')

<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Welcome to iCake</h1>
            <p> This is iCake website</p>
            <p><a class="btn btn-primary btn-large" href="{{ route('products')}}">Products List/Prices</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>All Products</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            @if($products->count())
            @foreach($products as $product)
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>{{{ $product->name }}}</h3>
                        <p>{{{ $product->description }}}</p>
                        <h1>${{{ $product->price }}}</h1>
                        <p>
                            <!--<a href="#" class="btn btn-primary">Buy Now!</a>--> <a href="product/{{{ $product-> id}}}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
@stop

</html>
