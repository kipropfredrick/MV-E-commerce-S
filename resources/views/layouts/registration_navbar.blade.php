<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<style>
    /* adds some margin below the link sets  */
/* adds some margin below the link sets  */
.navbar .dropdown-menu div[class*="col"] {
   margin-bottom:1rem;
}

.navbar .dropdown-menu {
  border:none;
  background-color:#0060c8!important;
}

/* breakpoint and up - mega dropdown styles */
@media screen and (min-width: 992px) {

  /* remove the padding from the navbar so the dropdown hover state is not broken */
.navbar {
  padding-top:0px;
  padding-bottom:0px;
}

/* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
.navbar .nav-item {
  padding:.5rem .5rem;
  margin:0 .25rem;
}

/* makes the dropdown full width  */
.navbar .dropdown {position:static;}

.navbar .dropdown-menu {
  width:100%;
  left:0;
  right:0;
/*  height of nav-item  */
  top:45px;

  display:block;
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s, opacity 0.3s linear;

}




  /* shows the dropdown menu on hover */
.navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {
  display:block;
  visibility: visible;
  opacity: 1;
  transition: visibility 0s, opacity 0.3s linear;
}

  .navbar .dropdown-menu {
    border: 1px solid rgba(0,0,0,.15);
    background-color: #fff;
  }

}


</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <img src="/images/logo-removebg-preview (1).png"   width="100px;" height="100px" alt="">
            <a class="navbar-brand" href="{{ url('/') }}">Mega Dropdown</a>
                    <div class="container">
                      <div class="row">
                      </div>
                    </div>
                    <!--  /.container  -->
                 <!-- Authentication Links -->
                    @guest
                         @if (Route::has('login'))

                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                         @endif

                        @if (Route::has('register'))

                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                         @endif
                     @else
                     <i class="far fa-user-circle"> {{ Auth::user()->name }} </i>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                              </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                             </div>

                    @endguest

            </div>


          </nav>
</body>
<main class="py-4">
    @yield('content')
</main>
<script>
$(document).ready(function() {
// executes when HTML-Document is loaded and DOM is ready

// breakpoint and up
$(window).resize(function(){
if ($(window).width() >= 980){

// when you hover a toggle show its dropdown menu
$(".navbar .dropdown-toggle").hover(function () {
 $(this).parent().toggleClass("show");
 $(this).parent().find(".dropdown-menu").toggleClass("show");
});

// hide the menu when the mouse leaves the dropdown
$( ".navbar .dropdown-menu" ).mouseleave(function() {
$(this).removeClass("show");
});

// do something here
}
});



// document ready
});
</script>
</html>
