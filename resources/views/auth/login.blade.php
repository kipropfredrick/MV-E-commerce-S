@extends('layouts.registration_navbar')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
    <style>
        @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
       .login-block{
           float:left;
           width:100%;
           padding : 50px 0;
       }
       .banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
       .container{background:rgb(248, 248, 248); border-radius: 10px;}
       .carousel-inner{border-radius:0 10px 10px 0;}
       .carousel-caption{text-align:left; left:20%;}
       .login-sec{padding: 50px 30px; position:relative;}
       .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
       .login-sec .copy-text i{color:#FEB58A;}
       .login-sec .copy-text a{color:#E36262;}
       .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
       .login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
       .btn-login{background: #DE6262; color:#fff; font-weight:600;}
       .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
       .banner-text h2{color:#fff; font-weight:600;}
       .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
       .banner-text p{color:#fff;}
    </style>
</head>
<body>
    @section('content')
    <section class="login-block">
      <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="form-group ">
                                <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-lable" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                 @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                 @endif
                        </form>

         </div>
    </div>

            <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://blog.phonehouse.es/wp-content/uploads/2019/06/Blog-TW-Sorteo-1200x628-1Generico-4.jpg"style="height:600px; width:1000px;" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.91-cdn.com/hub/wp-content/uploads/2020/11/Xiaomi-Black-friday-sale.png"style="height:600px;width:970px;" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://blog.phonehouse.es/wp-content/uploads/2018/11/rrss-1200x628.jpg" style="height:600px; width:1000px;" alt="First slide">
        </div>
    </div>
  </div>
</div>
</div>
    @endsection

</body>
</html>
