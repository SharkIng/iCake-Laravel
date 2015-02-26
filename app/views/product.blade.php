<!DOCTYPE html>
<html lang="en">

@extends('layouts.default')

@section('body')

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Products Lists</p>
                <div class="list-group">
                    @if($products->count())
                    @foreach($products as $productsx)
                    <a href="../product/{{{ $product-> id}}}" class="list-group-item">{{{ $productsx->name }}}</a>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="{{asset('.{{{ $product->pic }}}')}}" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">${{{ $product -> price}}}</h4>
                        <h4><a href="#">{{{ $product -> name}}}</a>
                        </h4>
                        <p>{{{ $product -> description}}}</p>
                    </div>
                </div>

                <div class="well">

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

        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{{asset('js/jquery.js')}}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{{asset('js/bootstrap.min.js')}}}"></script>

</body>
@stop

</html>
