@extends('layouts.app')
@section('content')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<style>
          hr {
        width: 100%;
        height: 30px;
        margin-left: auto;
        margin-right: auto;
        background-color: orange;
        border: 0 none;
      }
      span {
      content: "\2713";
}
.required{
  color: red;
}
</style>
    <div class="container clearfix">
        <h1 class="title-page">CHECKOUT</h1>
    </div>
    <br>
<section class="section-content bg padding-y" style="height:50%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if (Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
            </div>
        </div>
        <form action="{{route('orders.store')}}" method="POST" role="form">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <article class="card-body">
                            <h1 ><i class="fa fa-info" aria-hidden="true"></i> Details</h1>
                            <br>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Name</label>
                                    <span class="required">*</span>
                                    <input type="text" name="shipping_fullname" id="" class="form-control">
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <span class="required">*</span>
                                <input type="text" name="shipping_address" id="" class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" name="shipping_city" id="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <input type="text" name="shipping_state" id="" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                    <label>Post Code</label>
                                    <input type="number" name="shipping_zipcode" id="" class="form-control">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label>Phone Number</label>
                                    <span class="required">*</span>
                                    <input type="text" class="form-control" name="shipping_phone">
                                </div>
                            </div>

                                <h1><i class="fa fa-money" aria-hidden="true"></i> Payment Methods</h1>
                                <br>
                                <h5>Pay With M-Pesa</h5>
                                <div class="form-row">
                                <hr/>
                                  <br>
                                <img src="https://sokodirectory.com/wp-content/uploads/2015/11/m-pesa.png"  style="height:90px; width:600px" alt="">

                                <div class="form-row">
                                    <br>
                                    <h6><span>&#10003;</span>Input Your Phone Number For M-Pesa Prompt Message</h6>
                               </div>
                                 <div class="form-row">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="shipping_phone">
                                 </div>
                         </div>
                               <br>
                               <div class="form-row">
                                   <h6><span>&#10003;</span>To Pay <br><br><b>Amoumt:</b> {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }}  <br><br><b>Item:</b></h6>
                               </div>
                               <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block"> <b>Pay : </b> {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }} </button>
                            </div>
                            <br>

                        </div>
                     </div>
             <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <article class="card-body">
                                    <h5>Pay On Delivery</h5>
                                <hr/>
                                    <dl class="dlist-align">
                                        <img src="https://www.seekpng.com/png/detail/491-4915043_cod-cash-on-delivery.png"  style="height:50px; width:310px" alt="">
                                        <div class="form-row">
                                            <h6><span>&#10003;</span>Cash on delivery </h6>
                                       </div>
                                        <dt>Total cost: </dt>
                                        <dd class="text-right h5 b"> {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }} </dd>
                                    </dl>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
        </form>
<script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
</script>
@endsection


