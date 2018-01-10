@extends('layouts.layout')

@section('content')

    <div id="wrapper">
      <!--page heading-->
      <section>
        <div class="inner-bg">
          <div class="inner-head wow fadeInDown">
            <h3>thank you</h3>
          </div>
        </div>
      </section>
      <!--page heading-->
      <!--container-->
      <div class="container">
        <div class="shop-in">
          <div>
            <div class="bread2">
              <ul>
                <li><a href="/">HOME</a>
                <li>/</li>
                <li><a href="products">SHOP</a></li>
                <li>/</li>
                <li>Thank you</li>
              </ul>
            </div>
          </div>
          <div class="clearfix"> </div>
          <div class="thanks-bg">
            <div class="thanks-img wow fadeIn"><img src="public/assets/images/products/thanks.png" alt="" title="" class="img-responsive"></div>
            <div class="thanks-text">
              <h2 class="wow fadeIn">For Purchasing our product</h2>
              <h3 class="wow fadeIn">Order details are sent to your registered email</h3>
              <div><a href="/" class="wow fadeInLeft">Back to Home page</a> <a href="products" class="wow fadeInRight">Continue shopping</a> </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!--container-->
      <div class="clearfix"></div>      
    </div>

@endsection
