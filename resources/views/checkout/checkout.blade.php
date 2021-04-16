@extends('layouts.app')
@section('content')
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
                            <h4 class="card-title mt-2">Billing Details</h4>
                        </header>
                        <article class="card-body">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" name="shipping_fullname" id="" class="form-control">
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
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
                                    <input type="text" class="form-control" name="shipping_phone">
                                </div>
                            </div>
                            <label class="form-check-label">
                                <input type="radio" checked class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                                Cash on delivery
                            </label>
                            {{-- <div class="form-group">
                                <label>Order Notes</label>
                                <textarea class="form-control" name="notes" rows="6"></textarea>
                            </div> --}}
                        </article>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Your Order</h4>
                                </header>
                                <article class="card-body">
                                    <dl class="dlist-align">
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
        </form>
    </div>
</section>
@endsection
