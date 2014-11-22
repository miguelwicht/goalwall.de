<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', 'xRoom')</title>
        <meta name="description" content="@yield('meta_description', 'xRoom - An interactive goal wall')">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        @section('stylesheets')
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
            {{ HTML::style('assets/css/bootstrap.min.css') }}
            {{ HTML::style('assets/css/main.css') }}
        @show

    </head>
    <body>

        <!-- navbar start -->
        @section('navbar')
            @include('layouts.nav')
        @show
        <!-- navbar end -->

        <!-- flash messages start -->
        @if( Session::has('flash_success') || Session::has('flash_error') )
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        @if(Session::has('flash_success') )
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('flash_success') }}
                            </div>
                        @else
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('flash_error') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        @endif
        <!-- flash messages end -->

        <!-- content start -->
         @section('content')
            <p>Here should be content!</p>
        @show
        <!-- content end -->

        <!-- footer start -->
        @section('footer')
            @include('layouts.footer')
        @show
        <!-- footer end -->

        <!-- scripts start -->
        @section('scripts')
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
            <script src="js/plugins.js"></script>
            {{ HTML::script('assets/js/main.js') }}
        @show
        <!-- scripts end -->

    </body>
</html>

