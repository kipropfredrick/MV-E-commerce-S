<!DOCTYPE html>
<html>
<head>
<style>
.megamenu {
    position: static
}

.megamenu .dropdown-menu {
    background: none;
    border: none;
    width: 500%;
}

code {
    color: #ff9900;
    background:#ff9900;
    padding: 0.1rem 0.2rem;
    border-radius: 0.2rem
}

.text-uppercase {
    letter-spacing: 0.08em
}
</style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">Categories</a> <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span> </button>
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Categories</a>
                <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                    <div class="container">
                        <div class="row bg-white rounded-0 m-0 shadow-sm">
                            <div class="col-lg-7 col-xl-8">
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <h6 class="font-weight-bold text-uppercase">Heading one</h6>
                                            <ul class="list-unstyled">
                                                <li class="nav-item"><a href="" class="nav-link text-small pb-0">Home</a></li>
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
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
