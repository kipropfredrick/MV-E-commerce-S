
       <meta charset="utf-8">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>top_selling_items</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <style>
    * {
    box-sizing: border-box
}

#search {
    outline: none;
    border: none;
    display: inline-block
}

#burgundy {
    color: rgb(153, 40, 59)
}

#orange,
select,
.btn {
    color: orange
}

.fa-search {
    font-size: 20px;
    padding: 10px;
    margin-bottom: 3px;
    padding-right: 20px
}

.search-nav-item {
    height: 40px
}

nav {
    padding: 0px 100px
}

.fa-user-o,
.fa-shopping-cart {
    font-size: 20px;
    padding: 4px
}

.form-group {
    margin-bottom: 5px
}

label {
    padding-left: 10px
}

.form-group:last-child {
    margin-bottom: 0
}

h6 {
    margin-bottom: 0px
}

#sort {
    outline: none;
    border: none
}

.btn {
    border: 1px solid orange;
    border-radius: 10px;
    background-color: #fff
}

.btn:hover {
    color: #fff;
    background-color: orange
}

.card-body {
    padding: 8px
}

.sign {
    width: 25px;
    height: 25px
}

.discount {
    border: 1px solid orange;
    border-radius: 5px;
    width: 65px;
    position: absolute;
    top: 2%
}

@media(min-width:1200px) {
    #search {
        width: 300px;
        padding: 5px;
        padding-left: 20px
    }

    .search-nav-item {
        margin-left: 400px;
        width: 350px
    }

    .fa-user-o {
        margin-left: 300px
    }

    .text {
        display: none
    }

    .fa-user-o,
    .fa-shopping-cart {
        font-size: 20px;
        padding-left: 20px
    }

    #sidebar {
        width: 30%;
        padding: 20px;
        float: left
    }

    #products {
        width: 70%;
        padding: 10px;
        margin: 0;
        float: right
    }

    .card {
        width: 300px;
        height: 330px;
        border: none
    }

    .card-img-top {
        width: 295px;
        height: 200px;
        border-radius: 10px
    }

    del {
        padding-right: 2px
    }

    .filter,
    #mobile-filter {
        display: none
    }
}

@media(min-width:992px) and (max-width:1199px) {
    #search {
        width: 300px;
        padding: 5px;
        padding-left: 20px
    }

    .search-nav-item {
        margin-left: 200px;
        width: 350px
    }

    .fa-user-o {
        margin-left: 160px
    }

    .text {
        display: none
    }

    #sidebar {
        width: 30%;
        padding: 20px;
        float: left
    }

    #products {
        width: 70%;
        padding: 10px;
        margin: 0;
        float: right
    }

    .card {
        width: 100px;
        height: 330px;
        border: none
    }

    .card-img-top {
        width: 200px;
        height: 200px;
        border-radius: 10px
    }

    .fa-plus,
    .fa-minus {
        font-size: 12px
    }

    .sign {
        height: 25px
    }

    .price {
        width: 99px
    }

    .filter,
    #mobile-filter {
        display: none
    }
}

@media(min-width:768px) and (max-width:991px) {
    #search {
        width: 300px;
        padding: 5px;
        padding-left: 20px
    }

    .search-nav-item {
        margin-left: 60px;
        width: 350px
    }

    .fa-user-o {
        margin-left: 80px
    }

    .text {
        display: none
    }

    #sidebar {
        width: 35%;
        padding: 20px;
        float: left
    }

    #products {
        width: 65%;
        padding: 10px;
        margin: 0;
        float: right
    }

    .card {
        border: none
    }

    .filter,
    #mobile-filter {
        display: none
    }
}

@media(min-width:576px) and (max-width:767px) {
    .text {
        display: none
    }

    .search-nav-item {
        margin-left: 35px;
        width: 270px
    }

    #search {
        width: 240px;
        padding: 5px;
        padding-left: 20px
    }

    .fa-search {
        padding: 3px;
        font-size: 18px
    }

    #sidebar {
        width: 40%;
        padding: 20px;
        float: left
    }

    #products {
        width: 60%;
        padding: 10px;
        margin: 0;
        float: right
    }

    .card {
        border: none
    }

    #off {
        padding-left: 2px
    }

    #sorting span,
    #res {
        font-size: 14px
    }

    .filter,
    #mobile-filter {
        display: none
    }
}

@media(max-width:575px) {
    .search-nav-item {
        margin: 0;
        width: 100%;
        margin-top: 10px
    }

    #search {
        width: 80%;
        padding-left: 10px;
        margin-top: 10px;
        padding-right: 10px
    }

    .fa-search {
        padding: 10px;
        font-size: 18px
    }

    #sidebar {
        display: none
    }

    .filter {
        margin-left: 70%;
        margin-top: 2%
    }

    #sorting,
    #res {
        font-size: 12px;
        margin-top: 2%
    }
}
</style>


<!-- Navbar section -->
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> <a class="navbar-brand ml-2 font-weight-bold" href="#"><span id="burgundy">The</span><span id="orange">Bakeshop</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
            <li class="nav-item rounded bg-light search-nav-item"><input type="text" id="search" class="bg-light" placeholder="Search bread, cakes, desserts"><span class="fa fa-search text-muted"></span></li>
            <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-user-o"></span><span class="text">Login</span></a> </li>
            <li class="nav-item "><a class="nav-link" href="#"><span class="fa fa-shopping-cart"></span><span class="text">Cart</span></a> </li>
        </ul>
    </div>
</nav>
<div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<div id="mobile-filter">
    <p class="pl-sm-0 pl-2"> Home | <b>All Breads</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accompainments</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Top Offers</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
        </form>
    </div>
</div>
<!-- Sidebar filter section -->
<section id="sidebar">
    <p> Home | <b>All Breads</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accompainments</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Top Offers</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
        </form>
    </div>
</section>
<!-- products section -->
<section id="products">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Showing 44 results</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select name="sort" id="sort">
                        <option value="popularity"><b>Popularity</b></option>
                        <option value="prcie"><b>Price</b></option>
                        <option value="rating"><b>Rating</b></option>
                    </select> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <div class="card-body">
                        <h5><b>Multi Grain Bread</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">₹110/loaf</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 loaf</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/3085146/pexels-photo-3085146.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <div class="card-body">
                        <h5><b>Bagels</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">₹35/piece</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/1448665/pexels-photo-1448665.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <div class="card-body">
                        <h5><b>White Bread</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">₹80/loaf</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 loaf</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/461060/pexels-photo-461060.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <div class="card-body">
                        <h5><b>Baguette</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">₹160/piece</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/209206/pexels-photo-209206.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <div class="card-body">
                        <h5><b>Masala Bun</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">₹85/piece</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card d-relative"> <img class="card-img-top" src="https://images.pexels.com/photos/3570/morning-breakfast-croissant.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <div class="card-body">
                        <h5><b>Croissant</b> </h5>
                        <div class="rounded bg-white discount" id="orange">10% off</div>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted price"><del>₹55</del>₹45/piece</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span>1pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
