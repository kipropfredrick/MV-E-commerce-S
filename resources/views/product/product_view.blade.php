{{-- Third lane --}}
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color:rgb(225, 223, 223);">
                <div class="row mb-0">
                    <div class="col-md-11">
                        <h5>Snickers Monday</h5>
                    </div>
                <div class="float-right">
                    <h6>See More ></h6>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    @foreach ($subcategories->take(6) as $product)
                    <div class="col-md-2">
                        <div class="card">
                            <a href="{{route('product.related',$product->slug)}}">
                                <img class="card-img-top" src="/images/{{$product->image_path}}" alt="" />
                            </a>
                            <p class="h6"><small class="text-muted">{{$product->subcat_name}}</small></p>
                            <p class="h5 m-1"> {{$product->price}}</p>
                             <form action="{{route('add.cart',$product->id)}}" method="GET">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $product->name }}" id="naame" name="naame">
                            <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                            <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">
                            <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                            {{-- <button class="btn btn-primary text-uppercase">Add to cart</button> --}}
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
