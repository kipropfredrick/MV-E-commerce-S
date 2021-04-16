@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </head>
  <body>
      <section class="section-pagetop "style="background-color:orange">
          <div class="container clearfix">
              <h2 class="title-page">Checkout</h2>
          </div>
      </section>
      <section class="section-content bg padding-y">
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
                              <header class="card-header">
                                  <h4 class="card-title mt-2">Product Details</h4>
                              </header>
                              <article class="card-body">
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label>Product name</label>
                                          <input type="text" name="name" id="" class="form-control">
                                          <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="text" name="price" id="" class="form-control">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label>Prevoius price</label>
                                          <input type="text" name="oprice" id="" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label>Shipping cost</label>
                                          <input type="text" name="shipping_cost" id="" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label>Description</label>
                                        <textarea type="text" name="description" id="" class="form-control"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group  col-md-6">
                                          <label for="country">Select Country:</label>
                                          <select name="country" class="form-control" style="width:250px">
                                              <option value="">--- Select Category ---</option>
                                              @foreach ($countries as $key => $value)
                                              <option value="{{ $key }}">{{ $value }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                      <div class="form-group  col-md-6">
                                          <label for="state">Select State:</label>
                                          <select name="state" class="form-control"style="width:250px">
                                          <option>--State--</option>
                                          </select>
                                      </div>
                                  </div>

                              </article>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="card">
                                      <header class="card-header">
                                          <h4 class="card-title mt-2">Select Image</h4>
                                      </header>
                                      <article class="card-body">
                                          <dl class="dlist-align">
                                              <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" >
                                              @if ($errors->has('file'))
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('file') }}</strong>
                                                  </span>
                                              @endif
                                          </dl>
                                      </article>
                                  </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                  <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Save</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </section>

  </body>
  <script type="text/javascript">
      jQuery(document).ready(function ()
      {
              jQuery('select[name="country"]').on('change',function(){
                 var countryID = jQuery(this).val();
                 if(countryID)
                 {
                    jQuery.ajax({
                       url : 'category/subcategory/' +countryID,
                       type : "GET",
                       dataType : "json",
                       success:function(data)
                       {
                          console.log(data);
                          jQuery('select[name="state"]').empty();
                          jQuery.each(data, function(key,value){
                             $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                          });
                       }
                    });
                 }
                 else
                 {
                    $('select[name="state"]').empty();
                 }
              });
      });
      </script>

  @endsection
