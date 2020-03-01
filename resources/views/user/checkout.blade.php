@extends('layouts.master')

@section('title', 'Страница оплаты')

@section('content')
<section class="checkout-area  pt-2 pb-2">
        <div class="container">
            <div class="returning_customer pt-5">
              <div class="check_title">
                <h2  class="title-form">
                  Returning Customer?
                </h2>
              </div>
              <p>
                If you have shopped with us before, please enter your details in the
                boxes below. If you are a new customer, please proceed to the
                Billing & Shipping section.
              </p>
              <form class="row contact_form" action="#" method="post">
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="name" name="name"  placeholder="Username or Email" required/>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
                  <span class="placeholder" data-placeholder="Password"></span>
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" value="submit" class="main-btn">
                    Log In
                  </button>
                </div>
              </form>
            </div>
      
            <div class="billing_details pb-5">
              <div class="row">
                <div class="col-lg-8">
                  <h3 class="title-form pt-5">Billing Details</h3>
                  <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="first" name="name" placeholder="First name" required/>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="last" name="name"  placeholder="Last name" required/>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="company" name="company" placeholder="Company name" required/>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="number" name="number"  placeholder="Phone number" required/>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="email" name="compemailany"  placeholder="Email Address" required/>
                    </div>
                    <div class="col-md-12 form-group p_star">
                      <select class="country_select main-btn">
                        <option value="1">Country</option>
                        <option value="2">Country</option>
                        <option value="4">Country</option>
                      </select>
                    </div>
                    <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="add1" name="add1"  placeholder="Address" required/>
                    </div>
                    <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="city" name="city"  placeholder="Town/City" required/>
                    </div>
                    <div class="col-md-12 form-group p_star">
                      <select class="country_select main-btn">
                        <option value="1">District</option>
                        <option value="2">District</option>
                        <option value="4">District</option>
                      </select>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
                    </div>
                    <div class="col-md-12 form-group">
                      <div class="creat_account">
                        <input type="checkbox" id="f-option2" name="selector" />
                        <label for="f-option2">Create an account?</label>
                      </div>
                    </div>
                    <div class="col-md-12 form-group">
                      <div class="creat_account">
                        <h3 class="title-form">Shipping Details</h3>
                        <input type="checkbox" id="f-option3" name="selector" />
                        <label for="f-option3">Ship to a different address?</label>
                      </div>
                      <textarea class="form-control" name="message" id="message" rows="7" placeholder="Order Notes"></textarea>
                    </div>
                  </form>
                </div>
                <div class="col-lg-4">
                  <div class="order_box">
                    <h2  class="title-form pt-5">Your Order</h2>
                    <ul class="list">
                      <li>
                        <a href="#">Product
                          <span>Total</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Fresh Blackberry
                          <span class="middle">x 02</span>
                          <span class="last">$720.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Fresh Tomatoes
                          <span class="middle">x 02</span>
                          <span class="last">$720.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Fresh Brocoli
                          <span class="middle">x 02</span>
                          <span class="last">$720.00</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="list list_2">
                      <li>
                        <a href="#">Subtotal
                          <span>$2160.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Shipping
                          <span>Flat rate: $50.00</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">Total
                          <span>$2210.00</span>
                        </a>
                      </li>
                    </ul>
                    <div class="payment_item">
                      <div class="radion_btn">
                        <input type="radio" id="f-option5" name="selector" />
                        <label for="f-option5">Check payments</label>
                        <div class="check"></div>
                      </div>
                      <p>
                        Please send a check to Store Name, Store Street, Store Town,
                        Store State / County, Store Postcode.
                      </p>
                    </div>
                    <div class="payment_item active">
                      <div class="radion_btn">
                        <input type="radio" id="f-option6" name="selector" />
                        <label for="f-option6">Paypal </label>
                        <img src="img/product/single-product/card.jpg" alt="" />
                        <div class="check"></div>
                      </div>
                      <p>
                        Please send a check to Store Name, Store Street, Store Town,
                        Store State / County, Store Postcode.
                      </p>
                    </div>
                    <div class="creat_account">
                      <input type="checkbox" id="f-option4" name="selector" />
                      <label for="f-option4">I’ve read and accept the </label>
                      <a href="#">terms & conditions*</a>
                    </div>
                    <a class="main-btn" href="#">Proceed to Paypal</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

@endsection