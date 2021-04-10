<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>top_selling_items</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
       <!-- Section:products display with style -->
       <style>
        * {
          box-sizing: border-box;
        }

        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
          float: left;
          width: 25%;
          padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
          }
        }

        /* Style the counter cards */
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          padding: 16px;
          text-align: center;
          background-color: #f1f1f1;
        }
        </style>
        </head>
        <br>
        <body>


        <h5 style="font-family: 'Londrina Solid', cursive; margin-left:100px; font-size:20px;"><strong>Top Selling Items</strong></h5>
         <hr>
        <div class="container-row">
        <div class="row" style=";">
        <div class="shadow-sm p-3 mb-5 bg-white rounded " >
          <div class="column">
        <div class="card">

            <img class="img-fluid w-100" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/11045620/2020/1/27/95ac94f8-fbc6-43b0-8b07-c3410371ce031580110669648-Nike-Men-Sports-Shoes-9671580110668087-1.jpg" alt="Sample">
            <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
            <a href="#!">
            </a>
          </div>

          <div class="card-body text-center">

            <h5>Fantasy T-shirt</h5>
            <p class="small text-muted text-uppercase mb-2">Shirts</p>
            <hr>
            <h6 class="mb-3">
              <span class="text-danger mr-1">$12.99</span>
              <span class="text-grey"><s>$36.99</s></span>
            </h6>

            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2">
              <i class="fas fa-shopping-cart pr-2"></i>Add to cart
            </button>
            <button type="button" class="btn btn-light btn-sm mr-1 mb-2">
              <i class="fas fa-info-circle pr-2"></i>Details

          </div>
        <!-- Card -->
          </div>
          </div>


</body>
</html>
