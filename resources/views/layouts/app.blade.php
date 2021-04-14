<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
<img src="/images/logo-removebg-preview (1).png"   width="100px;" height="100px" alt="">
    <a class="navbar-brand" href="{{ url('/') }}">Mega Dropdown</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: black;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">


            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <span class="text-uppercase text-black">Categories</span>
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link item</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link item</a>
                  </li>
                </ul>
                </div>
                <!-- /.col-md-4  -->
                <div class="col-md-4">
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link item</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link item</a>
                  </li>
                </ul>
                </div>
                <!-- /.col-md-4  -->
                <div class="col-md-4">
                  <a href="">
                    <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                  </a>
                  <p class="text-white">Short image call to action</p>

                </div>
                <!-- /.col-md-4  -->
              </div>
            </div>
            <!--  /.container  -->


          </div>
        </li>
      </ul>
      <form class="form-inline my-6 my-lg-9"  style="margin-right:25%">
        <input class="form-control mr-sm-9"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>

          <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))

                                    {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}

                            @endif

                            @if (Route::has('register'))

                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}

                            @endif
                        @else
                        <div class="dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-right: 10">
                                <a>
                                    <i class="fa fa-user-circle-o" aria-hidden="true" >{{ Auth::user()->name }}</i>
                                </a>
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
         <div class="carticon" style="left:3000px;">
        <a href="#">
        <i class="fa fa-shopping-cart" style="font-size:30px ;color:rgb(1, 5, 5);"></i>
        <span  class='badge badge-danger' id='lblCartCount'> 5 </span>
    </a>

     </div>

  </nav>
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
