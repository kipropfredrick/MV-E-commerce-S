 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>top_selling_items</title>
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
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://5.imimg.com/data5/WU/TB/MY-2/kc596_10-500x500.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>XRD Active Shoes</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://justcreative.com/wp-content/uploads/2019/11/Apple-Watch-Series-5.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Hygen Smart watch </h5> <span>$123.43</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://i5.walmartimages.com/asr/5a2915a2-427a-460e-8fd3-f6ba23467c9c_1.9be7f36f231d846ddec557fa6c53bbad.jpeg" width="200" height="200"> </div>
                            <div class="about text-center">
                                <h5>Acer surface book 2.5</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://i.dell.com/is/image/DellContent//content/dam/global-site-design/product_images/dell_client_products/notebooks/xps_notebooks/xps_15_7590/pdp/laptops-xps-15-7590-pdp-gallery504x350.jpg?fmt=jpg&wid=570&hei=400" width="200" height="200"> </div>
                            <div class="about text-center">
                                <h5>Dell XPS Surface</h5> <span>$1,245.89</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://static.bhphoto.com/images/images2500x2500/1588766830_1558265.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Acer surface book 5.5</h5> <span>$2,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://harlemtechnologies.co.ke/wp-content/uploads/2020/10/Mi-Band-5-600x600.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Xps smart watch 5.0</h5> <span>$999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://www.gizmochina.com/wp-content/uploads/2019/04/UMIDIGI-A5-Pro-5-500x500.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Umidigi</h5> <span>$3,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://fgl.scene7.com/is/image/FGLSportsLtd/FGL_332979914_01_a?bgColor=0,0,0,0&resMode=sharp2&op_sharpen=1&hei=520" width="200"> </div>
                            <div class="about text-center">
                                <h5>Tyko Running shoes</h5> <span>$99.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://www.mobilehub.co.ke/wp-content/uploads/2019/04/Sony-Bravia-43%E2%80%B3-Smart-4k-Android-TV-43W700E-1.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Sony Smart Tv</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
