<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
.megamenu .dropdown-menu {
    background: none;
    border: none;
    width: 1200px;
    margin: -20;
}
</style>
<br><br><br>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">MegaMenu</a> <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span> </button>
        <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Mega Menu</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Supermarket</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="{{route('product.bread')}}" class="nav-link text-small pb-0">Bread</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading two</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading three</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading four</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(https://images.unsplash.com/photo-1533637267520-4dfd6aa7ee93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80)no-repeat; background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">About</a></li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Contact</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
