<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Базар Маркет: @yield('title')</title>
    <link rel="stylesheet" href="/css/style.bundle.css" />
    <link rel="icon" href="/favicon/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon/favicon.svg" type="image/x-icon" />
</head>

<body>
    <header class="header">
        <div class="top-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12  col-sm-12">
                        <div class="d-flex flex-row justify-content-center">
                            <h6 class="header-link">Order online before 10am for same day delivery Monday to Friday - or visit us 7 days a
                                week at The Fresh Market, Greerton</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-info-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12  col-sm-12">
                        <div class="d-flex justify-content-between">
                            <div class="logo d-flex flex-row">
                                <a href="{{ route('home') }}"><img src="./images/logo.svg" alt="" class="logo-img"></a>  
                                <a href="{{ route('home') }}"><img src="./images/logo1.svg" alt="" class="logo-img"></a>
                                <a href="{{ route('home') }}"><img src="./images/logo2.svg" alt="" class="logo-img"></a>
                            </div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link top-info-banner-link" href="#"><i class="fas fa-map-marker-alt"></i> 1000 Cameron Road
                                        Gate Pa Tauranga 3112</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-info-banner-link" href="#"><i class="fas fa-phone-volume"></i> 07 578 6790</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-info-banner-link" href="#"><i class="far fa-user-circle"></i> Sign in or
                                        Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsTopNav"
                aria-controls="navbarsTopNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsTopNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="{{ route('home') }}"> HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="#"> STORE TRADING HOURS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="{{ route('shop') }}">SHOP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle top-bar__header-link" id="dropdownTopNav" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">ALL PRODUCTS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownTopNav">
                            <a class="dropdown-item top-bar__header-link" href="#">Bread</a>
                            <a class="dropdown-item top-bar__header-link" href="#">Fruit - All</a>
                            <a class="dropdown-item top-bar__header-link" href="#">Herbs & Sprouts</a>
                            <a class="dropdown-item top-bar__header-link" href="#">Milk</a>
                            <a class="dropdown-item top-bar__header-link" href="#">Fruit</a>
                            <a class="dropdown-item top-bar__header-link" href="#">Vegetables</a>
                            <a class="dropdown-item top-bar__header-link" href="#">Sundries</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="{{ route('cart') }}">CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="{{ route('checkout') }}">CHECKOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="#">NEW HERE?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="#">SHOPPING GUIDE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="{{ route('blog') }}">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top-bar__header-link" href="{{ route('contact') }}">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

      @yield('content')

    <footer class="footer">
        <section class="subscribe-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h3 class="footer-subscribe-title">SUBSCRIBE TO OUR NEWSLETTER</h3>
                        <a class="footer-subscribe-text text-right" href="">Get the latest updates on new products and upcoming sales</a>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <form class="d-flex justify-content-end">
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="Your Email Address">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="main-btn p-1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__middle-bar pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="logo d-flex flex-row">
                          <a href="{{ route('home') }}"><img src="./images/logo.svg" alt="" class="footer-logo"></a>  
                          <a href="{{ route('home') }}"><img src="./images/logo1.svg" alt="" class="footer-logo"></a>
                          <a href="{{ route('home') }}"><img src="./images/logo.svg" alt="" class="footer-logo"></a>  
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#"><i class="fas fa-map-marker-alt"></i> 1000 Cameron Road<br>
                                    Gate Pa<br>
                                    Tauranga 3112<br></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#"><i class="fas fa-phone-volume"></i>Call us at 07 578
                                    6790</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <h4 class="footer-nav-title">Brands</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">View All</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <h4 class="footer-nav-title">Navigate</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Store Trading Hours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Delivery Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">About our Store</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">New Here?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Shopping Guide</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Sitemap</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <h4 class="footer-nav-title">Categories</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Bread</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Fruit - All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Herbs & Sprouts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Milk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Fruit</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                       
                        <p class="footer-bottom-title">&copy; 2020 My Greengrocer</p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="d-flex justify-content-end pt-3">
                            <i class="fab fa-cc-visa fa-2x p-1"></i> <i class="fab fa-cc-paypal fa-2x p-1"></i> <i
                                class="fab fa-cc-mastercard fa-2x p-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="/js/bundle.js"></script>
</body>

</html>