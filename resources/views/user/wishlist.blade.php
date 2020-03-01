@extends('layouts.master')

@section('title', 'Лист желаний')

@section('content')

<section class="cart-area pt-2 pb-2">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive p-3 mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="cart-title">Product</th>
                            <th scope="col" class="cart-title">Price</th>
                            <th scope="col" class="cart-title">Quantity</th>
                            <th scope="col" class="cart-title">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="./img/1.jpg" alt="" class="cart-image" />
                                    </div>
                                    <div class="media-body">
                                        <p class="cart-text">Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5 class="cart-title">$360.00</h5>
                            </td>
                            <td>
                                <div class="product_count">

                                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                    <input class="input-number" type="text" value="1" min="0" max="10">
                                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                </div>
                            </td>
                            <td>
                                <h5 class="cart-title">$720.00</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="./img/1.jpg" alt="" class="cart-image" />
                                    </div>
                                    <div class="media-body">
                                        <p class="cart-text">Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5 class="cart-title">$360.00</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                    <input class="input-number" type="text" value="1" min="0" max="10">
                                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                </div>
                            </td>
                            <td>
                                <h5 class="cart-title">$720.00</h5>
                            </td>
                        </tr>
                        <tr class="bottom_button">
                            <td>
                                <a class="secondary-btn" href="#">Update Cart</a>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex flex-row flex-wrap">
                    <button class="main-btn mb-3 mr-1 ml-1">Continue Shopping</button>
                    <button class="main-btn mb-3  mr-1 ml-1">Proceed to checkout</button>
                </div>
            </div>
        </div>
</section>
@endsection