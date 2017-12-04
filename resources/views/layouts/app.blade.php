<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Fish Simulator</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-1425974018197496",
            enable_page_level_ads: true
        });
    </script>
</head>

<body>
<!--======= header =======-->
<header>
    <div class="container-full">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
                <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md"  href="#">
                    <i class="fa fa-navicon"></i>
                </a>
                <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                    <i class="fa fa-close"></i>
                </a>
                <div id="logo">
                    <a href="{{ url('/') }}"><img style="height: 50px; width: auto" src="img/logoputih.png" alt=""></a>
                </div>
            </div><!-- // col-md-2 -->
            <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">

            </div><!-- // col-md-3 -->
            <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">

            </div><!-- // col-md-4 -->
            <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                <ul class="notifications">
                    <li class="dropdown">

                        <ul class="dropdown-menu dropdown-menu-friend-requests ">
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="demo_img/z1.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="demo_img/z2.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="demo_img/z3.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="demo_img/z4.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-info-circle"></i>
                            <span class="badge badge-color2 header-badge">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-help-cnter">
                            <li>
                                <h2 class="title">Help center</h2>
                                <div class="search-form">
                                    <form id="search-2" action="#" method="post">
                                        <input type="text" placeholder="Search fish..."/>
                                        <input type="submit" value="Keywords" />
                                    </form>
                                </div>
                            </li>
                            <li>
                                <h2 class="title">Help on</h2>
                                <ul class="help-cat-link">
                                    <li><a href="#">the video</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    <li><a href="#">Members</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Comments</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-bell-o"></i>
                            <span class="badge badge-color3 header-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications-items ">
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-thumbs-up color-2"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-comment color-3"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="all_notifications">All Notifications</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#" class="user-area">
                        <div class="thumb"><img src="{{ (Auth::user()->avatar == "users/default.png") ? "storage/".Auth::user()->avatar : Auth::user()->avatar }}" alt=""></div>
                        <h2>{{ Auth::user()->name }}</h2>
                        <h3>{{ Auth::user()->email }}</h3>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu account-menu">
                        <li><a href="{{ url('profile') }}"><i class="fa fa-edit color-1"></i>Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out color-4"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- // row -->
    </div><!-- // container-full -->
</header><!-- // header -->

<div id="main-category">
    <div class="container-full">
        <div class="row">

            <audio style="width: 100%" controls><source src="music/music.mp3" type="audio/mpeg"></audio>
            <!-- // col-md-14 -->
        </div><!-- // row -->
    </div><!-- // container-full -->
</div><!-- // main-category -->

<div class="site-output">
    <div class="col-md-2 no-padding-left hidden-sm hidden-xs">
        <div class="left-sidebar">
            <div id="sidebar-stick" >
                <ul class="menu-sidebar">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="{{ url('/fishopedia') }}"><i class="fa fa-file-text"></i>Fish 'Opedia</a></li>
                    <li><a href="{{ url('/home') }}"><i class="fa fa-simplybuilt"></i>Fish Simulator</a></li>
                </ul>
                <ul class="menu-sidebar">
                    <li><a href="#"><i class="fa fa-info-circle"></i>About</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
                </ul>
            </div><!-- // sidebar-stick -->
            <div class="clear"></div>
        </div><!-- // left-sidebar -->
    </div><!-- // col-md-2 -->

    @yield('content')

</div>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/tab.js"></script>
<script src="/js/jquery.sticky-kit.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/grid-blog.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-108524099-1', 'auto');
    ga('send', 'pageview', location.pathname);

</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108524099-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108524099-1');
</script>


</body>
</html>
