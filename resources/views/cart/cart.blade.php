@extends('layouts.layout')

<!--page heading-->
@section('content')
<section>
  <div class="inner-bg">
    <div class="inner-head wow fadeInDown">
      <h3>cart</h3>
    </div>
  </div>
</section>
<!--page heading-->
<!--container-->
<div class="container">
  <div class="shop-in">
    <!--breadcrumbs -->
    <div class="bread2">
      <ul>
        <li><a href="/">HOME</a>
        <li>/</li>
        <li><a href="products">SHOP</a></li>
        <li>/</li>
        <li>cart</li>
      </ul>
    </div>
    <!--breadcrumbs -->
    <div class="clearfix"> </div>
    <!--table-->
    <div class="checkout">
      <div class="table-responsive table-none wow fadeIn">
        <table class="table checkout-table">
          <tr class="table-h">
            <td>&nbsp;</td>
            <td>ITEM Details</td>
            <td>UNIT PRICE</td>
            <td>Quantity</td>
            <td>EDIT</td>
            <td>SUBTOTAL</td>
          </tr>
          <tr>
            <td class="text-center"><img src="public/assets/images/products/checkout.jpg" alt="" title="" class="img-responsive"></td>
            <td class="product-name"><h1>Diamond Ring <br>
                <span> JE-65450</span> </h1></td>
            <td><div class="cost2">$ 3,200.65</div></td>
            <td><div class="inc-dre">
                <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                  <input name="quant[1]" class="input-number" value="1" type="text">
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
              </div></td>
            <td class="remove-css text-center"><p><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
<br>
 Remove </a> </p>
             </td>
            <td><div class="cost">$ 3,200.65</div></td>
          </tr>
          <tr>
            <td class="text-center"><img src="public/assets/images/products/checkout.jpg" alt="" class="img-responsive" title=""></td>
            <td class="product-name"><h1>Diamond Ring <br>
                <span> JE-65450</span> </h1></td>
            <td><div class="cost2">$ 3,200.65</div></td>
            <td><div class="inc-dre">
                <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                  <input name="quant[1]" class="input-number" value="1" type="text">
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
              </div></td>
            <td class="remove-css text-center"><p><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
 <br>
 Remove </a> </p></td>
            <td><div class="cost">$ 3,200.65</div></td>
          </tr>
        </table>
      </div>
      <div class="table-responsive table-none2 wow fadeIn">
        <table class="table checkout-table">
          <tr>
            <td colspan="2" class="text-center"><img src="public/assets/images/products/checkout.jpg" alt="" title="" class="img-responsive"></td>
          </tr>
          <tr class="product-name">
            <td><h1>Diamond Ring <br>
                <span> JE-65450</span> </h1></td>
            <td><div class="cost2">$ 3,200.65</div></td>
          </tr>
          <tr>
            <td><div class="inc-dre">
                <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                  <input name="quant[1]" class="input-number" value="1" type="text">
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
              </div></td>
            <td><p class="text-center"> <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i><br>Remove

</a> 

 </p>
              </td>
          </tr>
          <tr>
            <td colspan="2"><div class="cost">$ 3,200.65</div></td>
          </tr>
        </table>
        <table class="table checkout-table">
          <tr>
            <td colspan="2" class="text-center"><img src="public/assets/images/products/checkout.jpg" alt="" title="" class="img-responsive"></td>
          </tr>
          <tr class="product-name">
            <td><h1>Diamond Ring <br>
                <span> JE-65450</span> </h1></td>
            <td><div class="cost2">$ 3,200.65</div></td>
          </tr>
          <tr>
            <td><div class="inc-dre">
                <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                  <input name="quant[1]" class="input-number" value="1" type="text">
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
              </div></td>
            <td><p class="text-center"> <a href="#"> <i class="fa fa-trash-o" aria-hidden="true"></i><br>
Remove
</a> </p>
               </td>
          </tr>
          <tr>
            <td colspan="2"><div class="cost">$ 3,200.65</div></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="clearfix"></div>
    <br>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="discount-div"> <span>Discount Code?</span>
          <input type="text" class="discount">
          <input type="button" value="APPLY" class="apply">
          <div class="clearfix"></div>
          <br>
          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12 text-center"><img src="public/assets/images/products/icon.png" alt="" title="" class="img-responsive"></div>
            <div class="col-md-10 shipping col-sm-10 col-xs-12">
              <h3>Always Free! - Ground Shipping & Returns</h3>
              <h4>Expedited shipping options available at checkout</h4>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4 col-sm-4 pull-right ">
        <div class="subtotal">
          <div class="secure"> 
          	<a href="checkOut"> Update <i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
          	<a href="checkOut">CHECKOUT</a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="clearfix"></div>
  </div>
  <!--table-->
  <div class="clearfix"></div>
</div>

@endsection