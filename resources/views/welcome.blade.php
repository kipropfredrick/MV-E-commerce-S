<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .antialiased{
           float: center;
            }
            .navbar navbar-light bg-light{
            color:orange;
            position:fixed;
            }
            .text{
            top:px;
            text-align:center;
            color:black;
            }
//             .form-inline{
//   width: 50%;
// }
        </style>
    </head>

   <body class="antialiased">
   <nav class="navbar navbar-light bg-light">
     <a class="navbar-brand"><strong>SHOPILYV</strong></a>

      <form class="form-inline">
       <input class="form-control mr-sm-2" type="Search" placeholder="Search for orders" aria-label="Search">
       <button class="btn btn-outline-warning my-2 my-sm-5" type="submit">Search</button>
     </form>
            <div class="text" style="color:black:">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline"style="color:black;"><strong>Home</strong></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"style="color:black;"><strong>Login</strong></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"style="color:black;"><strong>Register</strong></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
  </nav>

    </body>
</html>
