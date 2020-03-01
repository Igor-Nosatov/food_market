@extends('layouts.master')

@section('title', 'Страница покупок')

@section('content')
<section class="shop-area  pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-3">
          <aside class="shop-sidebar">
            <section class="shop-category pb-2">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Mountain Bikes<span class="product-qty">(23)</span></a></li>
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Road Bikes<span class="product-qty">(23)</span></a></li>
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Cyclocross & Gravel Bikes<span
                      class="product-qty">(23)</span></a></li>
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Time Trial & Triathlon Bikes<span
                      class="product-qty">(23)</span></a></li>
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Commuter & Urban Bikes<span
                      class="product-qty">(23)</span></a></li>
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Kids Bikes<span class="product-qty">(23)</span></a></li>
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Electric Bikes<span class="product-qty">(23)</span></a></li>
                <li class="nav-item">
                  <a class="nav-link sidebar-link" href="#">Time Ex-Demo Bikes<span class="product-qty">(23)</span></a>
                </li>
              </ul>
            </section>
            <section class="shop-brand pb-2">
              <h3 class="sidebar-title">Brands</h3>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand1">
                <label class="custom-control-label sidebar-link" for="brand1">Bianchi<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand2">
                <label class="custom-control-label sidebar-link" for="brand2">Diamondback<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand3">
                <label class="custom-control-label sidebar-link" for="brand3">Ducati<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand4">
                <label class="custom-control-label sidebar-link" for="brand4">Felt<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand5">
                <label class="custom-control-label sidebar-link" for="brand5">Lapierre<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand6">
                <label class="custom-control-label sidebar-link" for="brand6">Marin<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand7">
                <label class="custom-control-label sidebar-link" for="brand7">Merlin<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand8">
                <label class="custom-control-label sidebar-link" for="brand8">Ridley Bikes<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand9">
                <label class="custom-control-label sidebar-link" for="brand9">Sensa<span
                    class="product-qty">(23)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="brand10">
                <label class="custom-control-label sidebar-link" for="brand10">Wilier<span
                    class="product-qty">(23)</span></label></div>
            </section>
            <section class="shop-material">
              <h3 class="sidebar-title">Material</h3>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="powerType1">
                <label class="custom-control-label  sidebar-link" for="powerType1">Aluminium <span
                    class="product-qty">(41)</span></label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="powerType2">
                <label class="custom-control-label  sidebar-link" for="powerType2">Carbon<span
                    class="product-qty">(41)</span></label></div>
            </section>
            <section class="shop-price-filter">
              <h3 class="sidebar-title">Price Filter</h3>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price1">
                <label class="custom-control-label sidebar-link" for="price1">₴0.00 - ₴9.992</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price2">
                <label class="custom-control-label sidebar-link" for="price2">₴10.00 - ₴19.9915</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price3">
                <label class="custom-control-label sidebar-link" for="price3">₴20.00 - ₴29.9924</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price4">
                <label class="custom-control-label sidebar-link" for="price4">₴30.00 - ₴39.9929</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price5">
                <label class="custom-control-label sidebar-link" for="price5">₴40.00 - ₴49.9927</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price6">
                <label class="custom-control-label sidebar-link" for="price6">₴50.00 - ₴74.9945</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price7">
                <label class="custom-control-label sidebar-link" for="price7">₴75.00 - ₴99.9937</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price8">
                <label class="custom-control-label sidebar-link" for="price8">₴100.00 - ₴249.9962</label></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="price9">
                <label class="custom-control-label sidebar-link" for="price9">₴250.00 - ₴499.993</label></div>
            </section>
            <section class="shop-rating">
              <h3 class="sidebar-title">Rating</h3>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="star1">
                <label class="custom-control-label  sidebar-link" for="star1">
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="star2">
                <label class="custom-control-label  sidebar-link" for="star2">
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="star3">
                <label class="custom-control-label  sidebar-link" for="star3">
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                  <span class="star"><i class="fas fa-star"></i></span>
                </label>
              </div>
            </section>
          </aside>
        </div>
        <div class="col-sm-12 col-lg-9">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <div class="dropdown pt-3 pb-5">
                <button class="main-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Filter By
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Featured Items</a>
                  <a class="dropdown-item" href="#">Newst Items</a>
                  <a class="dropdown-item" href="#">Best Selling</a>
                  <a class="dropdown-item" href="#">By review</a>
                  <a class="dropdown-item" href="#">Price: max to min</a>
                  <a class="dropdown-item" href="#">Price: min to max</a>
                  <a class="dropdown-item" href="#">A to Z</a>
                  <a class="dropdown-item" href="#">Z to A</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          @include('layouts.card')
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-sm-12 col-lg-4">
              <nav aria-label="Page navigation">
                <ul class="pagination mt-5">
                  <li class="page-item "><a class="page-link pagination-link " href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link pagination-link " href="#">1</a></li>
                  <li class="page-item"><a class="page-link pagination-link " href="#">2</a></li>
                  <li class="page-item"><a class="page-link pagination-link " href="#">3</a></li>
                  <li class="page-item"><a class="page-link pagination-link " href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
    </div>
  </section>

@endsection