<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="{{ asset('/public/assets/front/css/main.css') }}">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!--[if lt IE 9]>
<script src="/public/assets/front/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="/public/assets/front/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
    @include('layouts.header')
    @yield('page-title')
    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    @include('layouts.sidebar')
                </div><!-- end col -->

                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    @yield('content')
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    @include('layouts.footer')
    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<script src="{{ asset('/public/assets/front/js/main.js') }}"></script>

</body>
</html>
