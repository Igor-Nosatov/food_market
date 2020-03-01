@extends('layouts.master')

@section('title', 'Главная страница')

@section('content')

<section class="carousel-banner pt-2 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="carouselBannerCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselBannerCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselBannerCaptions" data-slide-to="1"></li>
            <li data-target="#carouselBannerCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./images/banner1.jpeg" class="carousel-image" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="banner-title">Free On delivery <br>
                  Orders Over $100</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/banner2.jpeg" class="carousel-image" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="banner-title">Free On delivery <br>
                  Orders Over $100</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/banner3.jpeg" class="carousel-image" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="banner-title">Free On delivery <br>
                  Orders Over $100</h2>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselBannerCaptions" role="button" data-slide="prev">
            <img src="./images/left.svg" alt="" class="carousel-arrow">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselBannerCaptions" role="button" data-slide="next">
            <img src="./images/right.svg" alt="" class="carousel-arrow">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="feature-product  pb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <h2 class="text-left">Feature Product</h2>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center ">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="banner pt-2  pb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="promo">
          <h2 class="pt-5 text-center banner-title">Овощи – слава докторов и гордость поваров</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="all-product display-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <h2 class="text-left">Fruits Product</h2>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="all-product display-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <h2 class="text-left">Bread Product</h2>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="./images/app.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-center">
              Apples - New Season Royal Gala (NZ) - per kg</h6>
            <h4 class="card-price">₴ 12</h4>
            <a href="#" class="main-btn p-1">Add To Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="banner pt-4 pb-4 display-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="promo">
          <h2 class="pt-5 text-center promo-title">Овощи – слава докторов и гордость поваров <br>
            Овощи видно по рассаде, человека с детства</h2>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection