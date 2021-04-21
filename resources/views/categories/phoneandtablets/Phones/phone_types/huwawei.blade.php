<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Huwawei Phones</title>
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
       @include('layouts.app')
       <h2><b>Huwawei Phones</b></h2>
          <!--Carousel Wrapper-->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.ytimg.com/vi/CW1LS0jJLU4/maxresdefault.jpg" class="d-block w-100" height="350px;" alt="" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.ytimg.com/vi/giGymlSzjKo/maxresdefault.jpg" class="d-block w-100" height="350px;" alt="" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.ytimg.com/vi/XeJTCzU4Pqo/maxresdefault.jpg" class="d-block w-100" height="350px;" alt="" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>
    </div>
    <!--/Carousel Wrapper-->
     {{-- navigation bar --}}
     <div class="row mb-5">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">Home / </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('phonestablets')}}">Phones&Tablets / </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('phones')}}">Phones / </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="">Huwawei </a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home, Living</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Decoration</a>
                                <a class="dropdown-item" href="#">Furniture</a>
                                <a class="dropdown-item" href="#">Textile</a>
                                <a class="dropdown-item" href="#">Lighting</a>
                                <a class="dropdown-item" href="#">Kitchenware</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Stationery, Office</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Auto, Garden, Building</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sports, Sightseeing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cosmetics, Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hobby, Film, Music, Books</a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>

     {{-- end of navigation bar --}}

      <div class="container-fluid mt-5 mb-5">
       <div class="row g-2">
           <div class="col-md-3">
               <div class="t-products p-2">
                   <h6 class="text-uppercase">Huwawei Phones</h6>
                   <div class="p-lists">
                    <div class="d-flex justify-content-between mt-2"><a href="{{route('apple')}}"> <span>Apple</span></a> <span>23</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <a href="{{route('xiaomi')}}"><span>Xiaomi</span> </a><span>46</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <a href="{{route('lenovo')}}"><span>Lenovo</span></a> <span>13</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <a href="{{route('huwawei')}}"><span>Huwawei</span></a>  <span>33</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <a href="{{route('nokia')}}"><span>Nokia</span></a> <span>12</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <a href="{{route('infinix')}}"><span>infinix</span></a> <span>53</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <a href="{{route('motorola')}}"><span>Motorola</span></a> <span>203</span> </div>
                    <div class="d-flex justify-content-between mt-2"> <a href="{{route('ulefone')}}"><span>Ulephone</span></a> <span>23</span> </div>
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
                   <br>
                   <div class="col-md-3 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://media.extra.com/s/aurora/100142445_800/Samsung-Galaxy-Tab-S6-105-Inch-Book-Cover-Keyboard-Arabic-and-English-Gray?locale=en-GB,en-*,*" alt="" />
                        <div class="card-body">
                            <p class="h6"><small class="text-muted">Samsung Galaxy Tab S6, 10.5 Inch Book Cover Keyboard</small></p>
                            <p class="h5 m-0">$782.00</p>
                        </div>
                        <div class="card-footer p-0">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-cart-plus"></i>
                                    <span>Add Cart</span>
                                </button>
                                {{-- <button type="button" class="btn btn-light">
                                    <i class="fa fa-shopping-cart"></i>
                                </button> --}}
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

               </div>

           </div>
       </div>
   </div>
