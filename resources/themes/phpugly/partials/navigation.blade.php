<nav class="navbar navbar-default navbar-fixed-top clearfix">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}">PHPUgly Podcast</a>
        </div>
        <div class="collapse navbar-collapse" id="navBar">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/page/about-us') }}">About Us</a></li>
                <li><a href="{{ url('/page/other-great-podcast') }}">Other Podcast</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right menu">
                @menu('main')
                <li>
                    <a href="https://itunes.apple.com/us/podcast/phpugly/id1093659401?mt=2">iTunes</a>
                </li>
                <li>
                    <a href="https://soundcloud.com/phpugly/">SoundCloud</a>
                </li>
                <li>
                    <a href="https://twitter.com/phpugly"><img height="25px" src="{{ asset ('img/twitter.png') }}"></a>
                </li>
                <li>
                    <a href="http://feeds.soundcloud.com/users/soundcloud:users:212379605/sounds.rss"><img height="25px"
                                                                                                           src="{{ asset('img/rss-icon.png') }}"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>