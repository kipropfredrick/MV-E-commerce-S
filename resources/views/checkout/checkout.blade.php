@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-7">
<div class="left border">
<h3>Shipping Information</h3>
<form action="{{route('orders.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">State</label>
        <input type="text" name="shipping_state" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Zip</label>
        <input type="number" name="shipping_zipcode" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Full Address</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>
</div></div></div>


    {{-- <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div> --}}
    <a href="{{route('product.index')}}"><button type="submit" class="btn btn-primary mt-3">Proceed to Payment</button></a>


</form>

@endsection
