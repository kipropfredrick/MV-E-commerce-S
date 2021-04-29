@include('layouts.app')
<!------ Include the above in your HEAD tag ---------->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">


<div class="container">
    @if(session()->has('paid'))
                <div class="alert alert-success">
                    {{ session()->get('paid') }}
                </div>
            @endif
      <br>
    <div class="row">
      <div class="col-md-8 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            @if(\Cart::getTotalQuantity()>0)
          <span class="text-muted">cart  items ({{ \Cart::getTotalQuantity()}}  item)</span>
           @else
           <span><h4>No Item(s) In Your Cart</h4><br></span>
           @endif
          <span class="badge badge-danger badge-pill">{{ \Cart::getTotalQuantity()}}</span>
        </h4>
        <div class="card">
    </div>
    <thead>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <h6>Image</h6>
            <h6>Name</h6>
            <h6>Quantity</h6>
            <h6>Refresh</h6>
           <h6>Price</h6>
            <h6>Delete</h6>
        </li>

    </thead>
        <ul class="list-group mb-3">
            @foreach($cartCollection as $item)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <?php $data=App\Models\Product::where('id',$item->id)->get();
                    // echo $data;
                     ?>
                     @foreach ($data as $itemm)
                     <img src="/images/{{$itemm->image_path}}" width="60px"  height="60px" alt="Productimage">

                     @endforeach                </div>
                <h6 name="proname" class="my-0">{{$itemm->name}}</h6>
                <form action="{{ route('cart.update') }}" method="POST">
                    {{ csrf_field() }}
                <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                <input type="number" value="{{ $item->quantity }}"id="quantity" name="quantity" min="1" max="21" step=""/>
                <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-refresh "></i></button>
            </form>
                <span class="text-muted">Ksh {{$item->price}}</span>
                <form action="{{ route('cart.remove') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                    <button class="btn btn-danger btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                </form>
            </li>
            @endforeach
          <li class="list-group-item d-flex justify-content-between">
            <span>Shiping Fee</span>
            <strong>ksh120</strong>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (Ksh)</span>
            <strong>Ksh {{ \Cart::getTotal() }}</strong>
          </li>
        </ul>

        {{-- <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </div>
        </form> --}}
      </div>
      <div class="col-md-4 order-md-1">
        <h4 class="mb-3">Adress</h4>
        <form action="{{route('pay.store')}}" method="POST" class="needs-validation" novalidate>
            {{ csrf_field() }}
            {{-- <div class="mb-3">
                <label for="shipping_fullname">User Name<span class="text-muted"></span></label>
                <input type="text" class="form-control" name="shipping_fullname" id="name" value="" placeholder="your name">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div> --}}

          {{-- <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div> --}}

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" name="shipping_address" class="form-control" id="shipping_address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <hr class="mb-4">
          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" value="mpesa"type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label"  for="credit">Mpesa</label>
            </div>
          </div>
           {{-- Phone --}}
           <div class="mb-4">
            <label for="address2">Phone Number <span class="text-muted"></span></label>
            <input type="text" class="form-control" name="shipping_phone" id="address2" placeholder="eg.07xxxxx">
          </div>
          <li class="list-group-item d-flex justify-content-between">
            <span>To Pay</span>
            <strong>Ksh {{ \Cart::getTotal() }}</strong>
          </li>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Make Payment</button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2020-2021 Shopilyv</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


