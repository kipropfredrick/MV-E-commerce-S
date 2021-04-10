<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


        <!-- Styles -->
        <style>
       body {
	background: #EEE;
	overflow-x:hidden;
}
.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}
@media only screen and (min-width: 1200px) {
    .container {
        width: 1210px;
    }
}

@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .container {
        width: 1030px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .container {
        width: 682px;
    }
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
    .container {
        width: 428px;
        margin: 0 auto;
    }
}

@media only screen and (max-width: 479px) {
    .container {
        width: 320px;
        margin: 0 auto;
    }
}



.mcd-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*height: 100px;*/
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;

  /* == */
  width: 250px;
  /* == */
}
.mcd-menu li {
  position: relative;
  /*float:left;*/
}
.mcd-menu li a {
  display: block;
  text-decoration: none;
  padding: 12px 20px;
  color: #777;
  /*text-align: center;
  border-right: 1px solid #E7E7E7;*/

  /* == */
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
  /* == */
}
.mcd-menu li a i {
  /*display: block;
  font-size: 30px;
  margin-bottom: 10px;*/

  /* == */
  float: left;
  font-size: 20px;
  margin: 0 10px 0 0;
  /* == */

}
/* == */
.mcd-menu li a p {
  float: left;
  margin: 0 ;
}
/* == */

.mcd-menu li a strong {
  display: block;
  text-transform: uppercase;
}
.mcd-menu li a small {
  display: block;
  font-size: 10px;
}

