<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>wCut.co</title>
    <meta name="description" content="Startups template">
    <meta name="keywords" content="Startups template">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114.jpg">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all" />

    <!--[if lt IE 9]>
        <script src="/assets/js/html5.js"></script>
        <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="color-landing-page">

    <!-- Preloader -->
    <div id="mask">
        <div id="loader"></div>
    </div>

    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="/" class="logo"></a>
						<span class="sr-only">wCut.co</span>
                    </div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navigation-navbar">
                    <ul class="navigation-bar navigation-bar-left">
                        <li class="active"><a href="/">Home</a></li>
                        <!-- <li><a href="/about">About</a></li>
												<li><a href="/product">Prices</a></li>
                        <li><a href="/guarantee">Contacts</a></li> -->
                    </ul>
                    <ul class="navigation-bar navigation-bar-right">

											@if (Sentry::check())
											           <li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::to('users') }}/{{ Session::get('userId') }}">Perfil</a></li>
											           <li><a href="{{ URL::to('logout') }}">Logout</a></li>
											@else
                                 <li><a href="/register">Register</a></li>
											           <li class="featured" {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ URL::to('login') }}">login</a></li>
											@endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>


@yield('content')

    <footer id="footer" class="footer light inverted">
        <div class="container">
            <div class="footer-content row">
                <div class="col-sm-4">
                    <div class="logo-wrapper">
                        <img src="/assets/img/logo-white.png" alt="logo" />
                    </div>
                    <p>No registration is required, but if you want to avoid the capcha should do. The links are permanent, and is totally free.</p>
                    <p><strong>Miguel Mendez, Founder</strong>.</p>
                </div>
                <div class="col-sm-5 social-wrap">
                    <div class="footer-title">Social Networks</div>
                    <ul class="list-inline socials">
                        <li><a href="https://www.facebook.com/wcutco"><span class="icon icon-socialmedia-08"></span></a></li>
                        <li><a href="https://twitter.com/wwwcutco"><span class="icon icon-socialmedia-07"></span></a></li>
                        <li><a href="#"><span class="icon icon-socialmedia-16"></span></a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="footer-title">Our Contacts</div>
                    <ul class="list-unstyled">
                        <li>
                            <span class="icon icon-chat-messages-14"></span>
                            <a href="mailto:info@startup.ly">info@wcut.co</a>
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-34"></span>
                            Lavalle y Manuel Ocampo, 1ª Piso - Of. 1, Gdor. Virasoro, Corrientes, RA 3342
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-17"></span>
                            54 - 3756-48-2090
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">Codex S.A. 2014. All rights reserved.</div>
    </footer>

    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>

    <!--[if lt IE 9]>
        <script type="text/javascript" src="/assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
        <script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js?ver=1"></script>
    <!--<![endif]-->

    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="/assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="/assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="/assets/js/headhesive.min.js"></script>
	<script type="text/javascript" src="/assets/mailchimp/js/mailing-list.js"></script>
    <script type="text/javascript" src="/assets/js/scripts.js"></script>
</body>
</html>
