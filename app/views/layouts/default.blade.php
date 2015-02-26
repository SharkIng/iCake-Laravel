<!DOCTYPE HTML>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>iCake - Your home made cake proffisional</title>
        <link href="{{{asset('css/bootstrap.css')}}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{{asset('js/jquery.min.js')}}}"></script>
         <!-- Custom Theme files -->
        <link href="{{{asset('css/style.css')}}}" rel='stylesheet' type='text/css' />
         <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        </script>

    </head>
    <body>
    <!-- container -->
        <!-- main-menu -->
        <div class="main-menu">
            <div class="container">
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li><a href="{{ route('/')}}">Home</a></li>
                    <li><a href="{{ route('products')}}">Products</a></li>
                    <li><a href="{{ route('about')}}">About</a></li>
                    <li><a href="{{ route('contact')}}">Contact</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>  
                <!-- script-for-nav -->
                    <script>
                        $( "span.menu" ).click(function() {
                          $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                          });
                        });
                    </script>
                <!-- script-for-nav -->

                <!-- logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{{asset('images/logo.png')}}}" title="Sweetcake" /></a>
                </div>
                <!-- logo -->
            </div>
        </div>
        <!-- /main-menu -->

<tr>
<td style="padding-top: 10px; padding-bottom: 10px">
		  @yield('body')
</td>
</tr>

<div class="container">

<hr>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>


<!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-bottom">
                <p>Copyright &copy; 2015. iCake All rights reserved.</p>
            </div>
        </div>
    </div>
    <!-- /footer -->
<!-- /.container -->