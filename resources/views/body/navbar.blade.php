<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    /*
 * Plugin: Web Slide Navigation System
 * Demo Link: http://webslidemenu.uxwing.com/
 * Author: UXWing
 * License: http://codecanyon.net/licenses/standard
*/

/*--------------------------------------------------------------------------
[Table of contents]

01 Base CSS
02 Desktop CSS
03 Tab CSS
04 Mobile CSS
05 Additional Themes (Optionnal)
--------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------
|  01  Base CSS
--------------------------------------------------------------------------*/
.wsmenu * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
}

.wsmain html, .wsmain body, .wsmain iframe, .wsmain h1, .wsmain h2, .wsmain h3, .wsmain h4, .wsmain h5, .wsmain h6 {
  margin: 0px;
  padding: 0px;
  border: 0px;
  font: inherit;
  vertical-align: baseline;
  font-weight: normal;
  font-size: 12px;
  line-height: 18px;
  font-family: Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: subpixel-antialiased;
  font-smoothing: antialiased;
  font-smooth: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-font-smoothing: subpixel-antialiased !important;
  font-smoothing: subpixel-antialiased !important;
  font-smooth: subpixel-antialiased;
}

.wsmain .cl {
  clear: both;
}

.wsmain img, object, embed, video {
  border: 0 none;
  max-width: 100%;
}

.wsmain a:focus {
  outline: none !important;
}

.wsmain:before, .wsmain:after {
  content: "";
  display: table;
}

.wsmain:after {
  clear: both;
}

/*--------------------------------------------------------------------------
|  02 Desktop CSS
--------------------------------------------------------------------------*/

.wsmobileheader {
  display: none;
}

#overlapblackbg {
  display: none;
}

.smllogo {
  padding: 9px 0px 0px 0px;
  margin: 0;
  float: left;
  width: 5%;
}

.smllogo a {
  display: block;
  float: left;
  padding: 0px 0px 0px 0px;
}

.topmenusearch {
  float: right;
  width: 100%;
  height: 42px;
  position: relative;
  margin: 9px 0px 0px 0px;
}

.topmenusearch .searchicon {
  -webkit-transition: all 0.7s ease 0s;
  -moz-transition: all 0.7s ease 0s;
  -o-transition: all 0.7s ease 0s;
  transition: all 0.7s ease 0s;
}

.topmenusearch input {
  width: 100%;
  position: relative;
  float: right;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  border: 0;
  padding: 0;
  margin: 0;
  text-indent: 15px;
  font-size: 12px;
  height: 42px;
  z-index: 2;
  outline: none;
  color: #7d7d7d;
  background-color: #e9ebef;
  -webkit-transition: all 0.7s ease 0s;
  -moz-transition: all 0.7s ease 0s;
  -o-transition: all 0.7s ease 0s;
  transition: all 0.7s ease 0s;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
}

.topmenusearch input:focus {
  color: #000;
}

.topmenusearch input:focus~.btnstyle {
  background-color: #424242;
  color: #fff;
  opacity: 0.9;
}

.topmenusearch input:focus~.btnstyle .fa {
  color: #fff;
}

.topmenusearch input:focus~.searchicon {
  opacity: 1;
  z-index: 3;
  color: #FFFFFF;
}

.topmenusearch .btnstyle {
  top: 0px;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 49px;
  line-height: 30px;
  z-index: 1;
  cursor: pointer;
  color: #fff;
  z-index: 1000;
  background-color: #eeeeee;
  border: solid 0px;
  -webkit-transition: all 0.7s ease 0s;
  -moz-transition: all 0.7s ease 0s;
  -o-transition: all 0.7s ease 0s;
  transition: all 0.7s ease 0s;
  -webkit-border-radius: 0px 2px 2px 0px;
  -moz-border-radius: 0px 2px 2px 0px;
  border-radius: 0px 2px 2px 0px;
}

.topmenusearch .btnstyle .fa {
  line-height: 38px;
  margin: 0;
  padding: 0;
  text-align: center;
  color: #9c9c9c;
}

.topmenusearch .btnstyle:hover {
  background-color: #fff;
}

.wsmain {
  width: 100%;
  margin: 0 auto;
  padding: 0px 0px;
  max-width: 1300px;
}

.wsmenu {
  position: relative;
  font-family: Helvetica, sans-serif;
  font-size: 14px;
  padding: 0px 0px 0px 0px;
  margin: 0px auto;
  width: 95%;
  float: left;
  height: 60px;
  border-left: 1px solid rgba(0, 0, 0, 0.1);
}

.wsmenu-list {
  text-align: left;
  margin: 0 auto 0 auto;
  width: 100%;
  display: block;
  padding: 0px;
}

.wsmenu-list>li {
  text-align: center;
  display: block;
  margin: 0px;
  padding: 0px;
  float: left;
}

.wsmenu-list>.wscarticon>a .fa.fa-shopping-basket {
  display: inline-block;
  font-size: 16px;
  line-height: inherit;
  margin-right: 5px;
  color: #7b7b7b;
}

.wsmenu-list>.wsshopmenu>a .fa.fa-angle-down {
  display: inline-block;
  font-size: 13px;
  line-height: inherit;
  margin-left: 11px;
  color: #7b7b7b;
}

.wsmenu-list li ul li a .fa.fa-angle-double-right {
  font-size: 12px;
  margin: 0 3px 0 -4px;
}

.wsmenu-list>li>a {
  display: block;
  color: #828181;
  padding: 0 26px 0 22px;
  line-height: 58px;
  text-decoration: none;
  position: relative;
}

.wsmenu-list>li:hover>a {
  color: #000;
}

.wsmenu-list>li>.navtext {
  line-height: 16px;
  text-align: right;
  padding: 14px 16px;
  margin: 0 10px;
}

.wsmenu-list>li>.navtext>span+span:after {
  color: #9e9e9e;
  content: "\f107";
  display: inline-block;
  font-family: "FontAwesome";
  font-size: 14px;
  font-weight: 100;
  line-height: 10px;
  margin-left: 1px;
  position: relative;
  right: -8px;
  text-align: right;
  top: 1px;
}

.wsmenu-list>li>.navtext>span {
  display: block;
  font-size: 11px;
  text-align: left;
  white-space: nowrap;
  width: 100%;
  line-height: 16px;
  color: #9e9e9e;
}

.wsmenu-list>li>.navtext>span+span {
  white-space: nowrap;
  font-size: 12px;
  font-weight: bold;
  color: #555555;
}

.wsmenu-list li a:hover .arrow:after {
  border-top-color: #b3b3b3
}

.wsmenu-list li a.active .arrow:after {
  border-top-color: #b3b3b3
}

.wsmenu-list li:hover>a .arrow:after {
  border-top-color: #b3b3b3
}

.megamenu iframe {
  width: 100%;
  margin-top: 10px;
  min-height: 200px;
}

.megamenu video {
  width: 100%;
  margin-top: 10px;
  min-height: 200px;
}

.wsmenu-list>li.socialicon {
  float: left;
}

.wsmenu-list>li.socialicon a {
  width: 38px;
  padding: 0px 10px
}

.wsmenu-list>li.socialicon a .fa {
  font-size: 15px;
  color: #898d91;
  text-align: center;
}

.wsmenu-list>li.wsshopmyaccount {
  float: right;
}

.wsmenu-list>.wsshopmyaccount>a .fa.fa-angle-down {
  display: inline-block;
  font-size: 13px;
  line-height: inherit;
  margin-left: 8px;
  color: #7b7b7b;
}

.wsmenu-list>.wsshopmyaccount>a .fa.fa-align-justify {
  display: inline-block;
  font-size: 16px;
  line-height: inherit;
  margin-right: 11px;
  color: #7b7b7b;
}

.wsmenu-list>li.wssearchbar {
  width: 41%;
  float: left;
  padding-left: 15px;
}

.wsmenu-list>li.wscarticon {
  float: right;
  clear: right;
}

.wsmenu-list>li.wscarticon a {
  padding: 0px 27px 0px 22px;
  text-align: center;
  border-left: 1px solid rgba(0, 0, 0, 0.1);
  border-right: 1px solid rgba(0, 0, 0, 0.1);
}

.mobiletext {
  display: none;
}

.wsmenu-list>li.wscarticon a .fa {
  font-size: 15px;
}

.wsmenu-list>li.wscarticon em.roundpoint {
  position: absolute;
  top: 14px;
  right: 21px;
  width: 17px;
  height: 17px;
  background-color: #DA4B38;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  font-size: 9px;
  text-align: center;
  font-style: normal;
  line-height: 16px !important;
  color: #fff;
}

.wsmenu-list li>.wsmenu-submenu {
  transform: translateY(35px);
  transition: all .3s ease;
  visibility: hidden;
}

.wsmenu-list li:hover>.wsmenu-submenu {
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}

.wsmenu-submenu li>.wsmenu-submenu-sub {
  transform: translateY(35px);
  transition: all .3s ease;
  visibility: hidden;
}

.wsmenu-submenu li:hover>.wsmenu-submenu-sub {
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}

.wsmenu-submenu-sub li>.wsmenu-submenu-sub-sub {
  transform: translateY(35px);
  transition: all .3s ease;
  visibility: hidden;
}

.wsmenu-submenu-sub li:hover>.wsmenu-submenu-sub-sub {
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}

.wsmenu-list li>.megamenu {
  transform: translateY(35px);
  transition: all .3s ease;
  visibility: hidden;
}

.wsmenu-list li:hover>.megamenu {
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}

.wsmenu-submenu {
  position: absolute;
  min-width: 176px;
  top: 58px;
  z-index: 1000;
  margin: 0px;
  padding: 0px;
  border: solid 1px #eeeeee;
  background-color: #fff;
  opacity: 0;
  -o-transform-origin: 0% 0%;
  -ms-transform-origin: 0% 0%;
  -moz-transform-origin: 0% 0%;
  -webkit-transform-origin: 0% 0%;
  -o-transition: -o-transform 0.3s, opacity 0.3s;
  -ms-transition: -ms-transform 0.3s, opacity 0.3s;
  -moz-transition: -moz-transform 0.3s, opacity 0.3s;
  -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
}

.wsmenu-submenu li a {
  background: #fff !important;
  background-image: none !important;
  color: #666666 !important;
  border-right: 0 none !important;
  text-align: left;
  display: block;
  line-height: 22px;
  padding: 8px 12px;
  text-transform: none;
  font-size: 12px;
  letter-spacing: normal;
  border-right: 0px solid;
  border-bottom: 1px solid #f5f5f5;
}

.wsmenu-submenu li {
  position: relative;
  margin: 0px;
  padding: 0px;
}

.wsmenuexpandermain {
  display: none;
}

.wsmenu-list li:hover .wsmenu-submenu {
  display: block;
}

.wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub {
  min-width: 220px;
  position: absolute;
  left: 100%;
  top: 0;
  margin: 0px;
  padding: 0px;
  opacity: 0;
  -o-transform-origin: 0% 0%;
  -ms-transform-origin: 0% 0%;
  -moz-transform-origin: 0% 0%;
  -webkit-transform-origin: 0% 0%;
  -o-transition: -o-transform 0.4s, opacity 0.4s;
  -ms-transition: -ms-transform 0.4s, opacity 0.4s;
  -moz-transition: -moz-transform 0.4s, opacity 0.4s;
  -webkit-transition: -webkit-transform 0.4s, opacity 0.4s;
}

.wsmenu-list .wsmenu-submenu li:hover .wsmenu-submenu-sub {
  opacity: 1;
  list-style: none;
  padding: 0px;
  border: solid 1px #eeeeee;
  background-color: #fff;
}

.wsmenu-list .wsmenu-submenu li:hover .wsmenu-submenu-sub {
  display: block;
}

.wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub .wsmenu-submenu-sub-sub {
  min-width: 220px;
  position: absolute;
  left: 100%;
  top: 0;
  margin: 0px;
  padding: 0px;
  opacity: 0;
  -o-transform-origin: 0% 0%;
  -ms-transform-origin: 0% 0%;
  -moz-transform-origin: 0% 0%;
  -webkit-transform-origin: 0% 0%;
  -o-transition: -o-transform 0.4s, opacity 0.4s;
  -ms-transition: -ms-transform 0.4s, opacity 0.4s;
  -moz-transition: -moz-transform 0.4s, opacity 0.4s;
  -webkit-transition: -webkit-transform 0.4s, opacity 0.4s;
}

.wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub li:hover .wsmenu-submenu-sub-sub {
  opacity: 1;
  list-style: none;
  padding: 0px;
  border: solid 1px #eeeeee;
  background-color: #fff;
}

.wsmenu-submenu li {
  position: relative;
  padding: 0px;
  margin: 0px;
  display: block;
}

.wsmenu-click {
  display: none;
}

.wsmenu-click02 {
  display: none;
}

.wsmenu-submenu .fa {
  margin-right: 11px;
  font-size: 15px;
}

.carousel-control i.fa {
  top: 48%;
  position: absolute;
  font-size: 33px;
  margin-left: -5px;
}

.carousel-inner .carousel-caption h3 {
  font-size: 18px;
  font-weight: bold;
}

.wsshopmenu span {
  font-weight: bold;
}

.wsmenu-list>.wsshopmenu>a .fa.fa-shopping-basket {
  display: inline-block;
  font-size: 13px;
  line-height: inherit;
  margin-right: 8px;
  color: #7b7b7b;
}

.wtsdepartmentmenu {
  background: #fff;
  border-bottom: solid 1px #d1d3d4;
}

.wtsbrandmenu {
  background: #ffffff;
  border-bottom: solid 1px #d1d3d4;
}

.wsmenu-list li:hover .megamenu {
  opacity: 1;
}

.megamenu {
  width: 100%;
  left: 0px;
  position: absolute;
  top: 60px;
  color: #000;
  z-index: 1000;
  margin: 0px;
  text-align: left;
  padding: 8px;
  font-size: 15px;
  border: solid 1px #eeeeee;
  background-color: #fff;
  opacity: 0;
  -o-transform-origin: 0% 0%;
  -ms-transform-origin: 0% 0%;
  -moz-transform-origin: 0% 0%;
  -webkit-transform-origin: 0% 0%;
  -o-transition: -o-transform 0.3s, opacity 0.3s;
  -ms-transition: -ms-transform 0.3s, opacity 0.3s;
  -moz-transition: -moz-transform 0.3s, opacity 0.3s;
  -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
}

.megamenu .title {
  border-bottom: 1px solid #CCC;
  font-size: 14px;
  padding: 9px 5px 9px 0px;
  font-size: 17px;
  color: #424242;
  margin: 0px 0px 7px 0px;
  text-align: left;
  height: 39px;
  margin: 0px 0px 10px 0px;
}

.halfmenu {
  width: 40%;
  right: auto !important;
  left: auto !important;
}

.halfmenu .megacollink {
  width: 48%;
  float: left;
  margin: 0% 1%;
}

.halfdiv {
  width: 30%;
  right: auto;
  left: auto;
}

.halfdiv03 {
  width: 25%;
  right: auto;
  left: auto;
}

.wsshoptabing {
  width: 100%;
  text-align: left;
  margin: 0px;
  padding: 0px;
  position: absolute;
  top: 60px;
  background-color: #f8f8f8;
  left: 0;
  border-bottom: solid 2px #376cb7;
  border: solid 1px #f1f1f1;
  border-top: solid 0px;
  visibility: hidden;
  opacity: 0;
  z-index: 101;
  transform: translateY(35px);
  transition: all .3s ease;
}

.btnlearn {
  font-size: 15px;
  text-align: center;
  line-height: 44px;
  height: 44px;
  display: block;
  float: left;
  padding: 0px 15px;
  background-color: #0056b9;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  color: #fff;
  font-family: Verdana, Geneva, sans-serif;
  font-weight: bold;
  margin-top: 5px;
}

.btnlearn:hover {
  color: #fff;
  text-decoration: none;
}

.wstitemright {
  /*min-height:100%;*/
  opacity: 0;
  visibility: hidden;
  position: absolute;
  right: 0px;
  top: 0px;
  background-color: #f8f8f8;
  color: #000;
  display: block;
  float: left;
  padding: 10px 8px 0px 8px;
  width: 77%;
  min-height: 400px;
}

.wstabitem {
  display: block;
  margin: 0px;
  padding: 0px;
  font-size: 12px;
}

.wstabitem>li {
  width: 100%;
  list-style: none;
}

.wstbootslider {
  width: 276px;
  float: right;
  margin-top: 8px;
}

.wstmegamenucolr {
  width: 276px;
  display: block;
  float: right;
  margin-top: 8px;
}

.wstabitem li:before, .wstabitem li:after {
  content: "";
  display: table;
}

.wstabitem li:after {
  clear: both;
}

/*.wsmenu-list > li:hover > .wsshoptabing > .wstabitem li.wsshoplink-active .wstitemright{opacity: 1; visibility: visible;}*/

.wsmenu-list>li:hover>.wsshoptabing .wsshopwp>.wstabitem li.wsshoplink-active .wstitemright {
  opacity: 1;
  visibility: visible;
}

.wsshoptabing>.wsshopwp {
  width: 100%;
  display: block;
  position: relative;
}

.wstabitem>li>a {
  display: block;
  padding: 15px 11px;
  font-size: 13px;
  color: #606060;
  border-bottom: solid 1px #e5e5e5;
  width: 23%;
  float: left;
  position: relative;
  border-left: 3px solid #fff;
  background-color: #fff;
}

.wstabitem>li:hover a {
  text-decoration: none;
}

.wstabitem .wsshoplink-active a {
  text-decoration: none;
}

.wstabitem>li:hover>a {
  text-decoration: none;
}

.wstabitem>li>a .fa {
  color: #848484;
  margin-right: 5px;
  text-align: center;
  width: 25px;
  font-size: 16px;
}

.wstheading {
  width: 100%;
  display: block;
  padding: 10px 0px 6px 0px;
  font-size: 12px;
  font-weight: bold;
  color: #333333;
  border-bottom: solid 1px #d9d9d9;
  margin-bottom: 12px;
  text-transform: uppercase;
}

.wstliststy01 {
  padding: 0px 0px 8px 0px;
  margin: 0px;
}

.wstliststy01 li {
  width: 33.33%;
  float: left;
  line-height: 23px;
  font-size: 14px;
  list-style: none;
  padding: 0px 0px 0px 0px;
  margin: 0px;
}

.wstliststy01 li a {
  color: #6e6e6e;
  font-size: 12px;
}

.wstliststy01 li a:hover {
  color: #000;
  text-decoration: none;
}

.wstinnerwp {
  height: auto;
  position: relative;
  width: 100%;
}

.wstinnerwp:before, .wstinnerwp:after {
  content: "";
  display: table;
}

.wstinnerwp:after {
  clear: both;
}

.wstliststy02 {
  padding: 5px 0px 10px 0px;
  margin: 0px;
  text-align: left;
}

.wstliststy02 li {
  width: 100%;
  list-style: none;
  line-height: 25px;
}

.wstliststy02 li a {
  color: #6e6e6e;
  font-size: 12px;
}

.wstliststy02 li a:hover {
  color: #000;
  text-decoration: none;
}

.wstliststy02 li.wstheading {
  line-height: normal;
  padding-left: 0px;
  margin-top: 0px;
}

.wstliststy02 li a .wstcount {
  font-size: 10px;
  color: #adadad;
}

.wstliststy06 li.wstheading {
  line-height: normal;
  padding-left: 0px;
}

.wstliststy06 {
  padding: 0px 0px 0px 0px;
  margin: 0px;
}

.wstliststy06 li {
  width: 100%;
  list-style: none;
  line-height: 24px;
}

.wstliststy06 li a {
  color: #6e6e6e;
  font-size: 12px;
}

.wstliststy06 li a:hover {
  color: #000;
  text-decoration: none;
}

.wstliststy06 li.wstheading {
  line-height: normal;
}

.wstliststy06 li a .wstcount {
  font-size: 10px;
  color: #adadad;
}

.wstliststy03 {
  width: 100%;
  padding: 0px 0px 8px 0px;
  margin: 0px;
}

.wstliststy03 li {
  width: 33.33%;
  float: left;
  line-height: 23px;
  font-size: 14px;
  list-style: none;
  padding: 0px 0px 0px 0px;
  margin: 0px;
}

.wstliststy03 li a {
  color: #6e6e6e;
  font-size: 12px;
}

.wstliststy03 li a:hover {
  color: #000;
  text-decoration: none;
}

.wstliststy04 {
  padding: 14px 0px 0px 0px;
  margin: 0px;
}

.wstliststy04 li {
  width: 100%;
  list-style: none;
  line-height: 22px;
}

.wstliststy04 li a {
  color: #6e6e6e;
  font-size: 12px;
}

.wstliststy04 li a:hover {
  color: #000;
  text-decoration: none;
}

.wstliststy04 li.wstheading {
  line-height: normal;
  text-align: center;
  padding: 12px 0px;
  font-size: 13px;
  margin-bottom: 12px;
}

.wstliststy04 li a .wstcount {
  font-size: 10px;
  color: #adadad;
}

.wstliststy05 {
  padding: 10px 0px 0px 0px;
  margin: 0px;
}

.wstmegamenucolr03 {
  padding-top: 10px;
  padding-left: 20px;
}

.wstliststy05 li {
  width: 100%;
  list-style: none;
  line-height: 25px;
}

.wstliststy05 li a {
  color: #6e6e6e;
  font-size: 12px;
}

.wstliststy05 li a:hover {
  color: #000;
  text-decoration: none;
}

.wstliststy05 li.wstheading {
  line-height: normal;
}

.wstliststy05 li a .wstcount {
  font-size: 10px;
  color: #adadad;
}

.wstmorebtn {
  border-radius: 2px;
  color: #9b9b9b;
  display: inline-block;
  float: right;
  font-size: 10px;
  font-weight: normal;
  letter-spacing: 0;
  padding: 1px 7px;
  text-align: right;
  text-transform: none;
}

.wstmenutag {
  height: 18px;
  line-height: 18px;
  text-align: center;
  font-size: 11px;
  color: #fff;
  border-radius: 2px;
  position: relative;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: normal;
  padding: 1px 6px 1px 6px;
  margin-left: 6px;
  text-transform: none;
  letter-spacing: -0.0px;
}

.wstmenutag:after {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-image: none;
  border-style: solid;
  border-width: 3px;
  content: "";
  left: -6px;
  margin-top: 0px;
  position: absolute;
  top: 4px;
  z-index: 1;
}

.wstmenutag.redtag {
  background-color: #fe7b8f;
}

.wstmenutag.redtag:after {
  border-color: transparent #fe7b8f transparent transparent;
}

.wstmenutag.greentag {
  background-color: #00c853;
}

.wstmenutag.greentag:after {
  border-color: transparent #00c853 transparent transparent;
}

.wstmenutag.bluetag {
  background-color: #4fc3f7;
}

.wstmenutag.bluetag:after {
  border-color: transparent #4fc3f7 transparent transparent;
}

.wstmenutag.orangetag {
  background-color: #FE7000;
}

.wstmenutag.orangetag:after {
  border-color: transparent #FE7000 transparent transparent;
}

.kitchenmenuimg {
  background-image: url(../images/kitchen-menu-img.png);
  background-position: bottom right;
  background-repeat: no-repeat;
}

.computermenubg {
  background-image: url(../images/computer-menu-img.png);
  background-position: bottom right;
  background-repeat: no-repeat;
}

.wstpngsml {
  padding-left: 18px;
}

.wstfullwtag {
  width: 100%;
  display: block;
  border-bottom: solid 1px #e5e5e5;
  background-color: #f5f5f5;
}

