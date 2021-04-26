
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .slider-item{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.slider-item .slider-image img{
    margin: 0 auto;
    width: 100%;
}
.slider-item .slider-main-detail{
    padding: 10px;
    border-radius: 0 0 5px 5px;
}
.slider-item:hover .slider-main-detail{
    background-color: #dbeeee !important;
}
.slider-item .price{
    float: left;
    margin-top: 5px;
}
.slider-item .price h5{
    line-height: 20px;
    margin: 0;
}
.detail-price{
    color: #219FD1;
}
.slider-item .slider-main-detail .rating{
    color: #777;
}
.slider-item .rating{
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}
.slider-item .btn-add{
    width: 50%;
    float: left;
    border-right: 1px solid #E1E1E1;
}
.slider-item .btn-details{
    width: 50%;
    float: left;
}
.controls{
    margin-top: 20px;
}
.btn-info,.btn-info:visited,.btn-info:hover{
	background-color: #21BBD8;
	border-color: #21BBD8;
}
.btn-info{
	margin-left:5px;
}
.slider-main-detail:hover{
	background-color: #dbeeee !important;
}
.AddCart{
	margin: 0px;
	padding:5px;
	border-radius:2px;
	margin-right:10px;
}
.review {
	margin-bottom: 5px;
	padding-top:5px;
}
</style>
<body>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3>Product Slider</h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs">
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-info " href="#carousel-example" data-slide="prev"></a>
                    <a class="right fa fa-chevron-right btn btn-info" href="#carousel-example" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Product Name</h5>
                                            <h5 class="detail-price">$187.87</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Product Name</h5>
                                            <h5 class="detail-price">$187.87</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Product Name</h5>
                                            <h5 class="detail-price">$187.87</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Product Name</h5>
                                            <h5 class="detail-price">$187.87</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Product Name</h5>
                                            <h5 class="detail-price">$187.87</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Product Name</h5>
                                            <h5 class="detail-price">$187.87</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Product Name</h5>
                                            <h5 class="detail-price">$187.87</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>
