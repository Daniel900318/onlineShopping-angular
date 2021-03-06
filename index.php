<!DOCTYPE html>
<html ng-app="myApp">

<head>
    <title>Cold Pressed Juice | MOJU</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="favicon5e1f.ico?v=2" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon3860.png?v=1">
    <!--STYLES-->
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <!--STYLES END-->
    <!-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
    <!-- <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"> -->
    
    <!-- angular js -->
    <script src="./assets/vendor/angular-1.4.8/angular.min.js"></script>

    <script src="./assets/vendor/angular-ui/angular-ui-router.js"></script>
    <script src="./assets/vendor/ng-scrollto.js"></script>

    <!-- controller -->
    <script src="./app/app.js"></script>
    <script src="./app/global.js"></script>
    <script src="./main.Ctl.js"></script>
    <script src="./app/home/home.Ctl.js"></script>
    <script src="./app/juice/juice.Ctl.js"></script>
    <script src="./app/buy/buy.Ctl.js"></script>
    <script src="./app/basket/basket.Ctl.js"></script>
    <script src="./app/paper/paper.Ctl.js"></script>

</head>

<body ng-controller="MainController">
    <header class="">
        <!-- Navigation -->
        <nav class="navbar">
            <div class="navbar-menu menu-container">
                <a class="basket" ng-click="gobasket()">BASKET</a>
                <a target="_blank">
                    <div class="instagram"></div>
                </a>
                <a target="_blank">
                    <div class="twitter"></div>
                </a>
                <a target="_blank">
                    <div class="facebook"></div>
                </a>
            </div>
        </nav>
        <div class="main-menu menu-container small--hide">
            <div class="left-side">
                <a class="menu-item" ng-click="gojuice()" ng-class="{color:$root.isjuice}">the juice</a>
                <a class="menu-item" ng-class="{color:$root.isjuice}" href="index.php" scroll-to="about-us">our story</a>
            </div>
            <div class="right-side">
                <a class="menu-item" ng-click="gobuy()" ng-class="{color:$root.isjuice}">buy now</a>
                <a class="menu-item" ng-click="gopaper()" ng-class="{color:$root.isjuice}">moju paper</a>
            </div>
        </div>
    </header>
    <!-- Navigation -->
    <header id="double-nav" class="desktop" ng-style="juicestyle">
        <nav class="navbar-black">
            <div class="navbar-menu menu-container">
                <a class="basket" ng-click="gobasket()">BASKET</a>
                <a target="_blank">
                    <!--<img src="/images/instagram_white.png" alt="MOJU on Instagram"> -->
                    <div class="instagram"></div>
                </a>
                <a target="_blank">
                    <!-- <img style="padding-left: 0.7vw;" src="/images/twitter_white.png" alt="MOJU on Twitter"> -->
                    <div class="twitter"></div>
                </a>
                <a target="_blank">
                    <!-- <img  style="padding-left: 0.7vw;" src="/images/facebook_white.png" alt="MOJU on Facebook"> -->
                    <div class="facebook"></div>
                </a>
            </div>
        </nav>
        <nav class="navbar-white">
            <div class="white-menu-container">
                <a href="index.php" class="logo"></a>
                <a class="menu-item" ng-click="gojuice()">the juice</a>
                <a class="menu-item " href="index.php">our story</a>
                <a class="menu-item" ng-click="gobuy()">buy now</a>
                <a class="menu-item" ng-click="gopaper()">moju paper</a>
                <!-- <div class="clear"></div> -->
            </div>
        </nav>
    </header>
    <!-- Mobile navigation -->
    <nav class="mobile">
        <a href="#!" class="menu-switch"></a>
        <a href="index.php" class="logo"></a>
    </nav>
    <nav class="drop-menu">
        <a href="#!" class="menu-close"></a>
        <div class="items">
            <a class="item" href="index.php">start</a>
            <a class="item" ng-click="gojuice()">the juice</a>
            <a class="item" href="index.php" scroll-to="about-us">our story</a>
            <a class="item" ng-click="gobuy()">buy now</a>
            <a class="item" ng-click="gopaper()">moju paper</a>
        </div>
        <div class="logo"></div>
    </nav>

    <div ui-view class="main-body"></div>

    <footer>
        <div class="footer-inner">
            <a href="index.php" class="logo"></a>
            <div class="kale"></div>
            <div class="boil"></div>
            <div class="phone"></div>
            <div class="right-box">
                <div class="socials">
                    <div class="links">
                        <a target="_blank">
                            <img src="./assets/images/g_black.png" alt="MOJU on Google+">
                        </a>
                        <a target="_blank">
                            <img src="./assets/images/twitter_black.png" alt="MOJU on Twitter">
                        </a>
                        <a target="_blank">
                            <img src="./assets/images/facebook_black.png" alt="MOJU on Facebook">
                        </a>
                        <a target="_blank" style="margin-left: 0;">
                            <img src="./assets/images/instagram_black.png" alt="MOJU on Instagram">
                        </a>
                    </div>
                    <div id="newsletter-container" class="form">
                        <input id="newsletter-email" placeholder="Email address" value="" autocomplete="off">
                        <button id="newsletter-button">SUBMIT</button>
                    </div>
                    <p class="mail-info">Sign up for breaking juice news, celebrity juice and juice forecasts.</p>
                    <p class="mail-error"></p>
                </div>
                <div class="menu">
                    <div class="item right">contact us</div>
                    <div class="stuff">
                        <div class="block first">
                            <p class="title">address</p>
                            <p>7 Tanners Yard</p>
                            <p>London, E2 6QB</p>
                        </div>
                        <div class="block">
                            <p class="title">phone</p>
                            <p>020 <span id="phone"></span> 8049</p>
                        </div>
                        <div class="block last">
                            <p class="title">email</p>
                            <b>General Enquiries:</b>
                            <p><a href="#"><span id="email"></span>@mojudrinks.com</a></p>
                            <b>Press Enquiries:</b>
                            <p><a href="#"><span id="emailPressed"></span>@mojudrinks.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="copy">&copy; Moju <span id="page-year"></span></p>
        </div>
    </footer>
    <!--SCRIPTS-->
    <script src="./assets/js/dependencies/jquery.min.js"></script>
    <script src="./assets/js/dependencies/jquery-ui.min.js"></script>
    <script src="./assets/js/dependencies/bootstrap.min.js"></script>
    <script src="./assets/js/dependencies/classie.js"></script>
    <script src="./assets/js/dependencies/jquery.waypoints.min.js"></script>
    <script src="./assets/js/parallax.js"></script>
    <script src="./assets/js/instafeed.min.js"></script>
    <script src="./assets/js/interactions.js"></script>
    <!--SCRIPTS END-->
    <script src="./assets/js/homepage.js"></script>
    <script>
    // (function(i, s, o, g, r, a, m) {
    //     i['GoogleAnalyticsObject'] = r;
    //     i[r] = i[r] || function() {
    //         (i[r].q = i[r].q || []).push(arguments)
    //     }, i[r].l = 1 * new Date();
    //     a = s.createElement(o),
    //         m = s.getElementsByTagName(o)[0];
    //     a.async = 1;
    //     a.src = g;
    //     m.parentNode.insertBefore(a, m)
    // })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    // ga('create', 'UA-18434824-6', 'auto');
    // ga('send', 'pageview');
    </script>
</body>
<!-- Mirrored from www.mojudrinks.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2016 01:52:18 GMT -->

</html>