.wstbrandbottom {
  width: 100%;
  background-color: #fff;
  display: block;
  opacity: 0;
  position: absolute;
  right: 0;
  visibility: hidden;
  padding: 9px 6px;
}

.wsmenu-list>li:hover>.wtsbrandmenu>.wsshoptabingwp>.wstabitem02>li.wsshoplink-active>.wstbrandbottom {
  opacity: 1;
  visibility: visible;
}

.wstabitem02 {
  width: 100%;
  padding: 0px;
  margin: 0px 0px;
  list-style: none;
  display: table;
}

.wstabitem02>li {
  display: table-cell;
  list-style: outside none none;
  text-align: center;
}

.wstabitem02>li>a {
  display: block;
  padding: 14px 0px;
  font-size: 13px;
  color: #606060;
  background-color: #f4f4f4;
  border-bottom: 1px solid #e5e5e5;
  position: relative;
}

.wstabitem02>li:hover a {
  text-decoration: none;
  -webkit-border-radius: 4px 0px 0px 4px;
  -moz-border-radius: 4px 0px 0px 4px;
  border-radius: 4px 0px 0px 4px;
}

.wstabitem02>.wsshoplink-active a {
  text-decoration: none;
  -webkit-border-radius: 4px 0px 0px 4px;
  -moz-border-radius: 4px 0px 0px 4px;
  border-radius: 4px 0px 0px 4px;
}

.wstabitem02>li:hover a {
  text-decoration: none;
  -webkit-border-radius: 4px 0px 0px 4px;
  -moz-border-radius: 4px 0px 0px 4px;
  border-radius: 4px 0px 0px 4px;
}

.wstabitem02>li>a .fa {
  /*color: #848484;*/
  margin-right: 5px;
  text-align: center;
  width: 25px;
  font-size: 17px;
}

.brandcolor01 {
  color: #424242;
}

.brandcolor02 {
  color: #00bcf2;
}

.brandcolor03 {
  color: #00aff0;
}

.brandcolor04 {
  color: #003087;
}

.brandcolor05 {
  color: #a82400;
}

.brandcolor06 {
  color: #ff3300;
}

.brandcolor07 {
  color: #7ac142;
}

.brandcolor08 {
  color: #ef4056;
}

/*--------------------------------------------------------------------------
|  03 Tab CSS
--------------------------------------------------------------------------*/

