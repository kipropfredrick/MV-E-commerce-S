@extends('layouts.app')
@section('content')
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>
<body>

<div class="container mt-4">
  <h2>Add producs</h2>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
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
                            <input type="text" name="shippingcost" id="" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Description</label>
                          <textarea type="text" name="description" id="" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group  col-md-6">
                            <label for="country">Select Category:</label>
                            <select name="category" class="form-control" style="width:250px">
                                <option value="">--- Select Category ---</option>
                                @foreach ($countries as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="state">Select Subcategory:</label>
                            <select name="subcategory" class="form-control"style="width:250px">
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
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
</body>
<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="category"]').on('change',function(){
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
                        jQuery('select[name="subcategory"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="subcategory"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="subcategory"]').empty();
               }
            });
    });
    </script>
</html>
@endsection