.mcd-menu li a i, .mcd-menu li a strong, .mcd-menu li a small {
  position: relative;

  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
}
.mcd-menu li:hover > a i {
    opacity: 1;
    -webkit-animation: moveFromTop 300ms ease-in-out;
    -moz-animation: moveFromTop 300ms ease-in-out;
    -ms-animation: moveFromTop 300ms ease-in-out;
    -o-animation: moveFromTop 300ms ease-in-out;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu li:hover a strong {
    opacity: 1;
    -webkit-animation: moveFromLeft 300ms ease-in-out;
    -moz-animation: moveFromLeft 300ms ease-in-out;
    -ms-animation: moveFromLeft 300ms ease-in-out;
    -o-animation: moveFromLeft 300ms ease-in-out;
    animation: moveFromLeft 300ms ease-in-out;
}
.mcd-menu li:hover a small {
    opacity: 1;
    -webkit-animation: moveFromRight 300ms ease-in-out;
    -moz-animation: moveFromRight 300ms ease-in-out;
    -ms-animation: moveFromRight 300ms ease-in-out;
    -o-animation: moveFromRight 300ms ease-in-out;
    animation: moveFromRight 300ms ease-in-out;
}

.mcd-menu li:hover > a {
  color: #e67e22;
}
.mcd-menu li a.active {
  position: relative;
  color: #e67e22;
  border:0;
  /*border-top: 4px solid #e67e22;
  border-bottom: 4px solid #e67e22;
  margin-top: -4px;*/
  box-shadow: 0 0 5px #DDD;
  -moz-box-shadow: 0 0 5px #DDD;
  -webkit-box-shadow: 0 0 5px #DDD;

  /* == */
  border-left: 4px solid #e67e22;
  border-right: 4px solid #e67e22;
  margin: 0 -4px;
  /* == */
}
.mcd-menu li a.active:before {
  content: "";
  position: absolute;
  /*top: 0;
  left: 45%;
  border-top: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/

  /* == */
  top: 42%;
  left: 0;
  border-left: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  /* == */
}

/* == */
.mcd-menu li a.active:after {
  content: "";
  position: absolute;
  top: 42%;
  right: 0;
  border-right: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
}
/* == */

@-webkit-keyframes moveFromTop {
    from {
        opacity: 0;
        -webkit-transform: translateY(200%);
        -moz-transform: translateY(200%);
        -ms-transform: translateY(200%);
        -o-transform: translateY(200%);
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateY(0%);
        -moz-transform: translateY(0%);
        -ms-transform: translateY(0%);
        -o-transform: translateY(0%);
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveFromLeft {
    from {
        opacity: 0;
        -webkit-transform: translateX(200%);
        -moz-transform: translateX(200%);
        -ms-transform: translateX(200%);
        -o-transform: translateX(200%);
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveFromRight {
    from {
        opacity: 0;
        -webkit-transform: translateX(-200%);
        -moz-transform: translateX(-200%);
        -ms-transform: translateX(-200%);
        -o-transform: translateX(-200%);
        transform: translateX(-200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}



.mcd-menu li ul,
.mcd-menu li ul li ul {
  position: absolute;
  height: auto;
  min-width: 200px;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*border-top: 4px solid #e67e22;*/
  opacity: 0;
  visibility: hidden;
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
  /*top: 130px;*/
  z-index: 1000;

  /* == */
  left:280px;
  top: 0px;
  border-left: 4px solid #e67e22;
  /* == */
}
.mcd-menu li ul:before {
  content: "";
  position: absolute;
  /*top: -8px;
  left: 23%;
  border-bottom: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/

  /* == */
  top: 25px;
  left: -9px;
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
  /* == */
}
.mcd-menu li:hover > ul,
.mcd-menu li ul li:hover > ul {
  display: block;
  opacity: 1;
  visibility: visible;
  /*top: 100px;*/

  /* == */
  left:250px;
  /* == */
}
/*.mcd-menu li ul li {
  float: none;
}*/
.mcd-menu li ul li a {
  padding: 10px;
  text-align: left;
  border: 0;
  border-bottom: 1px solid #EEE;

  /* == */
  height: auto;
  /* == */
}
.mcd-menu li ul li a i {
  font-size: 16px;
  display: inline-block;
  margin: 0 10px 0 0;
}
.mcd-menu li ul li ul {
  left: 230px;
  top: 0;
  border: 0;
  border-left: 4px solid #e67e22;
}
.mcd-menu li ul li ul:before {
  content: "";
  position: absolute;
  top: 15px;
  /*left: -14px;*/
  /* == */
  left: -9px;
  /* == */
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
}
.mcd-menu li ul li:hover > ul {
  top: 0px;
  left: 200px;
}



/*.mcd-menu li.float {
  float: right;
}*/
.mcd-menu li a.search {
  /*padding: 29px 20px 30px 10px;*/
  padding: 10px 10px 15px 10px;
  clear: both;
}
.mcd-menu li a.search i {
  margin: 0;
  display: inline-block;
  font-size: 18px;
}
.mcd-menu li a.search input {
  border: 1px solid #EEE;
  padding: 10px;
  background: #FFF;
  outline: none;
  color: #777;

  /* == */
  width:170px;
  float:left;
  /* == */
}
.mcd-menu li a.search button {
  border: 1px solid #e67e22;
  /*padding: 10px;*/
  background: #e67e22;
  outline: none;
  color: #FFF;
  margin-left: -4px;

  /* == */
  float:left;
  padding: 10px 10px 11px 10px;
  /* == */
}
.mcd-menu li a.search input:focus {
  border: 1px solid #e67e22;
}


.search-mobile {
	display:none !important;
	background:#e67e22;
	border-left:1px solid #e67e22;
	border-radius:0 3px 3px 0;
}
.search-mobile i {
	color:#FFF;
	margin:0 !important;
}


@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .mcd-menu {
		margin-left:10px;
	}
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .mcd-menu {
		width: 200px;
	}
	.mcd-menu li a {
		height:30px;
	}
	.mcd-menu li a i {
		font-size: 22px;
	}
	.mcd-menu li a strong {
		font-size: 12px;
	}
	.mcd-menu li a small {
		font-size: 10px;
	}
	.mcd-menu li a.search input {
		width: 120px;
		font-size: 12px;
	}
	.mcd-menu li a.search buton{
		padding: 8px 10px 9px 10px;
	}
	.mcd-menu li > ul {
		min-width:180px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:200px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:150px;
		min-width:150px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}
}

@media only screen and (min-width: 480px) and (max-width: 767px) {

	.mcd-menu {
		width: 50px;
	}
	.mcd-menu li a {
		position: relative;
		padding: 12px 16px;
		height:20px;
	}
	.mcd-menu li a small {
		display: none;
	}
	.mcd-menu li a strong {
		display: none;
	}
	.mcd-menu li a:hover strong,.mcd-menu li a.active strong {
		display:block;
		font-size:10px;
		padding:3px 0;
		position:absolute;
		bottom:0px;
		left:0;
		background:#e67e22;
		color:#FFF;
		min-width:100%;
		text-transform:lowercase;
		font-weight:normal;
		text-align:center;
	}
	.mcd-menu li .search {
		display: none;
	}

	.mcd-menu li > ul {
		min-width:180px;
		left:70px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:50px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li > ul {
		left:35px;
		top: 45px;
		border:0;
		border-top:4px solid #e67e22;
	}
	.mcd-menu li ul li ul li > ul:before {
		left:30px;
		top: -9px;
		border:0;
		border-bottom:5px solid #e67e22;
		border-left:5px solid transparent;
		border-right:5px solid transparent;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:30px;
		min-width:150px;
		top: 35px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}

}

@media only screen and (max-width: 479px) {
    .mcd-menu {
		width: 50px;
	}
	.mcd-menu li a {
		position: relative;
		padding: 12px 16px;
		height:20px;
	}
	.mcd-menu li a small {
		display: none;
	}
	.mcd-menu li a strong {
		display: none;
	}
	.mcd-menu li a:hover strong,.mcd-menu li a.active strong {
		display:block;
		font-size:10px;
		padding:3px 0;
		position:absolute;
		bottom:0px;
		left:0;
		background:#e67e22;
		color:#FFF;
		min-width:100%;
		text-transform:lowercase;
		font-weight:normal;
		text-align:center;
	}
	.mcd-menu li .search {
		display: none;
	}

	.mcd-menu li > ul {
		min-width:180px;
		left:70px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:50px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li > ul {
		left:35px;
		top: 45px;
		border:0;
		border-top:4px solid #e67e22;
	}
	.mcd-menu li ul li ul li > ul:before {
		left:30px;
		top: -9px;
		border:0;
		border-bottom:9px solid #e67e22;
		border-left:5px solid transparent;
		border-right:5px solid transparent;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:30px;
		min-width:160px;
		top: 35px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}

}
/* carosel style */
.container {
  display: flex;
}
.responsive {
  width: 100%;
  height: auto;
}

.item {
  /* flex-basis: 100px; */
  margin:5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.responsive {
  width: 100%;
  height: auto;
}


</style>


             {{-- navbar extention --}}
             @include('body.navbar')
             <br>
    </head>

   <body>

    <div class="container">
        <div class="item">
            <nav>
                    <ul class="mcd-menu">
                        <li>
                            <a href="">
                                <i class="fa fa-cart-arrow-down"></i>
                                <strong>Supermarket</strong>
                            </a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i>Food Capboard</a>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-female"></i>cooking ingridients</a>

                                            <li>
                                                <a href="#"><i class="fa fa-male"></i>Snacks</a>

                                            </li>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Grains & Rice</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Suger & Flour</a></li>
                                        <li><a href="#"><i class="fa fa-female"></i>Breakfirst Cerials</a></li>
                                        <li><a href="#"><i class="fa fa-female"></i>Candy & Chocolate</a></li>
                                        <li><a href="#"><i class="fa fa-female"></i>Magarine,Jams & Honey</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-group"></i>Our Team</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-edit"></i>
                                <strong>Bauty & Cosmetics</strong>

                            </a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i>Mission</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-group"></i>Our Team</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-home"></i>
                                <strong>Home & Office</strong>

                            </a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i>Mission</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-group"></i>Our Team</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-tablet"></i>
                                <strong>Phones & Tablets</strong>

                            </a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i>Mission</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-group"></i>Our Team</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-desktop"></i>
                                <strong>Computing</strong>
                            </a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i>Mission</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Food Capboard</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-group"></i>Our Team</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-television"></i>
                                <strong>Electronics</strong>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-envelope-o"></i>
                                <strong>Fashion</strong>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-gamepad"></i>
                                <strong>Gaming</strong>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-grav"></i>
                                <strong>Babby Products</strong>
                            </a>
                        </li>                        <li>
                            <a href="">
                                <i class="fa fa-futbol-o"></i>
                                <strong>Sporting Goods</strong>
                            </a>
                        </li>                        <li>
                            <a href="">
                                <i class="fa fa-snowflake-o"></i>
                                <strong>Garden & Outdoor</strong>
                            </a>
                        </li>
                    </ul>
                </nav>
        </div>
              <!-- Section:  carousel aligned next to categories -->
             <div class="ite">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <div class="img"><img class="d-block img-fluid responsive " src="https://image.freepik.com/free-photo/beautiful-young-woman-with-shopping-bags-using-her-smart-phone-yellow-background_50889-43.jpg" alt="First slide"></div>
                      </div>
                      <div class="carousel-item">
                        <div class="img"><img class="d-block img-fluid responsive " src="https://image.freepik.com/free-photo/studio-shot-pretty-black-woman-with-white-shopping-bag-standing-yellow-background-trendy-spring-fashionable-look_273443-10.jpg" alt="Second slide"></div>
                      </div>
                      <div class="carousel-item">
                        <div class="img"><img class="d-block img-fluid responsive " src="https://cdn.nohat.cc/thumb/f/720/3a351224580a4ddfa609.jpg" alt="Third slide"></div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="ite" style="margin: 10px;">
                <nav>
                        <ul class="mcd-menu">
                            <li>
                                <a href="">
                                    <i class='fa fa-question'></i>
                                    <strong>HELP CENTER</strong>

                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-repeat"></i>
                                    <strong>EASSY RETURNS</strong>

                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-money"></i>
                                    <strong>SELL ON SHOPI</strong>
                                </a>
                            </li>
                            <br><br>
                            <img src="https://www.manilaonsale.com/wp-content/uploads/2018/08/Nike-Factory-Store-1.jpg" alt="Nature" class="responsive" width="600" height="">
                        </ul>
                    </nav>
                    </div>

         </section>
    </div>
      <div class="selling items">
        {{-- top selling items --}}
        @include('body.top_selling_items')
    </body>
        <footer>
            @include('body.footer')
        </footer>
</div>





</html>
