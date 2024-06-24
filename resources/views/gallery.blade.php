<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Boto | Photography HTML Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Boto Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/fresco.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3 order-2 order-sm-1">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
                    <a href="./" class="site-logo">
                        <img src="http://localhost:9000/image/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4 col-md-3 order-3 order-sm-3">
                    <div class="header__switches">
                        <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                        <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <nav class="main__menu">
                <ul class="nav__menu">
                    <li><a href="./">Home</a></li>
                    <li><a href="./about">About</a></li>
                    <li><a href="./gallery" class="menu--active">Gallery</a></li>
                    <li><a href="./blog">Blog</a>
                        <ul class="sub__menu">
                            <li><a href="./blog-single">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="./contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header Section end -->

    <!-- About Page -->
    <div class="gallery__page">
        <div class="gallery__warp">
            <div class="row">
                @foreach ($images as $i)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a class="gallery__item fresco"
                            href="http://localhost:9000/image/img/gallery/{{ $i->image }}"
                            data-fresco-group="gallery">
                            <img src="http://localhost:9000/image/img/gallery/{{ $i->image }}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Page end -->

    <!-- Footer Section -->
    <footer class="footer__section">
        <div class="container">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section end -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/fresco.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>