@media only screen and (min-width: 1024px) and (max-width:1280px) {
  .kitchenmenuimg {
    background-image: none;
  }
  .computermenubg {
    background-image: none;
  }
  .wsmenu-list li a .arrow:after {
    display: none !important;
  }
  .wsmenu-list>li>a {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
  .wsmain {
    width: 96%;
    margin-left: 2%;
    margin-right: 2%;
  }
  .menu_form input[type="submit"] {
    width: 40% !important;
  }
  .menu_form input[type="button"] {
    width: 40% !important;
  }
  .wsshoptabingwp {
    width: 96%;
    margin: 0% 2%;
  }
  .wstliststy01 li {
    width: 50%;
  }
  .wstadsize01 {
    margin-top: 10px;
  }
  .wstadsize02 {
    margin-top: 10px;
  }
  .wstadsize01 img {
    width: 100%;
  }
  .wstadsize02 img {
    width: 100%;
  }
  .wstliststy02>li>img {
    display: none;
  }
  .wstliststy03 li {
    width: 50%;
  }
  .wstliststy04>li>img {
    width: 100%;
  }
  .wssearchbar {
    width: 31% !important;
  }
}

@media only screen and (min-width:992px) and (max-width:1023px) {
  .wstliststy06 {
    width: 100%;
    margin: 0px;
  }
  .smllogo {
    padding: 13px 6px 0px 0px;
  }
  .wsmenu-list li a .arrow:after {
    display: none;
  }
  .wsmenu-list>li>a {
    white-space: nowrap !important;
    padding-left: 11px !important;
    padding-right: 11px !important;
  }
  .wsmain {
    width: 96%;
    margin-left: 2%;
    margin-right: 2%;
  }
  .wsmenu-list>li.socialicon {
    display: none !important;
  }
  .megacollink {
    width: 48%;
    margin: 1% 1%;
  }
  .typographylinks {
    width: 48%;
    margin: 1% 1%;
  }
  .menu_form input[type="submit"] {
    width: 40% !important;
  }
  .menu_form input[type="button"] {
    width: 40% !important;
  }
  .wsmenu-list>li>a .fa {
    display: none;
  }
  .wsmenu-list>li>a .fa.fa-home {
    display: block !important;
  }
  .halfmenu .megacollink {
    width: 100%;
    margin: 0px;
  }
  .wsshoptabingwp {
    width: 96%;
    margin: 0% 2%;
  }
  .wstliststy01 li {
    width: 100%;
  }
  .wstadsize01 img {
    width: 100%;
  }
  .wstadsize02 img {
    width: 100%;
  }
  .wstliststy02>li>img {
    display: none;
  }
  .wstliststy03 li {
    width: 50%;
  }
  .wstliststy04>li>img {
    width: 100%;
  }
  .wstmegamenucolr03 {
    display: none;
  }
  .wssearchbar {
    width: 20% !important;
  }
  .kitchenmenuimg {
    background-image: none;
  }
  .computermenubg {
    background-image: none;
  }
  .wstabitem li a .fa {
    display: none;
  }
}

@media only screen and (min-width: 992px) {
  .wsmenu-list li:hover>.wsmenu-submenu {
    display: block !important;
  }
  .wsmenu-submenu li:hover>.wsmenu-submenu-sub {
    display: block !important;
  }
  .wsmenu-submenu-sub li:hover>.wsmenu-submenu-sub-sub {
    display: block !important;
  }
  .wsmenu-list li:hover>.megamenu {
    display: block !important;
  }
  .wsmenu-list>li:hover .wsshoptabing {
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
  }
  .wstabitem>li.wsshoplink-active>a {
    background-color: #f8f8f8;
    color: #555555;
    border-left: 3px solid #DA4B38;
  }
  .wstabitem>li.wsshoplink-active>a>.fa {
    color: #555555;
  }
  .wstabitem02>.wsshoplink-active>a:after {
    position: absolute;
    content: '';
    top: 42px;
    right: 50%;
    width: 13px;
    height: 13px;
    transform: rotate(225deg);
    -webkit-transform: rotate(225deg);
    -moz-transform: rotate(225deg);
    -o-transform: rotate(225deg);
    -ms-transform: rotate(225deg);
    border-right: 1px solid #dbdbdb;
    border-bottom: 1px solid #dbdbdb;
    z-index: 100;
    background-color: #ffffff;
  }
}

/*--------------------------------------------------------------------------
|  04 Mobile CSS
--------------------------------------------------------------------------*/

@media only screen and (max-width: 991px) {
  .wstbootslider {
    width: 239px;
  }
  .wstabitem>li {
    position: none;
  }
  .wstabitem>li>a {
    width: 100%;
    margin: 0px;
    float: none;
    font-size: 12px;
    padding: 14px 11px 14px 11px;
    font-weight: bold;
  }
  .wstheading {
    font-weight: normal;
    padding-left: 0px;
    padding-right: 0px;
  }
  .wstitemright {
    width: 100%;
    position: static;
    top: 0px;
    min-height: inherit;
    padding: 10px 0px;
    opacity: 1;
    visibility: visible;
    display: none;
  }
  .wstliststy01 li {
    width: 100%;
    padding: 0px;
    margin: 0px;
  }
  .wstliststy02 {
    width: 100%;
    padding: 0px;
    margin: 0px 0px 15px 0px;
  }
  .wstliststy03 li {
    width: 100%;
  }
  .wstliststy05 {
    width: 100%;
    padding: 0px;
    margin-bottom: 10px;
  }
  .kitchenmenuimg {
    background-image: none;
  }
  .computermenubg {
    background-image: none;
  }
  .wstbrandbottom {
    width: 100%;
    position: static;
    top: 0px;
    min-height: inherit;
    padding: 10px 5px 15px 5px;
    opacity: 1;
    visibility: visible;
    display: none;
  }
  .wstabitem02 li {
    position: relative;
  }
  .wstabitem02>li>a {
    padding: 13px 11px;
  }
  .megamenu li.wstheading {
    padding-left: 0px;
  }
  .wsmenu-list>li>.navtext {
    margin: 0px !important;
  }
  .wsmenu-list>li.wssearchbar {
    padding-left: 0px;
    display: table-header-group !important;
  }
  .wstabitem02 {
    display: block;
  }
  .wstabitem02 li {
    text-align: left;
    display: block;
  }
  .wsshoptabingwp {
    background-color: #fff;
    padding-left: 0px;
    padding-right: 0px;
  }
  .wsshopmyaccount>a>.fa-angle-down {
    display: none !important;
  }
  .wsmenu {
    margin-top: 0px;
  }
  .smllogo {
    display: none !important;
  }
  .wsmain {
    margin: 0px;
    background-color: transparent;
  }
  .topmenusearch {
    margin: 0px 0 0;
    width: 100%;
    height: 44px;
  }
  .topmenusearch input:focus {
    width: 100%;
    background-color: #fff;
    color: #000;
  }
  .topmenusearch input:hover {
    width: 100%;
    background-color: #fff;
    color: #000;
  }
  .topmenusearch input {
    border-radius: 0px !important;
    height: 44px;
    background-color: #f1f1f1;
  }
  .smllogo {
    width: 100%;
    display: none !important;
    margin: 0 auto;
    text-align: center;
    background-color: #2B3A40;
  }
  .smllogo a {
    margin: 0 auto;
    text-align: center;
    float: none;
    padding: 10px 0px 3px 0px;
  }
  .topmenusearch .btnstyle {
    height: 44px;
    color: #424242;
    border-radius: 0px;
  }
  .wsmenu-list .wsshoptabing {
    background-color: #ffffff;
    color: #666666;
    display: none;
    position: relative !important;
    top: 0px;
    padding: 0px;
    border: solid 0px;
    transform: none !important;
    opacity: 1 !important;
    visibility: visible !important;
  }
  .wstabitem {
    width: 100% !important;
    background-color: #fff;
  }
  .wstabitem li a:after {
    border: none !important;
  }
  .megamenuleftp {
    width: 100%;
    display: block;
    padding: 0px;
    margin: 0px;
  }
  .megamenurightp {
    width: 100%;
    display: block;
    padding: 0px;
    margin: 0px;
  }
  .wstabitem li a:after {
    position: absolute;
    content: '';
    top: 50%;
    margin-top: -6px;
    right: 23px;
    display: inline-block;
    border-top: 6px solid #3f464c;
    border-right: 6px solid transparent;
    border-left: 6px solid transparent;
    border-bottom: 6px solid transparent;
  }
  .wstabitem li a .fa {
    display: none;
  }
  .wsmenu-list li>.wsshoptabing {
    -o-transition: -o-transform 0.6s, opacity 0.6s;
    -ms-transition: -ms-transform 0.6s, opacity 0.6s;
    -moz-transition: -moz-transform 0.6s, opacity 0.6s;
    -webkit-transition: -webkit-transform 0.6s, opacity 0.6s;
    visibility: visible !important;
    opacity: 1 !important;
  }
  .wsmenucontainer {
    overflow: hidden;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }
  #overlapblackbg {
    left: 0;
    z-index: 102;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    background-color: rgba(0, 0, 0, 0.45);
    cursor: pointer;
  }
  .wsmenucontainer.wsoffcanvasopener {
    display: block;
    margin-left: 270px;
  }
  .wsmobileheader {
    display: block !important;
    position: relative;
    top: 0;
    right: 0;
    left: 0;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }
  .callusicon {
    color: #969696;
    font-size: 25px;
    height: 25px;
    position: fixed;
    right: 15px;
    top: 10px;
    transition: all 0.4s ease-in-out 0s;
    width: 25px;
    z-index: 102;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }
  .callusicon:focus, callusicon:hover {
    color: #fff !important;
  }
  .wsoffcanvasopener .callusicon {
    display: none !important;
  }
  .smallogo {
    width: 100%;
    display: block;
    text-align: center;
    padding-top: 9px;
    position: fixed;
    z-index: 101;
    width: 100%;
    height: 52px;
    background: #fff;
    box-shadow: 0 1px 4px rgba(0, 0, 0, .5);
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .5);
  }
  .smallogo>img {
    margin-top: 0px;
    height: 32px;
  }
  .wsmenu-list>li:hover>a {
    background-color: rgba(0, 0, 0, 0.08) !important;
    text-decoration: none;
  }
  .mobiletext {
    display: inline-block !important;
  }
  .wsoffcanvasopener #overlapblackbg {
    display: block !important;
  }
  .wsoffcanvasopener .wsmain {
    left: 0px;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }
  .wstmegamenucolr {
    max-width: 240px;
  }
  .wstmegamenucolr03 {
    display: none;
  }
  .wsmain {
    width: 270px;
    left: -270px;
    height: 100%;
    position: fixed;
    top: 0;
    margin: 0;
    float: none;
    background-color: #fff;
    border-radius: 0px;
    z-index: 103;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    border: none !important;
    background-color: #fff !important;
  }
  .wsmenu {
    border-left: none;
    float: none;
    width: 100%;
    display: block !important;
    height: 100%;
    overflow-y: auto;
    display: block !important;
  }
  .wstabitem02 li .wsmenu-click02 {
    border-left: 1px solid #e9e9e9;
  }
  .wstabitem02 li .wsmenu-click02 {
    background-color: #fff;
  }
  .wsmenu-click {
    border-left: 1px solid #e0e0e0;
    cursor: pointer;
    display: block;
    height: 57px;
    position: absolute;
    right: 0;
    top: 0;
    width: 49px;
    z-index: 10;
  }
  .wsmenu-click i {
    display: block;
    height: 23px;
    width: 25px;
    margin-top: 15px;
    margin-right: 13px;
    background-size: 25px;
    font-size: 21px;
    color: rgba(0, 0, 0, 0.25);
    float: right;
    text-align: center;
  }
  .wsmenu-click02 {
    border-left: 1px solid #f3f3f3;
    cursor: pointer;
    display: block;
    height: 45px;
    position: absolute;
    right: 0;
    top: 0;
    width: 49px;
    z-index: 10;
    background-color: #f3f3f3;
  }
  .wsmenu-click02 i {
    display: block;
    height: 23px;
    width: 34px;
    margin-top: 11px;
    margin-right: 8px;
    background-size: 25px;
    font-size: 21px;
    color: rgba(0, 0, 0, 0.25);
    float: right;
    text-align: center;
  }
  .ws-activearrow>i {
    transform: rotate(180deg);
  }
  .wsmenu-rotate {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
  }
  .animated-arrow {
    position: fixed;
    left: 0;
    top: 0;
    z-index: 102;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }
  .wsoffcanvasopener .animated-arrow {
    left: 270px;
  }
  .animated-arrow {
    cursor: pointer;
    padding: 13px 35px 16px 0px;
    margin: 10px 0 0 15px;
  }
  .animated-arrow span, .animated-arrow span:before, .animated-arrow span:after {
    cursor: pointer;
    height: 2px;
    width: 23px;
    background: #424242;
    position: absolute;
    display: block;
    content: '';
  }
  .animated-arrow span:before {
    top: -7px;
  }
  .animated-arrow span:after {
    bottom: -7px;
  }
  .animated-arrow span, .animated-arrow span:before, .animated-arrow span:after {
    transition: all 500ms ease-in-out;
  }
  .wsoffcanvasopener .animated-arrow span {
    background-color: transparent;
  }
  .wsoffcanvasopener .animated-arrow span:before, .animated-arrow.active span:after {
    top: 7px;
  }
  .wsoffcanvasopener .animated-arrow span:before {
    transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    bottom: 0px;
  }
  .wsoffcanvasopener .animated-arrow span:after {
    transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }
  .megacollink {
    width: 96% !important;
    margin: 0% 2% !important;
  }
  .megacolimage {
    width: 90% !important;
    margin: 0% 5% !important;
  }
  .typographylinks {
    width: 98% !important;
    margin: 0% 1% !important;
  }
  .typographydiv {
    width: 86% !important;
    margin: 0% 7% !important;
  }
  .mainmapdiv {
    width: 90% !important;
    margin: 0% 5% !important;
  }
  .innerpnd {
    padding: 0px !important;
  }
  .typography-text {
    padding: 10px 0px;
  }
  .wsmenu-list .megamenu {
    background-color: #e7e7e7;
    color: #666666;
    display: none;
    position: relative !important;
    top: 0px;
    padding: 0px;
    border: solid 0px;
    transform: none !important;
    opacity: 1 !important;
    visibility: visible !important;
  }
  .wsmenu-list li:hover .megamenu {
    display: none;
    position: relative !important;
    top: 0px;
  }
  .megamenu .title {
    color: #666666;
    font-size: 15px !important;
    padding: 10px 8px 10px 0px;
  }
  .megamenu>ul {
    width: 100% !important;
    margin: 0px;
    padding: 0px;
    font-size: 13px !important;
    min-height: 189px;
  }
  .megamenu>ul>li>a {
    padding: 9px 14px !important;
    line-height: normal !important;
    background-color: #e7e7e7 !important;
    color: #666666;
  }
  .ad-style {
    width: 100% !important;
  }
  .megamenu ul li.title {
    line-height: 26px;
    color: #666666;
    margin: 0px;
    font-size: 15px;
    padding: 7px 13px !important;
    border-bottom: 1px solid #ccc;
    background-color: transparent !important;
  }
  .wsmenu-submenu>li:hover>a {
    background-color: #7b7b7b;
    color: #666666;
  }
  .wsmenu>.wsmenu-list>li>a.active {
    color: #666666;
    background-color: rgba(0, 0, 0, 0.08);
  }
  .wsmenu>.wsmenu-list>li>a:hover {
    color: #666666;
    background-color: rgba(0, 0, 0, 0.08);
  }
  .wsmenu-list li:hover .wsmenu-submenu {
    display: none;
  }
  .wsmenu-list li:hover .wsmenu-submenu .wsmenu-submenu-sub {
    display: none;
  }
  .wsmenu-list .wsmenu-submenu .wsmenu-submenu-sub li:hover .wsmenu-submenu-sub-sub {
    display: none;
    list-style: none;
    padding: 2px;
    border: solid 1px #eeeeee;
    background-color: #fff;
  }
  .wsmenu-list li:first-child a {
    -webkit-border-radius: 0px 0px 0px 0px;
    -moz-border-radius: 0px 0px 0px 0px;
    border-radius: 0px 0px 0px 0px;
  }
  .wsmenu-list li:last-child a {
    -webkit-border-radius: 0px 4px 0px 0px;
    -moz-border-radius: 0px 0px 0px 0px;
    border-radius: 0px 0px 0px 0px;
    border-right: 0px solid;
  }
  .wsmenu-submenu-sub {
    width: 100% !important;
    position: static !important;
    left: 100% !important;
    top: 0 !important;
    display: none;
    margin: 0px !important;
    padding: 0px !important;
    border: solid 0px !important;
    transform: none !important;
    opacity: 1 !important;
    visibility: visible !important;
  }
  .wsmenu-submenu-sub li {
    margin: 0px 0px 0px 0px !important;
    padding: 0px;
    position: relative;
  }
  .wsmenu-submenu-sub a {
    display: block;
    padding: 10px 25px 10px 25px;
    border-bottom: solid 1px #ccc;
    font-weight: normal;
  }
  .wsmenu-submenu-sub li a.active {
    color: #000 !important;
  }
  .wsmenu-submenu-sub li:hover>a {
    background-color: #333333 !important;
    color: #fff;
  }
  .wsmenu>.wsmenu-list>li>a>.fa {
    font-size: 16px;
    color: #bfbfbf;
    margin-right: 11px;
    text-align: center;
    width: 19px;
  }
  .wsmenu-submenu-sub-sub {
    width: 100% !important;
    position: static !important;
    left: 100% !important;
    top: 0 !important;
    display: none;
    margin: 0px !important;
    padding: 0px !important;
    border: solid 0px !important;
    transform: none !important;
    opacity: 1 !important;
    visibility: visible !important;
  }
  .wsmenu-submenu-sub-sub li {
    margin: 0px 0px 0px 0px !important;
  }
  .wsmenu-submenu-sub-sub a {
    display: block;
    color: #000;
    padding: 10px 25px;
    background: #000 !important;
    border-bottom: solid 1px #ccc;
    font-weight: normal;
  }
  .wsmenu-submenu-sub-sub li a.active {
    color: #000 !important;
  }
  .wsmenu-submenu-sub-sub li:hover>a {
    background-color: #606060 !important;
    color: #fff;
  }
  .wsmenu .wsmenu-list {
    display: table !important;
  }
  .wsmenu .wsmenu-list>li {
    clear: left;
    width: 100%;
    display: block;
    float: none;
    border-right: none;
    background-color: transparent;
    position: relative;
    white-space: inherit;
  }
  .wsmenu>.wsmenu-list>li>a {
    padding: 13px 32px 13px 12px;
    font-size: 14px;
    text-align: left;
    border-right: solid 0px;
    background-color: transparent;
    color: #666666;
    line-height: 25px;
    border-bottom: 1px solid;
    border-bottom-color: rgba(0, 0, 0, 0.13);
    position: static;
  }
  .wsmenu>.wsmenu-list>li>a.wtxaccountlink {
    padding-bottom: 16px;
    padding-top: 16px;
  }
  .wsmenu .wsmenu-list li a .arrow:after {
    display: none !important;
  }
  .wsmenu .wsmenu-list li ul li a .fa.fa-caret-right {
    font-size: 12px !important;
    color: #8E8E8E;
  }
  .mobile-sub .wsmenu-submenu {
    transform: none !important;
    opacity: 1 !important;
    display: none;
    position: relative !important;
    top: 0px;
    background-color: #fff;
    border: solid 1px #ccc;
    padding: 0px;
    visibility: visible !important;
  }
  .mobile-sub .wsmenu-submenu li a {
    line-height: 20px;
    height: auto;
    background-color: #e7e7e7 !important;
    font-size: 13px !important;
    padding: 11px 0px 11px 14px;
    color: #8E8E8E;
  }
  .mobile-sub .wsmenu-submenu li a:hover {
    background-color: #e7e7e7 !important;
    color: #666666;
    text-decoration: underline;
  }
  .mobile-sub .wsmenu-submenu li:hover>a {
    background-color: #e7e7e7 !important;
    color: #666666;
  }
  .mobile-sub .wsmenu-submenu li .wsmenu-submenu-sub li a {
    line-height: 20px;
    height: 36px;
    background-color: #e7e7e7 !important;
    border-bottom: none;
    padding-left: 28px;
  }
  .mobile-sub .wsmenu-submenu li .wsmenu-submenu-sub li .wsmenu-submenu-sub-sub li a {
    line-height: 20px;
    height: 36px;
    background-color: #e7e7e7 !important;
    border-bottom: none !important;
    padding-left: 38px;
    color: #8e8e8e;
  }
  .wsmenu-list>li.socialicon a {
    width: 100%;
  }
  .wsmenu-list>li.wscarticon em.roundpoint {
    display: none;
  }
  .halfdiv .title {
    padding-left: 15px;
  }
  .halfdiv {
    width: 100%;
    display: block;
  }
  .halfdiv03 .title {
    padding-left: 15px;
  }
  .halfdiv03 {
    width: 100%;
  }
  .halfmenu {
    width: 100%;
    display: block;
  }
  .menu_form {
    padding: 10px 10px 63px 10px;
    background-color: #e7e7e7;
  }
  .menu_form input[type="button"] {
    width: 46%;
  }
  .menu_form input[type="submit"] {
    width: 46%;
  }
  .menu_form textarea {
    min-height: 100px;
  }
  .wsmenu-list li>.wsmenu-submenu {
    -o-transition: -o-transform 0.6s, opacity 0.6s;
    -ms-transition: -ms-transform 0.6s, opacity 0.6s;
    -moz-transition: -moz-transform 0.6s, opacity 0.6s;
    -webkit-transition: -webkit-transform 0.6s, opacity 0.6s;
    visibility: visible !important;
  }
  .wsmenu-list li:hover>.wsmenu-submenu {
    visibility: visible !important;
  }
  .wsmenu-submenu li>.wsmenu-submenu-sub {
    -o-transition: -o-transform 0.6s, opacity 0.6s;
    -ms-transition: -ms-transform 0.6s, opacity 0.6s;
    -moz-transition: -moz-transform 0.6s, opacity 0.6s;
    -webkit-transition: -webkit-transform 0.6s, opacity 0.6s;
    visibility: visible !important;
  }
  .wsmenu-submenu li:hover>.wsmenu-submenu-sub {
    visibility: visible !important;
    opacity: 1 !important;
  }
  .wsmenu-submenu-sub li>.wsmenu-submenu-sub-sub {
    -o-transition: -o-transform 0.6s, opacity 0.6s;
    -ms-transition: -ms-transform 0.6s, opacity 0.6s;
    -moz-transition: -moz-transform 0.6s, opacity 0.6s;
    -webkit-transition: -webkit-transform 0.6s, opacity 0.6s;
    visibility: visible !important;
    opacity: 1 !important;
  }
  .wsmenu-submenu-sub li:hover>.wsmenu-submenu-sub-sub {
    visibility: visible !important;
    opacity: 1 !important;
  }
  .wsmenu-list li>.megamenu {
    -o-transition: -o-transform 0.6s, opacity 0.6s;
    -ms-transition: -ms-transform 0.6s, opacity 0.6s;
    -moz-transition: -moz-transform 0.6s, opacity 0.6s;
    -webkit-transition: -webkit-transform 0.6s, opacity 0.6s;
    visibility: visible !important;
    opacity: 1 !important;
  }
  .wsmenu-list li:hover>.megamenu {
    visibility: visible !important;
    opacity: 1 !important;
  }
}

