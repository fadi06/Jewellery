@extends('layouts.layout')

@section('content')
<div id="wrapper">
  <!--page heading-->
  <section>
    <div class="inner-bg">
      <div class="inner-head wow fadeInDown">
        <h3>Product Detail</h3>
      </div>
    </div>
  </section>
  <!--page heading-->
  <!--container-->
  <div class="container">
    <div class="shop-in">
      <div class="col-md-12">
        <!--breadcrumbs -->
        <div class="bread2">
          <ul>
            <li><a href="/">HOME</a></li>
            <li>/</li>
            <li><a href="products">SHOP</a></li>
            <li>/</li>
            <li>Product Detail</li>
          </ul>
        </div>
        <!--breadcrumbs -->
      </div>
      <div class="clearfix"> </div>
      <!--Left side -->
      <div class="col-md-3 col-sm-3 div-none2 wow fadeInLeft">
        <div class="cat-div">
          <div class="col-md-4 col-sm-4 col-xs-4"><img src="public/assets/images/delivery-truck.svg" width="46" alt="" title=""></div>
          <div class="col-md-8 col-sm-8 col-xs-4 icon-div">
            <h4>Free Delivery</h4>
            <p>from $50 </p>
          </div>
          <div class="clearfix"></div>
          <hr>
          <div class="col-md-4 col-sm-4 col-xs-4"><img src="public/assets/images/supermarket.svg" width="46"  alt="" title=""></div>
          <div class="col-md-8 col-sm-8 col-xs-8 icon-div">
            <h4>99 % Customer</h4>
            <p>from $50 </p>
          </div>
          <div class="clearfix"></div>
          <hr>
          <div class="col-md-4 col-sm-4"><img src="public/assets/images/reuse.svg" width="46"  alt=""  title=""></div>
          <div class="col-md-8 col-sm-8 icon-div">
            <h4>6 Days</h4>
            <p>from $50 </p>
          </div>
          <div class="clearfix"></div>
          <hr>
          <div class="clearfix"></div>
          <div class="col-md-4 col-sm-4 col-xs-4"><img src="public/assets/images/checked.svg" width="46"  alt="" title=""></div>
          <div class="col-md-8 col-sm-8 col-xs-8 icon-div">
            <h4>Payment</h4>
            <p>from $50 </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="cat-div">
          <h2>Related Products</h2>
          <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="product-scroll">
                  <div class="col-md-6 col-sm-3 col-xs-6"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                  <div class="col-md-6 col-sm-9 col-xs-6"> <h3>Product name</h3>
                    <div> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                    <h4>$600.00</h4>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-scroll">
                  <div class="col-md-6 col-sm-3 col-xs-6"><img src="public/assets/images/scroll-2.jpg" class="img-responsive" alt="" title=""></div>
                  <div class="col-md-6 col-sm-9 col-xs-6"> <h3>Product name</h3>
                    <div> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                    <h4>$600.00</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-scroll">
                  <div class="col-md-6 col-sm-3 col-xs-6"><img src="public/assets/images/scroll-2.jpg" class="img-responsive" alt="" title=""></div>
                  <div class="col-md-6 col-sm-9 col-xs-6"> <h3>Product name</h3>
                    <div> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                    <h4>$600.00</h4>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-scroll">
                  <div class="col-md-6 col-sm-3 col-xs-6"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                  <div class="col-md-6 col-sm-9 col-xs-6"> <h3>Product name</h3>
                    <div><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                    <h4>$600.00</h4>
                  </div>
                </div>
              </div>
            </div>
            <!-- Controls -->
            <a class="left arrow-left" href="#carousel-example-generic2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right arrow-right" href="#carousel-example-generic2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
        </div>
      </div>
      <!--right side -->
      <div class="col-md-9 div-left wow fadeInRight">
        <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1015px;padding-left:0px; padding-right:175px;margin:0;">
          <div id="amazingslider-1">
            <ul class="amazingslider-slides">
              <li><img src="public/assets/images/img-1.jpg"  alt="" title="" /></li>
              <li><img src="public/assets/images/img-2.jpg"  alt="" title=""  /> </li>
              <li><img src="public/assets/images/img-1.jpg"  alt="" title="" /> </li>
              <li><img src="public/assets/images/img-2.jpg"  alt="" title="" /> </li>
            </ul>
            <ul class="amazingslider-thumbnails">
              <li><img src="public/assets/images/img-1-tn.jpg"  alt="" title="" /></li>
              <li><img src="public/assets/images/img-2-tn.jpg"   alt="" title="" /></li>
              <li><img src="public/assets/images/img-1-tn.jpg"   alt="" title="" /></li>
              <li><img src="public/assets/images/img-2-tn.jpg"  alt="" title=""  /></li>
            </ul>
            <div class="amazingslider-engine"><a href="http://amazingslider.com/" title="Responsive jQuery Content Slider">Responsive jQuery Content Slider</a></div>
          </div>
          <div class="clearfix">&nbsp;</div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="price-2">
          <ul>
            <li class="tab1">PRICE: <span>$ 950.00</span></li>
            <li><a href="cart">ADD TO CART </a></li>
          </ul>
        </div>
        <div class="share-icon"> <i class="fa fa-share-alt" aria-hidden="true"></i><br>
          SHARE </div>
        <div class="socialmedia">
          <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa fa-timblr" aria-hidden="true"> <strong class="tcss">t</strong> </i></a></li>
          </ul>
        </div>
        <div class="read-full">
          <ul>
            <li><a data-toggle="collapse" data-target="#demo"> <span>Read full specs</span> </a></li>
            <li><a data-toggle="collapse" data-target="#demo"><img src="public/assets/images/products/arrow.jpg" alt="" title=""></a> </li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <div id="demo" class="collapse">
          <div class="inner-div">
            <div class="col-md-6 col-sm-6 list-div">
              <h2>Specification</h2>
              <ul>
                <li>
                  <div class="col-md-2 col-sm-2 col-xs-2"> <img src="public/assets/images/products/icon1.jpg" alt="" title=""> </div>
                  <div class="col-md-10 col-sm-10 col-xs-10"> Neque porro quisquam est qui dolorem ipsum quia
                    dolor sit amet, consectetur, adipisci velit.</div>
                </li>
                <li>
                  <div class="col-md-2 col-sm-2 col-xs-2"> <img src="public/assets/images/products/icon2.jpg"  alt="" title=""> </div>
                  <div class="col-md-10 col-sm-10 col-xs-10"> Neque porro quisquam est qui dolorem ipsum quia
                    dolor sit amet, consectetur, adipisci velit.</div>
                </li>
                <li>
                  <div class="col-md-2 col-sm-2 col-xs-2"> <img src="public/assets/images/products/icon3.jpg"  alt="" title=""> </div>
                  <div class="col-md-10 col-sm-10 col-xs-10"> Neque porro quisquam est qui dolorem ipsum quia
                    dolor sit amet, consectetur, adipisci velit.</div>
                </li>
                <li>
                  <div class="col-md-2 col-sm-2 col-xs-2"> <img src="public/assets/images/products/icon4.jpg"  alt="" title=""> </div>
                  <div class="col-md-10 col-sm-10 col-xs-10"> Neque porro quisquam est qui dolorem ipsum quia
                    dolor sit amet, consectetur, adipisci velit.</div>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 product-info">
              <h2>Product Information</h2>
              <h6>SKU - 12458AF6</h6>
              <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit.Neque porro quisquam est qui dolorem
                ipsum quia dolor sit amet, consectetur, adipisci velit.t amet,
                consectetur, adipisci velit.</p>
              <p><img src="public/assets/images/products/line.jpg"  alt="" title=""></p>
              <h2>Notes</h2>
              <p>Please Note: This item is HAND MADE TO ORDER and will be 
                dispatched in 2-3 weeks.</p>
              <p><img src="public/assets/images/products/line.jpg"  alt="" title=""></p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!--Left side -->
      <div class="row">
        <div class="col-md-3 col-sm-3 div-none">
          <div class="row">
            <div class="col-sm-6 wow fadeIn">
              <div class="cat-div">
                <div class="col-md-4 col-sm-4 col-xs-2"><img src="public/assets/images/delivery-truck.svg" width="46" alt="" title=""></div>
                <div class="col-md-8 col-sm-8  col-xs-10 icon-div">
                  <h4>Free Delivery</h4>
                  <p>from $50 </p>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="col-md-4 col-sm-4  col-xs-2"><img src="public/assets/images/supermarket.svg" width="46"  alt="" title=""></div>
                <div class="col-md-8 col-sm-8  col-xs-10 icon-div">
                  <h4>99 % Customer</h4>
                  <p>from $50 </p>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="col-md-4 col-sm-4  col-xs-2"><img src="public/assets/images/checked.svg" width="46"  alt="" title=""></div>
                <div class="col-md-8 col-sm-8  col-xs-10 icon-div">
                  <h4>6 Days</h4>
                  <p>from $50 </p>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-4 col-xs-2"><img src="public/assets/images/reuse.svg" width="46"  alt=""  title=""></div>
                <div class="col-md-8 col-sm-8  col-xs-10 icon-div">
                  <h4>Payment</h4>
                  <p>from $50 </p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-sm-6 wow fadeIn">
              <div class="cat-div">
                <h2>Related Products</h2>
                <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-3 col-xs-3"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                        <div class="col-md-6 col-sm-9 col-xs-9"> <h3>Product name</h3>
                          <div> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                          <h4>$600.00</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-3 col-xs-3"><img src="public/assets/images/scroll-2.jpg" class="img-responsive" alt="" title=""></div>
                        <div class="col-md-6 col-sm-9 col-xs-9"> <h3>Product name</h3>
                          <div> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                          <h4>$600.00</h4>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-3 col-xs-3"><img src="public/assets/images/scroll-2.jpg" class="img-responsive" alt="" title=""></div>
                        <div class="col-md-6 col-sm-9 col-xs-9"> <h3>Product name</h3>
                          <div> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""> <img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                          <h4>$600.00</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-3 col-xs-3"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                        <div class="col-md-6 col-sm-9 col-xs-9"><h3> Product name</h3>
                          <div><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                          <h4>$600.00</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Controls -->
                  <a class="left arrow-left" href="#carousel-example-generic3" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right arrow-right" href="#carousel-example-generic3" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
  <!--container-->

</div>

@endsection