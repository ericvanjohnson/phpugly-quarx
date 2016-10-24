<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHPUgly Podcast</title>
    <meta name="description" content="">
    <meta name="author" content="Eric Van Johnson (DiegoDev Group) shocm on Twitter">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('stylesheets')
</head>

<body>

@theme('partials.navigation')
<header class="image-bg-fluid-height">
    <img class="img-responsive img-center" src="{{ asset('img/phpelephant_200x200.png')}}" alt="">
</header>

<div class="site-wrapper @if(Request::is('/')) homepage @endif">
    <div class="container-fluid">
        <div class="menu row">
            <h1 class="section-heading text-center">PHPUgly Podcast</h1>
            <h5 class="text-center">The Podcast your mother warned you about</h5>
            @menu('main')
        </div>

        @yield('content')
    </div>
</div>

<div class="footer container-fluid navbar-fixed-bottom">
    <div class="containe">
        <div class="row">
            <div class="col-lg-4">
                <p>Thanks for listening </p>
            </div>
            <div class="col-lg-4 text-center">
                <p>Copyright &copy; PHPUgly Podcast {{ date('Y') }} | Powered by <a href="https://quarx.info/">Quarx</a></p>
            </div>
            <div class="col-lg-4 text-right">
                <p>
                    <a href="https://twitter.com/phpugly"><img height="25px" src="{{ asset('img/twitter-5-xxl.png')}}"></a>
                    <a href="https://github.com/phpugly/podcast"><img height="25px" src="{{ asset('img/github-10-xxl.png')}}"></a>
                    <a href="http://feeds.soundcloud.com/users/soundcloud:users:212379605/sounds.rss"><img height="25px" src="{{ asset('img/rss2-icon.png')}}"></a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>

<div class="clearfix"></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript">
    var _url = '{!! url('') !!}';
</script>
@yield('javascript')
</html>
