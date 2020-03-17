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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsTopNav" aria-controls="navbarsTopNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle top-bar__header-link" id="dropdownTopNav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL PRODUCTS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownTopNav">
                            @foreach($categories as $category)
                            <a class="dropdown-item" href="#">{{ $category->name}}</a>
                            @endforeach
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
                        <a class="nav-link top-bar__header-link" href="{{ route('contact') }}">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>