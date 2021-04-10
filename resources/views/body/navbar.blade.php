
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}
.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
#lblCartCount {
    font-size: 12px;
    background: #f3b005;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px;
}
/* h1 {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 92px;
  padding: 80px 50px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
} */
.elegantshd {
  color: #131313;
  letter-spacing: .15em;
  text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777;
}
.deepshd {
  color: #e0dfdc;
  background-color:transparent;
  letter-spacing: .1em;
   text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
}
.xbootstrap {
  color: #202020;
  background-color:transparent;
  letter-spacing: .1em;
  /* text-shadow: 1px -1px 1px #111, 2px 2px 1px #363636; */
}
.retroshd {
  color: #2c2c2c;
  letter-spacing: .05em;
  /* text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2); */
}
.retroshd:hover {
    text-decoration: none;
}
</style>




<nav class= "navbar navbar-expand-lg navbar-light bg-light">
    <h1 class="elegantshd"> Shopilyv </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <form  class="form-inline my-2 my-lg-3 col-7" style=" margin-left:10% ;">
        <input class="form-control mr-sm-3 col-9" type="search" placeholder= "Search for Products" aria-label="Search" >
        <button type="button" class="btn btn-warning"><i class="fa fa-search">Search</i></button>
      </form>
      <div class="carticon">
        <a href="#">
        <i class="fa fa-shopping-cart" style="font-size:36px ;color:rgb(1, 5, 5)"></i>
        <span  class='badge badge-warning' id='lblCartCount'> {{Cart::getContent()->count()}} </span>
    </a>
      </div>

  </nav>
