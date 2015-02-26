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
                		{{ Form:: open(array('url' => 'contact_request', 'class' => 'form-horizontal')) }} 
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
												@foreach($errors->all(':message') as $message) {{ $message }} @endforeach
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                            	{{ Form:: label ('first_name', 'First Name*' )}}
                              {{ Form:: text ('first_name', '', array( 'class' => 'form-control') )}} 
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                            	{{ Form:: label ('last_name', 'Last Name*' )}}
                              {{ Form:: text ('last_name', '', array( 'class' => 'form-control') )}}
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                            	{{ Form:: label ('phone_number', 'Phone Number' )}}
                            	{{ Form:: text ('phone_number', '', array('placeholder' => '0280021xx', 'class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                            	{{ Form:: label ('email', 'E-mail Address*') }}
                            	{{ Form:: email ('email', '', array('placeholder' => 'me@example.com', 'class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                            	{{ Form:: label ('message', 'Message*' )}}
                              {{ Form:: textarea ('message', '', array( 'class' => 'form-control'))}} 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                {{ Form::submit('Send', array('class' => 'btn btn-primary')) }}
                            </div>
                        </div>
                    </fieldset>
                {{ Form:: close() }}
            </div>
        </div>
    </div>
</div>

<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
@stop

</html>