/*--------------------------------------------------------------------------
|  05 Additional Themes (Optionnal)
--------------------------------------------------------------------------*/

.gry {
  background-color: #424242 !important;
  color: #fff;
}

.red {
  background-color: #DA4B38 !important;
  color: #fff;
}

.orange {
  background-color: #ff9334 !important;
  color: #fff;
}

.blue {
  background-color: #31a8e6 !important;
  color: #fff;
}

.green {
  background-color: #27ae60 !important;
  color: #fff;
}

.yellow {
  background-color: #F6BB42 !important;
  color: #fff;
}

.purple {
  background-color: #967ADC !important;
  color: #fff;
}

.pink {
  background-color: #ff3366 !important;
  color: #fff;
}

.gry>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.gry>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.gry>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.gry>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.red>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.red>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.red>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.red>.wsmain>.wsmenu>.wsmenu-list>li>a .fa {
  color: #fff;
}

.red>.wsmain>.wsmenu>.wsmenu-list>li.wscarticon em.roundpoint {
  background-color: #424242 !important;
}

.red>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.orange>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.orange>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.orange>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.orange>.wsmain>.wsmenu>.wsmenu-list>li>a .fa {
  color: #fff;
}

.orange>.wsmain>.wsmenu>.wsmenu-list>li.wscarticon em.roundpoint {
  background-color: #424242 !important;
}

.orange>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.blue>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.blue>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.blue>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.blue>.wsmain>.wsmenu>.wsmenu-list>li>a .fa {
  color: #fff;
}

.blue>.wsmain>.wsmenu>.wsmenu-list>li.wscarticon em.roundpoint {
  background-color: #424242 !important;
}

.blue>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.green>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.green>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.green>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.green>.wsmain>.wsmenu>.wsmenu-list>li>a .fa {
  color: #fff;
}

.green>.wsmain>.wsmenu>.wsmenu-list>li.wscarticon em.roundpoint {
  background-color: #424242 !important;
}

.green>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.yellow>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #454545 !important;
}

.yellow>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #454545 !important;
}

.yellow>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #454545 !important;
}

.yellow>.wsmain>.wsmenu>.wsmenu-list>li>a .fa {
  color: #454545;
}

.yellow>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.purple>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.purple>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.purple>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.purple>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.purple>.wsmain>.wsmenu>.wsmenu-list>li>a .fa {
  color: #fff;
}

.purple>.wsmain>.wsmenu>.wsmenu-list>li.wscarticon em.roundpoint {
  background-color: #424242 !important;
}

.pink>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.pink>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.pink>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.pink>.wsmain>.wsmenu>.wsmenu-list>li>a .fa {
  color: #fff;
}

.pink>.wsmain>.wsmenu>.wsmenu-list>li.wscarticon em.roundpoint {
  background-color: #424242 !important;
}

.pink>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.tranbg {
  background-color: transparent !important;
}

.whitebg {
  background-color: #fff !important;
}

.whitebg:hover {
  color: #000 !important;
}

.pm_buttoncolor .wsmenu-list>li>a .fa {
  color: #fff !important;
}

.pm_buttoncolor03 .wsmenu-list>li:hover>a .fa {
  color: #fff !important;
}

.pm_buttoncolor .wsmenu-list li a .arrow:after {
  border-top-color: #fff;
}

.blue-grdt {
  background: #5999ee;
  background: -moz-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5999ee), color-stop(100%, #4a89dc));
  background: -webkit-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
  background: -o-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
  background: -ms-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5999ee', endColorstr='#4a89dc', GradientType=0);
  color: #fff;
}

