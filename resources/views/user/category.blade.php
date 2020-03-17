@extends('layouts.master')

@section('title', 'Страница покупок')

@section('content')
<section class="shop-area  pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                @include('partials.aside_menu')
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
                    @foreach($category->products as $product)
                    @include('partials.card', compact('product'))
                    @endforeach
                </div>
                <div class="row pt-5">
                    <div class="col-sm-12 col-lg-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection