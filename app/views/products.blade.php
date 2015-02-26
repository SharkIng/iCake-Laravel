<!DOCTYPE html>
<html lang="en">

@extends('layouts.default')

@section('body')

<body>
    <br><br>
    <!-- Page Content -->
    <div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <h2>Products List and Price</h2>
                <p>This is all price and products list</p> 
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    </tr>
                </thead>
                @if($products->count())
                @foreach($products as $product)
                <tbody>
                    <tr>
                        <td>{{{ $product->name }}}</td>
                        <td>{{{ $product->description}}}
                        <td>${{{ $product->price }}}</td>
                    </tr>
                </tbody>
                @endforeach
                @endif
                </table>

                <p>* Homemade Cakes can be added extra flavours for extra $ 5</p>
                <p>* Durian flavours for extra $ 5</p>
                <p>* All Products are homemade, low fat without any artifitial ingredient</p> 
    </div></div></div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
@stop

</html>