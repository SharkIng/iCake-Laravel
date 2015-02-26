<!DOCTYPE html>
<html lang="en">

@extends('layouts.default')

@section('body')

		<!-- banner -->
		<div class="container">
				<div class="img-slider">
						<!--start-slider-script-->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!--//End-slider-script-->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img  src="images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS HOME MADE CAKES?</h1>
					          	 	<p>iCake will be your best Choice</p>
					          	 	<a class="buy-btn" href="{{ route('products')}}">More Information</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="https://www.facebook.com/sharer/sharer.php?app_id=314889968611564&u=http%3A%2F%2Ficake.shacas.com%2F&display=popup&ref=plugin"><span class="facebook"> </span></a>
					          			<a href="https://twitter.com/share"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
<!-- 					        </li>
					         <li>
					          <img  src="images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="#">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div> -->
					          <!-- share-on -->
<!-- 					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div> -->
					          <!-- share-on -->
<!-- 					        </li>
					        <li>
					          <img src="images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="#">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div> -->
					           <!-- share-on -->
<!-- 					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div> -->
					          <!-- share-on -->
<!-- 					        </li>
					        <li>
					          <img src="images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					            <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="#">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div> -->
					           <!-- share-on -->
<!-- 					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div> -->
					          <!-- share-on -->
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
		<!-- /banner -->
		</div>
		<!-- top-grids -->
		<div class="top-grids">
			<div class="container">
				@if($products->count())
        @foreach($products as $product)
        @if($product->pic != Null)
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>{{{ $product->name }}}</h3>
					</div>
					<div class="top-grid-info">
						<img src=".{{{ $product->pic }}}" class="img-responsive" title="name"/>
						<!--<p>{{{ $product->description }}}</p>-->
						<span>From ${{{ $product->price }}}</span>
						<div class="clearfix"> </div>
						<!--<a class="btn" href="#">Buy Now</a>-->
            <p>
              <!--<a href="#" class="btn btn-primary">Buy Now!</a>--> <a href="{{ route('products')}}" class="btn btn-default">More Products</a>
            </p>
					</div>
				</div>
				@endif
        @endforeach
        @endif
        <div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>Mille Crepes Size 8</h3>
					</div>
					<div class="top-grid-info">
						<img src="./pictures/0222_12.jpg" class="img-responsive" title="name"/>
						<p></p>
						<span>From $55</span>
						<div class="clearfix"> </div>
						<!--<a class="btn" href="#">Buy Now</a>-->
            <p>
              <!--<a href="#" class="btn btn-primary">Buy Now!</a>--> <a href="{{ route('products')}}" class="btn btn-default">More Info</a>
            </p>
					</div>
				</div>
            <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'icake'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				</div>
			</div>
			<!-- top-grids-bg -->
			<div class="top-grids-bg">
				<span> </span>
			</div>
			<!-- top-grids-bg -->
		</div>
		<!-- top-grids -->
	<!-- /container -->
</body>
@stop

</html>

