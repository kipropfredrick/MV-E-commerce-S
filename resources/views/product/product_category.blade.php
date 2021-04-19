<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Product category</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
   body {
   background-color: #eee
}

.t-products {
   background-image: linear-gradient(to right top, #ff9900, #ff9900, #ff9900, #ff9900, #ff9900);
   color: #fff;
   border-radius: 3px
}

.processor {
   background-color: #fff;
   margin-top: 5px;
   border-bottom: 1px solid #eee
}

.brand {
   background-color: #fff;
   border-bottom: 1px solid #eee
}

.type {
   background-color: #fff
}

.product {
   padding: 10px;
   background-color: #fff;
   border-radius: 5px;
   position: relative
}

.about span {
   color: #ff9900;
   font-size: 16px
}

.cart-button button {
   font-size: 12px;
   color: #fff;
   background-color: #ff9900;
   height: 38px
}

.cart-button button:focus,
button:active {
   font-size: 12px;
   color: #fff;
   background-color: #ff9900;
   box-shadow: none
}

.product_fav i {
   line-height: 40px;
   color: #ff9900;
   font-size: 15px
}

.product_fav {
   display: inline-block;
   width: 36px;
   height: 39px;
   background: #FFFFFF;
   box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
   border-radius: 11%;
   text-align: center;
   cursor: pointer;
   margin-left: 3px;
   -webkit-transition: all 200ms ease;
   -moz-transition: all 200ms ease;
   -ms-transition: all 200ms ease;
   -o-transition: all 200ms ease;
   transition: all 200ms ease
}

.product_fav:hover {
   background: #ff9900
}

.product_fav:hover i {
   color: #fff
}

.about {
   margin-top: 0px
}

.off {
   position: absolute;
   left: 65%;
   top: 6%;
   width: 80px;
   text-align: center;
   height: 30px;
   line-height: 8px;
   border-radius: 5px;
   font-size: 13px;
   display: flex;
   align-items: center;
   justify-content: center;
   color: #fff
}
</style>


      <div class="container-fluid mt-5 mb-5">
       <h2><b>Products</b></h2>
       <div class="row g-2">
           <div class="col-md-3">
               <div class="t-products p-2">
                   <h6 class="text-uppercase">Computer & Periferals</h6>
                   <div class="p-lists">
                       <div class="d-flex justify-content-between mt-2"> <span>Laptops</span> <span>23</span> </div>
                       <div class="d-flex justify-content-between mt-2"> <span>Desktops</span> <span>46</span> </div>
                       <div class="d-flex justify-content-between mt-2"> <span>Monitors</span> <span>13</span> </div>
                       <div class="d-flex justify-content-between mt-2"> <span>Mouse</span> <span>33</span> </div>
                       <div class="d-flex justify-content-between mt-2"> <span>Keyboard</span> <span>12</span> </div>
                       <div class="d-flex justify-content-between mt-2"> <span>Printer</span> <span>53</span> </div>
                       <div class="d-flex justify-content-between mt-2"> <span>Mobiles</span> <span>203</span> </div>
                       <div class="d-flex justify-content-between mt-2"> <span>CPU</span> <span>23</span> </div>
                   </div>
               </div>
               <div class="processor p-2">
                   <div class="heading d-flex justify-content-between align-items-center">
                       <h6 class="text-uppercase">Processor</h6> <span>--</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Intel Core i7 </label> </div> <span>3</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Core i6 </label> </div> <span>4</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Core i3 </label> </div> <span>14</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Centron </label> </div> <span>8</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Pentinum </label> </div> <span>14</span>
                   </div>
               </div>
               <div class="brand p-2">
                   <div class="heading d-flex justify-content-between align-items-center">
                       <h6 class="text-uppercase">Brand</h6> <span>--</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Apple </label> </div> <span>13</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Asus </label> </div> <span>4</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Dell </label> </div> <span>24</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Lenovo </label> </div> <span>18</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Acer </label> </div> <span>44</span>
                   </div>
               </div>
               <div class="type p-2 mb-2">
                   <div class="heading d-flex justify-content-between align-items-center">
                       <h6 class="text-uppercase">Type</h6> <span>--</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Hybrid </label> </div> <span>23</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Laptop </label> </div> <span>24</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Desktop </label> </div> <span>14</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Touch </label> </div> <span>28</span>
                   </div>
                   <div class="d-flex justify-content-between mt-2">
                       <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Tablets </label> </div> <span>44</span>
                   </div>
               </div>
           </div>
           <div class="col-md-9">

               <div class="row g-2">
                   @foreach ($category as $product)
                   <div class="col-md-4">
                       <a href="{{route('home.slug',$product->slug)}}">
                        <div class="product py-4">
                            <div class="text-center"> <img src="/images/{{$product->image_path}}" width="200"> </div>
                            <div class="about text-center"> </a>
                                <h5>{{$product->cat_name}}</h5> <s><span>${{$product->oprice}}</span></s> <span>{{$product->price}}</span>

                                <form action="{{route('add.cart',$product->id)}}" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">
                                    <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                {{-- <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div> --}}
                            </div>
                            </form>
                        </div>

                   </div>
                   @endforeach
               </div>

           </div>
       </div>
   </div>