.gry-grdt {
  background: #565656;
  background: -moz-linear-gradient(top, #565656 0%, #424242 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #565656), color-stop(100%, #424242));
  background: -webkit-linear-gradient(top, #565656 0%, #424242 100%);
  background: -o-linear-gradient(top, #565656 0%, #424242 100%);
  background: -ms-linear-gradient(top, #565656 0%, #424242 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#565656', endColorstr='#424242', GradientType=0);
  color: #fff;
}

.green-grdt {
  background: #86ba3d;
  background: -moz-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #86ba3d), color-stop(100%, #74a52e));
  background: -webkit-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
  background: -o-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
  background: -ms-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#86ba3d', endColorstr='#74a52e', GradientType=0);
  color: #fff;
}

.red-grdt {
  background: #f05c48;
  background: -moz-linear-gradient(top, #f05c48 0%, #da4b38 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f05c48), color-stop(100%, #da4b38));
  background: -webkit-linear-gradient(top, #f05c48 0%, #da4b38 100%);
  background: -o-linear-gradient(top, #f05c48 0%, #da4b38 100%);
  background: -ms-linear-gradient(top, #f05c48 0%, #da4b38 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f05c48', endColorstr='#da4b38', GradientType=0);
  color: #fff;
}

.orange-grdt {
  background: #fc7d33;
  background: -moz-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fc7d33), color-stop(100%, #ff670f));
  background: -webkit-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
  background: -o-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
  background: -ms-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fc7d33', endColorstr='#ff670f', GradientType=0);
  color: #fff;
}

.yellow-grdt {
  background: #ffcd67;
  background: -moz-linear-gradient(top, #ffcd67 0%, #f6bb42 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcd67), color-stop(100%, #f6bb42));
  background: -webkit-linear-gradient(top, #ffcd67 0%, #ff670f 100%);
  background: -o-linear-gradient(top, #ffcd67 0%, #f6bb42 100%);
  background: -ms-linear-gradient(top, #ffcd67 0%, #f6bb42 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffcd67', endColorstr='#f6bb42', GradientType=0);
  color: #fff;
}

.purple-grdt {
  background: #a98ded;
  background: -moz-linear-gradient(top, #a98ded 0%, #967adc 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #a98ded), color-stop(100%, #967adc));
  background: -webkit-linear-gradient(top, #a98ded 0%, #967adc 100%);
  background: -o-linear-gradient(top, #a98ded 0%, #967adc 100%);
  background: -ms-linear-gradient(top, #a98ded 0%, #967adc 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a98ded', endColorstr='#967adc', GradientType=0);
  color: #fff;
}

.pink-grdt {
  background: #fb3ea4;
  background: -moz-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fb3ea4), color-stop(100%, #f21b8f));
  background: -webkit-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
  background: -o-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
  background: -ms-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fb3ea4', endColorstr='#f21b8f', GradientType=0);
  color: #fff;
}

.tranbg {
  background-color: transparent !important;
  box-shadow: none !important;
}

.red-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.red-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.red-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.red-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.gry-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.gry-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.gry-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.gry-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.blue-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.blue-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.blue-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.blue-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.green-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.green-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.green-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.green-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.orange-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.orange-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.orange-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.orange-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.yellow-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.yellow-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.yellow-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.yellow-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.purple-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.purple-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.purple-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.purple-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

.pink-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span {
  color: #fff !important;
}

.pink-grdt>.wsmain>.wsmenu>.wsmenu-list>li>.navtext>span+span:after {
  color: #fff !important;
}

.pink-grdt>.wsmain>.wsmenu>.wsmenu-list>li>a {
  color: #fff !important;
}

.pink-grdt>.wsmain>.wsmenu>.wsmenu-list li .wsmenu-click {
  border-color: rgba(0, 0, 0, 0.18) !important;
}

@media only screen and (max-width: 992px) {
  .tranbg {
    background-color: #fff !important;
  }
  .red-grdt>.wsmenu>.wsmenu-list>li>a>.fa {
    color: #fff !important;
  }
  .blue-grdt>.wsmenu>.wsmenu-list>li>a>.fa {
    color: #fff !important;
  }
  .orange-grdt>.wsmenu>.wsmenu-list>li>a>.fa {
    color: #fff !important;
  }
  .green-grdt>.wsmenu>.wsmenu-list>li>a>.fa {
    color: #fff !important;
  }
  .purple-grdt>.wsmenu>.wsmenu-list>li>a>.fa {
    color: #fff !important;
  }
  .pink-grdt>.wsmenu>.wsmenu-list>li>a>.fa {
    color: #fff !important;
  }
  .pm_buttoncolor>.wsmain>.wsmenu>.wsmenu-list>li>a {
    color: #fff;
  }
  .blue-grdt .wsmain {
    background: #5999ee;
    background: -moz-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5999ee), color-stop(100%, #4a89dc));
    background: -webkit-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
    background: -o-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
    background: -ms-linear-gradient(top, #5999ee 0%, #4a89dc 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5999ee', endColorstr='#4a89dc', GradientType=0);
    color: #fff;
  }
  .gry-grdt .wsmain {
    background: #565656;
    background: -moz-linear-gradient(top, #565656 0%, #424242 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #565656), color-stop(100%, #424242));
    background: -webkit-linear-gradient(top, #565656 0%, #424242 100%);
    background: -o-linear-gradient(top, #565656 0%, #424242 100%);
    background: -ms-linear-gradient(top, #565656 0%, #424242 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#565656', endColorstr='#424242', GradientType=0);
    color: #fff;
  }
  .green-grdt .wsmain {
    background: #86ba3d;
    background: -moz-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #86ba3d), color-stop(100%, #74a52e));
    background: -webkit-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
    background: -o-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
    background: -ms-linear-gradient(top, #86ba3d 0%, #74a52e 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#86ba3d', endColorstr='#74a52e', GradientType=0);
    color: #fff;
  }
  .red-grdt .wsmain {
    background: #f05c48;
    background: -moz-linear-gradient(top, #f05c48 0%, #da4b38 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f05c48), color-stop(100%, #da4b38));
    background: -webkit-linear-gradient(top, #f05c48 0%, #da4b38 100%);
    background: -o-linear-gradient(top, #f05c48 0%, #da4b38 100%);
    background: -ms-linear-gradient(top, #f05c48 0%, #da4b38 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f05c48', endColorstr='#da4b38', GradientType=0);
    color: #fff;
  }
  .orange-grdt .wsmain {
    background: #fc7d33;
    background: -moz-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fc7d33), color-stop(100%, #ff670f));
    background: -webkit-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
    background: -o-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
    background: -ms-linear-gradient(top, #fc7d33 0%, #ff670f 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fc7d33', endColorstr='#ff670f', GradientType=0);
    color: #fff;
  }
  .yellow-grdt .wsmain {
    background: #ffcd67;
    background: -moz-linear-gradient(top, #ffcd67 0%, #f6bb42 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcd67), color-stop(100%, #f6bb42));
    background: -webkit-linear-gradient(top, #ffcd67 0%, #ff670f 100%);
    background: -o-linear-gradient(top, #ffcd67 0%, #f6bb42 100%);
    background: -ms-linear-gradient(top, #ffcd67 0%, #f6bb42 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffcd67', endColorstr='#f6bb42', GradientType=0);
    color: #fff;
  }
  .purple-grdt .wsmain {
    background: #a98ded;
    background: -moz-linear-gradient(top, #a98ded 0%, #967adc 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #a98ded), color-stop(100%, #967adc));
    background: -webkit-linear-gradient(top, #a98ded 0%, #967adc 100%);
    background: -o-linear-gradient(top, #a98ded 0%, #967adc 100%);
    background: -ms-linear-gradient(top, #a98ded 0%, #967adc 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a98ded', endColorstr='#967adc', GradientType=0);
    color: #fff;
  }
  .pink-grdt .wsmain {
    background: #fb3ea4;
    background: -moz-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fb3ea4), color-stop(100%, #f21b8f));
    background: -webkit-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
    background: -o-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
    background: -ms-linear-gradient(top, #fb3ea4 0%, #f21b8f 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fb3ea4', endColorstr='#f21b8f', GradientType=0);
    color: #fff;
  }
  .gry .wsmain {
    background-color: #424242 !important;
    color: #fff;
  }
  .red .wsmain {
    background-color: #DA4B38 !important;
    color: #fff;
  }
  .orange .wsmain {
    background-color: #ff9334 !important;
    color: #fff;
  }
  .blue .wsmain {
    background-color: #31a8e6 !important;
    color: #fff;
  }
  .green .wsmain {
    background-color: #27ae60 !important;
    color: #fff;
  }
  .yellow .wsmain {
    background-color: #F6BB42 !important;
    color: #fff;
  }
  .purple .wsmain {
    background-color: #967ADC !important;
    color: #fff;
  }
  .pink .wsmain {
    background-color: #ff3366 !important;
    color: #fff;
  }
}
</style>
<div class="headerfull">
    <!--Main Menu HTML Code-->
    <div class="wsmain">
      <div class="smllogo"><a href="#"><img src="images/sml-logo.png" alt=""></a></div>
      <nav class="wsmenu clearfix">
        <ul class="mobile-sub wsmenu-list">
          <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Department</span></a>
            <div class="wsshoptabing wtsdepartmentmenu clearfix">
              <div class="wsshopwp clearfix" style="height: 400px;">
                <ul class="wstabitem clearfix">
                  <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-male"></i> Women's Clothing &amp; Accessories</a>
                    <div class="wstitemright clearfix wstitemrightactive" style="height: auto;">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-8 col-md-12 clearfix">
                            <div class="wstheading clearfix">Women's Clothing</div>
                            <ul class="wstliststy01 clearfix">
                              <li><a href="#">Sweatshirts</a></li>
                              <li><a href="#">Fashion Hoodies <span class="wstmenutag greentag">New</span></a></li>
                              <li><a href="#">Jeans &amp; Trousers</a></li>
                              <li><a href="#">Capris and Shorts <span class="wstmenutag bluetag">Trending</span></a></li>
                              <li><a href="#">Leggings</a></li>
                              <li><a href="#">Swimsuits &amp; Cover Ups</a></li>
                              <li><a href="#">Lingerie, Sleep &amp; Lounge</a></li>
                              <li><a href="#">Inner &amp; Nightwear</a> <span class="wstmenutag redtag">Sale</span></li>
                              <li><a href="#">Jumpsuits, Rompers </a></li>
                              <li><a href="#">Coats, Jackets &amp; Vests</a></li>
                              <li><a href="#">Suiting &amp; Blazers </a></li>
                              <li><a href="#">Socks &amp; Hosiery</a></li>
                            </ul>
                            <div class="wstheading clearfix">Handbags &amp; Wallets</div>
                            <ul class="wstliststy01 clearfix">
                              <li><a href="#">Clutches</a> </li>
                              <li><a href="#">Cross-Body Bags</a> </li>
                              <li><a href="#">Evening Bags</a> </li>
                              <li><a href="#">Shoulder Bags</a> <span class="wstmenutag orangetag">Hot</span></li>
                              <li><a href="#">Top-Handle Bags</a> </li>
                              <li><a href="#">Wristlets</a> </li>
                            </ul>
                            <div class="wstheading clearfix">Accessories</div>
                            <ul class="wstliststy01 clearfix">
                              <li><a href="#">Handbag Accessories</a> </li>
                              <li><a href="#">Sunglasses Accessories</a> </li>
                              <li><a href="#">Eyewear Accessories</a> </li>
                              <li><a href="#">Scarves &amp; Wraps</a> </li>
                              <li><a href="#">Gloves &amp; Mittens</a> </li>
                              <li><a href="#">Hats &amp; Caps</a> </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 col-md-12 clearfix">
                            <div class="wstbootslider clearfix">
                              <div id="demo" class="carousel slide" data-ride="carousel">

                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                  <div class="carousel-item active"><img src="images/woman-ad-img.jpg" alt="">
                                    <div class="carousel-caption">
                                      <h3>Slider Caption 01</h3>
                                    </div>
                                  </div>
                                  <div class="carousel-item"><img src="images/woman-ad-img02.jpg" alt="">
                                    <div class="carousel-caption">
                                      <h3>Slider Caption 01</h3>
                                    </div>
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-female"></i> Men's Clothing &amp; Accessories</a>
                    <div class="wstitemright clearfix" style="height: auto;">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-8 col-md-12 clearfix">
                            <div class="wstheading clearfix">Men's Clothing</div>
                            <ul class="wstliststy01 clearfix">
                              <li><a href="#">Shirts <span class="wstmenutag greentag">New</span></a></li>
                              <li><a href="#">Fashion Hoodies &amp; Sweatshirts </a></li>
                              <li><a href="#">Pants &amp; Trousers</a></li>
                              <li><a href="#">Capris and Shorts </a></li>
                              <li><a href="#">Swim</a></li>
                              <li><a href="#">Suits &amp; Sport Coats</a></li>
                              <li><a href="#">Underwear</a></li>
                              <li><a href="#">Socks</a> </li>
                              <li><a href="#">Sleep &amp; Lounge</a></li>
                              <li><a href="#">T-Shirts &amp; Tanks <span class="wstmenutag redtag">20% off Sale</span></a></li>
                              <li><a href="#">Active</a></li>
                              <li><a href="#">Sport Coats <span class="wstmenutag bluetag">Trending</span></a></li>
                            </ul>
                            <div class="wstheading clearfix">Shoes &amp; Wallets</div>
                            <ul class="wstliststy01 clearfix">
                              <li><a href="#">Athletic</a> </li>
                              <li><a href="#">Boots</a> <span class="wstmenutag orangetag">Exclusive</span></li>
                              <li><a href="#">Fashion Sneakers</a> </li>
                              <li><a href="#">Loafers &amp; Slip-Ons</a> </li>
                              <li><a href="#">Mules &amp; Clogs</a> </li>
                              <li><a href="#">Outdoor</a> </li>
                              <li><a href="#">Oxfords</a> </li>
                              <li><a href="#">Sandals</a> </li>
                              <li><a href="#">Slippers</a> </li>
                            </ul>
                            <div class="wstheading clearfix">Accessories</div>
                            <ul class="wstliststy01 clearfix">
                              <li><a href="#">Belts</a> </li>
                              <li><a href="#">Suspenders</a> </li>
                              <li><a href="#">Eyewear Accessories</a> </li>
                              <li><a href="#">Neckties</a> </li>
                              <li><a href="#">Bow Ties &amp; Cummerbunds</a> </li>
                              <li><a href="#">Collar Stays</a> </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 col-md-12 clearfix"><a href="#" class="wstmegamenucolr"><img src="images/man-ad-img.jpg" alt=""></a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-play-circle"></i> Movies, Music &amp; Games</a>
                    <div class="wstitemright clearfix" style="height: auto;">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Latest Movies</li>
                              <li><a href="#">Action &amp; Adventure <span class="wstmenutag greentag">New</span></a></li>
                              <li><a href="#">Bollywood </a></li>
                              <li><a href="#">Documentary</a></li>
                              <li><a href="#">Educational</a></li>
                              <li><a href="#">Exercise &amp; Fitness </a></li>
                              <li><a href="#">Faith &amp; Spirituality</a></li>
                              <li><a href="#">Fantasy</a></li>
                              <li><a href="#">Romance</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Newest Games</li>
                              <li><a href="#">PlayStation 4 </a> </li>
                              <li><a href="#">Xbox One </a> <span class="wstmenutag orangetag">Most Viewed</span></li>
                              <li><a href="#">Nintendo DS</a> </li>
                              <li><a href="#">PlayStation Vita </a> </li>
                              <li><a href="#">Retro Gaming</a> </li>
                              <li><a href="#">Digital Games</a> </li>
                              <li><a href="#">Microconsoles</a> </li>
                              <li><a href="#">Kids &amp; Family </a> </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Popular Music Genre</li>
                              <li><a href="#">Alternative &amp; Indie Rock</a> </li>
                              <li><a href="#">Broadway &amp; Vocalists</a> </li>
                              <li><a href="#">Children's Music</a> </li>
                              <li><a href="#">Christian <span class="wstmenutag bluetag">50% off</span></a> </li>
                              <li><a href="#">Classic Rock</a> </li>
                              <li><a href="#">Comedy &amp; Miscellaneous </a> </li>
                              <li><a href="#">Country</a> </li>
                              <li><a href="#">Dance &amp; Electronic</a> </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Popular Music Genre</li>
                              <li><a href="#">Alternative &amp; Indie Rock</a> </li>
                              <li><a href="#">Broadway &amp; Vocalists</a> </li>
                              <li><a href="#">Children's Music <span class="wstmenutag redtag">Discounted</span></a>
                              </li>
                              <li><a href="#">Classical</a> </li>
                              <li><a href="#">Classic Rock</a> </li>
                              <li><a href="#">Comedy &amp; Miscellaneous</a> </li>
                              <li><a href="#">Country</a> </li>
                              <li><a href="#">Dance &amp; Electronic</a> </li>
                            </ul>
                          </div>
                          <div class="col-lg-6 wstadsize01 clearfix"><a href="#"><img src="images/ad-size01.jpg" alt=""></a></div>
                          <div class="col-lg-6 wstadsize02 clearfix"><a href="#"><img src="images/ad-size02.jpg" alt=""></a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-cutlery"></i>Home &amp; Kitchen</a>
                    <div class="wstitemright clearfix kitchenmenuimg" style="height: auto;">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Home Appliances</li>
                              <li><a href="#">Air Conditioners <span class="wstmenutag greentag">New</span></a></li>
                              <li><a href="#">Air Coolers </a></li>
                              <li><a href="#">Fans</a></li>
                              <li><a href="#">Microwaves</a></li>
                              <li><a href="#">Refrigerators</a></li>
                              <li><a href="#">Washing Machines </a></li>
                              <li><a href="#">Jars &amp; Containers </a></li>
                              <li><a href="#">LED &amp; CFL bulbs </a></li>
                              <li><a href="#">Drying Racks </a></li>
                              <li><a href="#">Laundry Baskets</a> <span class="wstmenutag orangetag">New</span></li>
                              <li><a href="#">Washing Machines </a></li>
                              <li><a href="#">Bedsheets </a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Kitchen Appliances</li>
                              <li><a href="#">Air Fryers </a></li>
                              <li><a href="#">Espresso Machines</a></li>
                              <li><a href="#">Food Processors</a> <span class="wstmenutag bluetag">Popular</span></li>
                              <li><a href="#">Hand Blenders</a></li>
                              <li><a href="#">Induction Cooktops</a></li>
                              <li><a href="#">Microwave Ovens</a></li>
                              <li><a href="#">Mixers &amp; Grinders</a></li>
                              <li><a href="#">Rice Cookers</a></li>
                              <li><a href="#">Stand Mixers</a></li>
                              <li><a href="#">Sandwich Makers</a></li>
                              <li><a href="#">Tandoor &amp; Grills</a></li>
                              <li><a href="#">Toasters</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-television"></i>Electronics Appliances</a>
                    <div class="wstitemright clearfix" style="height: auto;">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li><img src="images/ele-menu-img01.jpg" alt=" "></li>
                              <li class="wstheading clearfix">TV &amp; Audio</li>
                              <li><a href="#">4K Ultra HD TVs </a></li>
                              <li><a href="#">LED &amp; LCD TVs</a></li>
                              <li><a href="#">OLED TVs</a> <span class="wstmenutag bluetag">Popular</span></li>
                              <li><a href="#">Plasma TVs</a></li>
                              <li><a href="#">Smart TVs</a></li>
                              <li><a href="#">Home Theater</a></li>
                              <li><a href="#">Wireless &amp; streaming</a></li>
                              <li><a href="#">Stereo System</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li><img src="images/ele-menu-img02.jpg" alt=" "></li>
                              <li class="wstheading clearfix">Camera, Photo &amp; Video</li>
                              <li><a href="#">Accessories <span class="wstcount">(1145)</span></a></li>
                              <li><a href="#">Bags &amp; Cases <span class="wstcount">(445)</span></a></li>
                              <li><a href="#">Binoculars &amp; Scopes <span class="wstcount">(45)</span></a></li>
                              <li><a href="#">Digital Cameras <span class="wstcount">(845)</span></a> </li>
                              <li><a href="#">Film Photography <span class="wstcount">(245)</span></a> <span class="wstmenutag bluetag">Popular</span></li>
                              <li><a href="#">Flashes <span class="wstcount">(105)</span></a></li>
                              <li><a href="#">Lenses <span class="wstcount">(445)</span></a></li>
                              <li><a href="#">Video <span class="wstcount">(145)</span></a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li><img src="images/ele-menu-img03.jpg" alt=" "></li>
                              <li class="wstheading clearfix">Cell Phones &amp; Accessories</li>
                              <li><a href="#">Unlocked Cell Phones </a></li>
                              <li><a href="#">Smartwatches </a></li>
                              <li><a href="#">Carrier Phones</a></li>
                              <li><a href="#">Cell Phone Cases</a> <span class="wstmenutag orangetag">Hot</span></li>
                              <li><a href="#">Bluetooth Headsets</a></li>
                              <li><a href="#">Cell Phone Accessories</a></li>
                              <li><a href="#">Fashion Tech</a></li>
                              <li><a href="#">Headphone</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li><img src="images/ele-menu-img04.jpg" alt=" "></li>
                              <li class="wstheading clearfix">Wearable Device</li>
                              <li><a href="#">Activity Trackers </a></li>
                              <li><a href="#">Sports &amp; GPS Watches</a></li>
                              <li><a href="#">Smart Watches</a> <span class="wstmenutag greentag">New</span></li>
                              <li><a href="#">Virtual Reality Headsets</a></li>
                              <li><a href="#">Wearable Cameras</a></li>
                              <li><a href="#">Smart Glasses</a></li>
                              <li><a href="#">Kids &amp; Pets</a></li>
                              <li><a href="#">Smart Sport Accessories</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-laptop"></i>Computers &amp; Accessories</a>
                    <div class="wstitemright clearfix computermenubg" style="height: auto;">
                      <div class="wstmegamenucoll01 clearfix">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-8">
                              <div class="wstheading clearfix">Monitors <a href="#" class="wstmorebtn">View All</a></div>
                              <ul class="wstliststy03 clearfix">
                                <li><a href="#">50 Inches &amp; Above <span class="wstmenutag greentag">New</span></a></li>
                                <li><a href="#">40 to 49.9 Inches </a></li>
                                <li><a href="#">30 to 39.9 Inches</a></li>
                                <li><a href="#">26 to 29.9 Inches</a></li>
                                <li><a href="#">18 to 19.9 Inches</a></li>
                                <li><a href="#">16 to 17.9 Inches</a></li>
                                <li><a href="#">26 to 29.9 Inches</a></li>
                                <li><a href="#">18 to 19.9 Inches</a></li>
                                <li><a href="#">16 to 17.9 Inches</a></li>
                              </ul>
                            </div>
                            <div class="col-lg-8">
                              <div class="wstheading clearfix">Software <a href="#" class="wstmorebtn">View All</a></div>
                              <ul class="wstliststy03 clearfix">
                                <li><a href="#">Antivirus &amp; Security</a> </li>
                                <li><a href="#">Business &amp; Office</a> <span class="wstmenutag orangetag">Exclusive</span></li>
                                <li><a href="#">Web Design</a> </li>
                                <li><a href="#">Digital Software</a> </li>
                                <li><a href="#">Education &amp; Reference</a> </li>
                                <li><a href="#">Lifestyle &amp; Hobbies</a> </li>
                                <li><a href="#">Digital Software</a> </li>
                                <li><a href="#">Education &amp; Reference</a> </li>
                                <li><a href="#">Lifestyle &amp; Hobbies</a> </li>
                              </ul>

                            </div>
                            <div class="col-lg-8">
                              <div class="wstheading clearfix">Accessories <a href="#" class="wstmorebtn">View All</a></div>
                              <ul class="wstliststy03 clearfix">
                                <li><a href="#">Audio &amp; Video Accessories</a> </li>
                                <li><a href="#">Cable Security Devices</a> </li>
                                <li><a href="#">Input Devices </a> </li>
                                <li><a href="#">Memory Cards</a> </li>
                                <li><a href="#">Monitor Accessories</a> </li>
                                <li><a href="#">USB Gadgets</a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-car"></i>Auto accessories</a>
                    <div class="wstitemright clearfix wstpngsml" style="height: auto;">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img01.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Interior</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img02.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Styling</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img03.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Utility</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img04.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Spare Parts</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img05.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Protection</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img06.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Cleaning</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img07.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Car Audio</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy04 clearfix">
                              <li><img src="images/auto-menu-img08.jpg" alt=" "></li>
                              <li class="wstheading clearfix"><a href="#">Gear &amp; Accessories</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-heartbeat"></i>Health Care Products</a>
                    <div class="wstitemright clearfix wstpngsml" style="height: auto;">
                      <div class="container-fluid">


                        <div class="row">
                          <div class="col-lg-4 col-md-12 wstmegamenucolr03 clearfix"> <img src="images/health-menu-img01.jpg" alt=""> </div>
                          <div class="col-lg-8 col-md-12 clearfix">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-lg-4 col-md-12">
                                  <ul class="wstliststy05 clearfix">
                                    <li><img src="images/health-menu-img02.jpg" alt=" "></li>
                                    <li class="wstheading clearfix">Health Care</li>
                                    <li><a href="#">Diabetes </a></li>
                                    <li><a href="#">Incontinence </a></li>
                                    <li><a href="#">Cough &amp; Cold</a></li>
                                    <li><a href="#">Baby &amp; Child Care</a> <span class="wstmenutag bluetag">Popular</span></li>
                                    <li><a href="#">Women's Health</a></li>
                                    <li><a href="#">First Aid</a></li>
                                    <li><a href="#">Smoking Cessation</a></li>
                                    <li><a href="#">Sleep &amp; Snoring</a></li>
                                  </ul>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                  <ul class="wstliststy05 clearfix">
                                    <li><img src="images/health-menu-img03.jpg" alt=" "></li>
                                    <li class="wstheading clearfix">Personal Care</li>
                                    <li><a href="#">Shaving &amp; Hair Removal</a></li>
                                    <li><a href="#">Feminine Hygiene</a></li>
                                    <li><a href="#">Oral Care</a></li>
                                    <li><a href="#">Foot Care</a> <span class="wstmenutag bluetag">Popular</span></li>
                                    <li><a href="#">Hand Care</a></li>
                                    <li><a href="#">Personal Care Appliances</a></li>
                                    <li><a href="#">Shaving Foams &amp; Creams</a></li>
                                    <li><a href="#">Hair Removal Creams</a></li>
                                  </ul>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                  <ul class="wstliststy05 clearfix">
                                    <li><img src="images/health-menu-img04.jpg" alt=" "></li>
                                    <li class="wstheading clearfix">Medical Equipment</li>
                                    <li><a href="#">Crepe Bandages, Tapes &amp; Supplies </a></li>
                                    <li><a href="#">Neck Supports</a></li>
                                    <li><a href="#">Arm Supports</a> <span class="wstmenutag bluetag">Popular</span></li>
                                    <li><a href="#">Elbow Braces</a></li>
                                    <li><a href="#">Knee &amp; Leg Braces</a></li>
                                    <li><a href="#">Ankle Braces</a></li>
                                    <li><a href="#">Foot Supports</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Brand</span></a>
            <div class="wsshoptabing wtsbrandmenu clearfix">
              <div class="wsshoptabingwp clearfix">
                <ul class="wstabitem02 clearfix">
                  <li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-apple brandcolor01" aria-hidden="true"></i>Apple</a>
                    <div class="wsshoptab-active wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Apple Products </li>
                              <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
                              <li><a href="#">List Products 02</a></li>
                              <li><a href="#">List Products 03</a></li>
                              <li><a href="#">List Products 04</a> </li>
                              <li><a href="#">List Products 05</a> </li>
                              <li><a href="#">List Products 06</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Apple More Products</li>
                              <li><a href="#">List Products 07 </a></li>
                              <li><a href="#">List Products 08</a></li>
                              <li><a href="#">List Products 09</a></li>
                              <li><a href="#">List Products 10</a> </li>
                              <li><a href="#">List Products 11 </a></li>
                              <li><a href="#">List Products 12</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Apple More Products</li>
                              <li><a href="#">List Products 13 </a> <span class="wstmenutag orangetag">20% off</span></li>
                              <li><a href="#">List Products 14</a></li>
                              <li><a href="#">List Products 15</a></li>
                              <li><a href="#">List Products 16</a> </li>
                              <li><a href="#">List Products 17</a></li>
                              <li><a href="#">List Products 18</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Apple More Products</li>
                              <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                              <li><a href="#">List Products 20</a></li>
                              <li><a href="#">List Products 21</a></li>
                              <li><a href="#">List Products 22</a> </li>
                              <li><a href="#">List Products 23</a></li>
                              <li><a href="#">List Products 24</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-windows brandcolor02" aria-hidden="true"></i> Windows</a>
                    <div class="wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Windows Products </li>
                              <li><a href="#">List Products 25 <span class="wstmenutag bluetag">Popular</span></a></li>
                              <li><a href="#">List Products 26</a></li>
                              <li><a href="#">List Products 27</a> <span class="wstmenutag greentag">20% off</span></li>
                              <li><a href="#">List Products 28</a> </li>
                              <li><a href="#">List Products 29</a></li>
                              <li><a href="#">List Products 30</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Windows More Products</li>
                              <li><a href="#">List Products 31 </a></li>
                              <li><a href="#">List Products 32</a></li>
                              <li><a href="#">List Products 33</a></li>
                              <li><a href="#">List Products 34</a> </li>
                              <li><a href="#">List Products 35 </a></li>
                              <li><a href="#">List Products 36</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Windows More Products</li>
                              <li><a href="#">List Products 37 </a></li>
                              <li><a href="#">List Products 38</a></li>
                              <li><a href="#">List Products 39</a></li>
                              <li><a href="#">List Products 40</a> </li>
                              <li><a href="#">List Products 41</a></li>
                              <li><a href="#">List Products 42</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Windows More Products</li>
                              <li><a href="#">List Products 43 </a></li>
                              <li><a href="#">List Products 44</a></li>
                              <li><a href="#">List Products 45</a></li>
                              <li><a href="#">List Products 46</a> </li>
                              <li><a href="#">List Products 47</a></li>
                              <li><a href="#">List Products 48</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-skype brandcolor03" aria-hidden="true"></i> Skype</a>
                    <div class="wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Skype Products </li>
                              <li><a href="#">List Products 49 </a></li>
                              <li><a href="#">List Products 50</a> <span class="wstmenutag redtag">Popular</span></li>
                              <li><a href="#">List Products 51</a></li>
                              <li><a href="#">List Products 52</a> </li>
                              <li><a href="#">List Products 53</a></li>
                              <li><a href="#">List Products 54</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Skype More Products</li>
                              <li><a href="#">List Products 55 </a></li>
                              <li><a href="#">List Products 56</a></li>
                              <li><a href="#">List Products 57</a></li>
                              <li><a href="#">List Products 58</a> </li>
                              <li><a href="#">List Products 59 </a></li>
                              <li><a href="#">List Products 60</a> <span class="wstmenutag orangetag">20% off</span></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Skype More Products</li>
                              <li><a href="#">List Products 61 </a></li>
                              <li><a href="#">List Products 62</a></li>
                              <li><a href="#">List Products 63</a></li>
                              <li><a href="#">List Products 64</a> </li>
                              <li><a href="#">List Products 65</a></li>
                              <li><a href="#">List Products 66</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Skype More Products</li>
                              <li><a href="#">List Products 67 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                              <li><a href="#">List Products 68</a></li>
                              <li><a href="#">List Products 69</a></li>
                              <li><a href="#">List Products 70</a> </li>
                              <li><a href="#">List Products 71</a></li>
                              <li><a href="#">List Products 72</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-paypal brandcolor04" aria-hidden="true"></i>Paypal</a>
                    <div class="wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Paypal Products </li>
                              <li><a href="#">List Products 73 <span class="wstmenutag bluetag">Popular</span></a></li>
                              <li><a href="#">List Products 74</a></li>
                              <li><a href="#">List Products 75</a></li>
                              <li><a href="#">List Products 76</a> </li>
                              <li><a href="#">List Products 77</a></li>
                              <li><a href="#">List Products 78</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Paypal More Products</li>
                              <li><a href="#">List Products 79 </a></li>
                              <li><a href="#">List Products 80</a></li>
                              <li><a href="#">List Products 81</a></li>
                              <li><a href="#">List Products 82</a> </li>
                              <li><a href="#">List Products 83 <span class="wstmenutag greentag">20% off</span></a></li>
                              <li><a href="#">List Products 84</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Paypal More Products</li>
                              <li><a href="#">List Products 85 </a></li>
                              <li><a href="#">List Products 86</a></li>
                              <li><a href="#">List Products 87</a></li>
                              <li><a href="#">List Products 89</a> </li>
                              <li><a href="#">List Products 90</a></li>
                              <li><a href="#">List Products 91</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Paypal More Products</li>
                              <li><a href="#">List Products 92 </a></li>
                              <li><a href="#">List Products 93</a></li>
                              <li><a href="#">List Products 94</a></li>
                              <li><a href="#">List Products 95</a> </li>
                              <li><a href="#">List Products 96</a></li>
                              <li><a href="#">List Products 97</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-quora brandcolor05" aria-hidden="true"></i>Quora</a>
                    <div class="wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Amazon Products </li>
                              <li><a href="#">List Products 98 </a></li>
                              <li><a href="#">List Products 99</a></li>
                              <li><a href="#">List Products 00</a></li>
                              <li><a href="#">List Products 01</a> </li>
                              <li><a href="#">List Products 02</a> <span class="wstmenutag redtag">Popular</span></li>
                              <li><a href="#">List Products 03</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Amazon More Products</li>
                              <li><a href="#">List Products 04 <span class="wstmenutag orangetag">20% off</span></a></li>
                              <li><a href="#">List Products 05</a></li>
                              <li><a href="#">List Products 06</a></li>
                              <li><a href="#">List Products 07</a> </li>
                              <li><a href="#">List Products 08 </a></li>
                              <li><a href="#">List Products 09</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Amazon More Products</li>
                              <li><a href="#">List Products 10 </a></li>
                              <li><a href="#">List Products 11</a></li>
                              <li><a href="#">List Products 12</a></li>
                              <li><a href="#">List Products 13</a> </li>
                              <li><a href="#">List Products 14</a></li>
                              <li><a href="#">List Products 15</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Amazon More Products</li>
                              <li><a href="#">List Products 16 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                              <li><a href="#">List Products 17</a></li>
                              <li><a href="#">List Products 18</a></li>
                              <li><a href="#">List Products 19</a> </li>
                              <li><a href="#">List Products 20</a></li>
                              <li><a href="#">List Products 21</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-soundcloud brandcolor06"></i>Sound Cloud</a>
                    <div class="wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">SoundCloud Products </li>
                              <li><a href="#">List Products 01 <span class="wstmenutag bluetag">Popular</span></a></li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a> </li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">SoundCloud More Products</li>
                              <li><a href="#">List Products 07 </a></li>
                              <li><a href="#">List Products 08</a></li>
                              <li><a href="#">List Products 09</a></li>
                              <li><a href="#">List Products 10</a> </li>
                              <li><a href="#">List Products 11 <span class="wstmenutag greentag">20% off</span></a></li>
                              <li><a href="#">List Products 12</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">SoundCloud More Products</li>
                              <li><a href="#">List Products 13 </a></li>
                              <li><a href="#">List Products 14</a></li>
                              <li><a href="#">List Products 15</a></li>
                              <li><a href="#">List Products 16</a> </li>
                              <li><a href="#">List Products 17</a></li>
                              <li><a href="#">List Products 18</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">SoundCloud More Products</li>
                              <li><a href="#">List Products 19 </a></li>
                              <li><a href="#">List Products 20</a></li>
                              <li><a href="#">List Products 21</a></li>
                              <li><a href="#">List Products 22</a> </li>
                              <li><a href="#">List Products 23</a></li>
                              <li><a href="#">List Products 24</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-houzz brandcolor07"></i>Houzz</a>
                    <div class="wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Houzz Products </li>
                              <li><a href="#">List Products 01 </a></li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a> </li>
                              <li><a href="#">List Products 01</a> <span class="wstmenutag redtag">Popular</span></li>
                              <li><a href="#">List Products 01</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Houzz More Products</li>
                              <li><a href="#">List Products 07 <span class="wstmenutag orangetag">20% off</span></a></li>
                              <li><a href="#">List Products 08</a></li>
                              <li><a href="#">List Products 09</a></li>
                              <li><a href="#">List Products 10</a> </li>
                              <li><a href="#">List Products 11 </a></li>
                              <li><a href="#">List Products 12</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Houzz More Products</li>
                              <li><a href="#">List Products 13 </a></li>
                              <li><a href="#">List Products 14</a></li>
                              <li><a href="#">List Products 15</a></li>
                              <li><a href="#">List Products 16</a> </li>
                              <li><a href="#">List Products 17</a></li>
                              <li><a href="#">List Products 18</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Houzz More Products</li>
                              <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                              <li><a href="#">List Products 20</a></li>
                              <li><a href="#">List Products 21</a></li>
                              <li><a href="#">List Products 22</a> </li>
                              <li><a href="#">List Products 23</a></li>
                              <li><a href="#">List Products 24</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-get-pocket brandcolor08"></i>Get Pocket</a>
                    <div class="wstbrandbottom clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Get Pocket Products </li>
                              <li><a href="#">List Products 01 <span class="wstmenutag bluetag">Popular</span></a></li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a> </li>
                              <li><a href="#">List Products 01</a></li>
                              <li><a href="#">List Products 01</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Get Pocket More Products</li>
                              <li><a href="#">List Products 07 </a></li>
                              <li><a href="#">List Products 08</a></li>
                              <li><a href="#">List Products 09</a></li>
                              <li><a href="#">List Products 10</a> </li>
                              <li><a href="#">List Products 11 <span class="wstmenutag greentag">20% off</span></a></li>
                              <li><a href="#">List Products 12</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Get Pocket More Products</li>
                              <li><a href="#">List Products 13 </a></li>
                              <li><a href="#">List Products 14</a></li>
                              <li><a href="#">List Products 15</a></li>
                              <li><a href="#">List Products 16</a> </li>
                              <li><a href="#">List Products 17</a></li>
                              <li><a href="#">List Products 18</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3 col-md-12">
                            <ul class="wstliststy02 clearfix">
                              <li class="wstheading clearfix">Get Pocket More Products</li>
                              <li><a href="#">List Products 19 </a></li>
                              <li><a href="#">List Products 20</a></li>
                              <li><a href="#">List Products 21</a></li>
                              <li><a href="#">List Products 22</a> </li>
                              <li><a href="#">List Products 23</a></li>
                              <li><a href="#">List Products 24</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>MegaMenu</span></a>
            <div class="megamenu clearfix">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 col-md-12">
                    <ul class="wstliststy02 clearfix">
                      <li class="wstheading clearfix"> Skype Products </li>
                      <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
                      <li><a href="#">List Products 02</a></li>
                      <li><a href="#">List Products 03</a></li>
                      <li><a href="#">List Products 04</a> </li>
                      <li><a href="#">List Products 05</a> </li>
                      <li><a href="#">List Products 06</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <ul class="wstliststy02 clearfix">
                      <li class="wstheading clearfix">Paypal Products</li>
                      <li><a href="#">List Products 07 </a></li>
                      <li><a href="#">List Products 08</a></li>
                      <li><a href="#">List Products 09</a></li>
                      <li><a href="#">List Products 10</a> </li>
                      <li><a href="#">List Products 11 </a></li>
                      <li><a href="#">List Products 12</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <ul class="wstliststy02 clearfix">
                      <li class="wstheading clearfix">Sound Cloud Products</li>
                      <li><a href="#">List Products 13 </a> <span class="wstmenutag orangetag">20% off</span></li>
                      <li><a href="#">List Products 14</a></li>
                      <li><a href="#">List Products 15</a></li>
                      <li><a href="#">List Products 16</a> </li>
                      <li><a href="#">List Products 17</a></li>
                      <li><a href="#">List Products 18</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <ul class="wstliststy02 clearfix">
                      <li class="wstheading clearfix">Get Pocket Products</li>
                      <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                      <li><a href="#">List Products 20</a></li>
                      <li><a href="#">List Products 21</a></li>
                      <li><a href="#">List Products 22</a> </li>
                      <li><a href="#">List Products 23</a></li>
                      <li><a href="#">List Products 24</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Half menu</span></a>
            <div class="megamenu clearfix halfmenu">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <ul class="wstliststy06 clearfix">
                      <li class="wstheading clearfix">Windows Products</li>
                      <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
                      <li><a href="#">List Products 02</a></li>
                      <li><a href="#">List Products 03</a></li>
                      <li><a href="#">List Products 04</a> </li>
                      <li><a href="#">List Products 05</a> </li>
                      <li><a href="#">List Products 06</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <ul class="wstliststy06 clearfix">
                      <li class="wstheading clearfix">Apple More Products</li>
                      <li><a href="#">List Products 07 </a></li>
                      <li><a href="#">List Products 08</a></li>
                      <li><a href="#">List Products 09</a></li>
                      <li><a href="#">List Products 10</a> </li>
                      <li><a href="#">List Products 11 </a></li>
                      <li><a href="#">List Products 12</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <!--Menu HTML Code-->
  </div>
