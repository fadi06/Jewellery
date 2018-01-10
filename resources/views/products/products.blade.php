@extends('layouts.layout')

@section('content')
  <section>
    <div class="inner-bg">
      <div class="inner-head wow fadeInDown">
        <h3>Product</h3>
      </div>
    </div>
  </section>
  <!--container-->
  <div class="container">
    <div class="shop-in">
      <!--breadcrumbs -->
      <div class="col-md-12">
        <div class="bread2">
          <ul>
            <li><a href="/">HOME</a>
            <li>/</li>
            <li>SHOP</li>
          </ul>
        </div>
      </div>
      <div class="clearfix"> </div>
      <!--left-side-->
      <div class="col-md-3">
        <button data-toggle="collapse" data-target="#div-open" class="menu-icon"></button>
        <div class="clearfix"></div>
        <div id="div-open" class="collapse  wow fadeIn">
          <div class="row">
            <div class="col-md-12 col-sm-6">
              <div class="cat-div  wow fadeIn">
                <h2>Category</h2>
                <div class="Category">
                  <ul>
                    <li>
                      <label>
                      <input  type="checkbox" value="">
                      Pendent</label>
                    </li>
                    <li>
                      <label>
                      <input  type="checkbox" value="">
                      Earring</label>
                    </li>
                    <li>
                      <label>
                      <input  type="checkbox" value="">
                      Necklaces</label>
                    </li>
                    <li>
                      <label>
                      <input  type="checkbox" value="">
                      Bracelets</label>
                    </li>
                    <li>
                      <label>
                      <input  type="checkbox" value="">
                      Bangles</label>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-6">
              <div class="cat-div  wow fadeIn">
                <h2>HOT DEALS</h2>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active text-center">
                      <div class="row">
                        <div class="col-md-12 col-sm-5"><img alt="" title="" src="public/assets/images/left-product.jpg" class="img-responsive"></div>
                        <div class="col-md-12 col-sm-7">
                          <div class="no-div">
                            <ul>
                              <li>
                                <h5>120</h5>
                                <span>Days </span> </li>
                              <li>
                                <h5>20</h5>
                                <span>HRS</span> </li>
                              <li>
                                <h5>36</h5>
                                <span>MINS</span> </li>
                              <li>
                                <h5>60</h5>
                                <span>Sec</span> </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="product-name">
                            <h3>Jewellery Name</h3>
                          </div>
                          <div class="rate-css"><span>$600.00</span>&nbsp;&nbsp; <samp class="text-de">$850.00</samp></div>
                          <div><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="item  text-center">
                      <div class="row">
                        <div class="col-md-12 col-sm-5"><img alt="" title="" src="public/assets/images/left-product.jpg" class="img-responsive"></div>
                        <div class="col-md-12 col-sm-7">
                          <div class="no-div">
                            <ul>
                              <li>
                                <h5>120</h5>
                                <span>Days </span> </li>
                              <li>
                                <h5>20</h5>
                                <span>HRS</span> </li>
                              <li>
                                <h5>36</h5>
                                <span>MINS</span> </li>
                              <li>
                                <h5>60</h5>
                                <span>Sec</span> </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="product-name">
                            <h3>Jewellery Name</h3>
                          </div>
                          <div class="rate-css"><span>$600.00</span>&nbsp;&nbsp; <samp class="text-de">$850.00</samp></div>
                          <div><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Controls -->
                  <a class="left arrow-left" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right arrow-right" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-6">
              <div class="cat-div  wow fadeIn">
                <h2>Special offers</h2>
                <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-6 col-xs-3"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                        <div class="col-md-6 col-sm-6 col-xs-9">
                          <h3>Product name</h3>
                          <div><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                          <h4>$600.00</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-6 col-xs-3"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                        <div class="col-md-6 col-sm-6 col-xs-9">
                          <h3>Product name</h3>
                          <div><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                          <h4>$600.00</h4>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-6 col-xs-3"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                        <div class="col-md-6 col-sm-6 col-xs-9">
                          <h3>Product name</h3>
                          <div><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str1.jpg" alt="" title=""><img src="public/assets/images/str2.jpg" alt="" title=""></div>
                          <h4>$600.00</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="product-scroll">
                        <div class="col-md-6 col-sm-6 col-xs-3"><img src="public/assets/images/scroll-2.jpg" alt="" title="" class="img-responsive"></div>
                        <div class="col-md-6 col-sm-6 col-xs-9">
                          <h3>Product name</h3>
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
            <div class="col-md-12 col-sm-6">
              <div class="cat-div  wow fadeIn">
                <h2>Download our app</h2>
                <div class="download-our"><a href="#"><img src="public/assets/images/app.png" alt="" title="" class="img-responsive"></a>&nbsp;<a href="#"><img src="public/assets/images/google-play.png" alt="" title="" class="img-responsive"></a> </div>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <!--right-side-->
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6 select-p">
            <select class="selectpicker select-1" data-style="btn-primary">
              <option>Newest first</option>
              <option>Newest first</option>
              <option>Newest first</option>
            </select>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 bread">
            <div class="breadcrumbs">
              <ul>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product1.jpg" alt="" title="" class="img-responsive img-boder-css"></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00 </span>&nbsp;<span class="text-0">$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product2.jpg" alt="" title="" class="img-responsive img-boder-css"></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img alt="" title="" src="public/assets/images/products/str2.jpg"> <img alt="" title="" src="public/assets/images/products/str3.jpg"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg  wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assetss/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product3.jpg" class="img-responsive img-boder-css" alt="" title=""></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg  wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product4.jpg" class="img-responsive img-boder-css" alt="" title=""></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg  wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product5.jpg" class="img-responsive img-boder-css" alt="" title=""></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg  wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product6.jpg" class="img-responsive img-boder-css" alt="" title=""></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg  wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product7.jpg" class="img-responsive img-boder-css" alt="" title=""></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg  wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product8.jpg" class="img-responsive img-boder-css" alt="" title=""></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 thum-mrg  wow fadeIn">
            <div class="col-lg-12 padd0">
              <div class="product-hover">
                <div><a href="productDetail"> <img src="public/assets/images/magnifier.svg" width="20" height="20"></a> &nbsp;&nbsp; <a href="cart"> <img src="public/assets/images/add-to-cart.svg"  width="25" height="25"></a></div>
              </div>
              <div><img src="public/assets/images/products/product9.jpg" class="img-responsive img-boder-css" alt="" title=""></div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
              <div class="col-md-6 col-sm-6 text-right"><img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str2.jpg" alt="" title=""> <img src="public/assets/images/products/str3.jpg" alt="" title=""></div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="breadcrumbs">
          <ul>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">></a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
@endsection