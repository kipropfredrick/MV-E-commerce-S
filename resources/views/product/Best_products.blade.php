{{-- Third lane --}}
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row mb-0">
                    <div class="col-md-11">
                        <h5>Best_Products</h5>
                    </div>
                <div class="float-right">
                  <a href="{{route('all')}}"><h6>See More ></h6></a>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                   @foreach ($sales as $item)
                   <div class="col-md-2">
                    <div class="card">
                        <a href="{{route('product.show',$item->id)}}"><img class="card-img-top" src="/images/{{$item->image_path}}" alt="" />
                        </a>
                        <p class="h6"><small class="text-muted"> Butterflies Hand composite</small></p>
                        <p class="h5 m-1"> $782.00</p>
                    </div>
                </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
