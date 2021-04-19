@include('layouts.app')
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">

<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 300px) {
    table#cart tbody td .form-control{
		width:10%;
		display: inline !important;
	}
	.actions .btn{
		width:300%;
		margin:1.5em 0;
	}

	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}

	table#cart thead { display: none; }
	table#cart tbody td { display: center; padding: .3rem; min-width:100px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}



	table#cart tfoot td{display:center; }
	table#cart tfoot td .btn{display:center;}

}
.box{
  /* width: 700px; */
  padding: 30px;
  position: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}
</style>




<div class="box">
        <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
                    <tr>
                        @if(\Cart::getTotalQuantity()>0)
                        <h4>Cart ({{ \Cart::getTotalQuantity()}}  item)</h4><br>
                    @else
                        <h4>No Item(s) In Your Cart</h4><br>
                        <a href="/" class="btn btn-dark">Continue Shopping</a>
                    @endif
                    </tr>
                    @foreach($cartCollection as $item)
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-3 hidden-xs"><img src="/images/{{ $item->attributes->image }}"/></div>
									<div class="col-sm-5">
										<h4 class="nomargin">{{ $item->name }}</h4>
									</div>
								</div>
							</td>
							<td data-th="Price">${{ $item->price }}</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">${{ \Cart::get($item->id)->getPriceSum() }}</td>
							@if(count($cartCollection)>0)
                            <td class="actions" data-th="">
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    {{ csrf_field() }}
                               <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
							</form>
                            <form action="{{ route('cart.update') }}" method="POST">
                                {{ csrf_field() }}
                            <a href=""><button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button></a>
                        </form>
                            </td>
                             {{-- <form action="{{route('cart.update',$item->id)}}">
                                <input name="quantity" type="number" min="{{$item->quantity}}" value="{{$item->quantity}}">
                                <input type="submit" value="Save">
                            </form> --}}
                            @endif
                            @endforeach
						</tr>
					</tbody>
					<tfoot>
                        @if(count($cartCollection)>0)
						<tr class="visible-xs">
							<td class="text-center"><strong>${{ \Cart::getTotal() }}</strong></td>
						</tr>
						<tr>
							<td><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>${{ \Cart::getTotal() }}</strong></td>
							<td><a href="/checkout" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
                        @endif
					</tfoot>
				</table>

</div>
