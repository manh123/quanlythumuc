

 
<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"> -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'> -->

<script type="text/javascript" src="../../javascript/jquery-latest.js"></script>
<script type="text/javascript" src="../..nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="../../javascript/red-sky-options.js"></script>
<script type="text/javascript" src="../../shortcodes/shortcodes.js"></script>
<script type="text/javascript" src="../../javascript/jquery.prettyPhoto.js"></script>
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS -->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../../nivo-slider/nivo-slider.css" rel="stylesheet" type="text/css">
<link href="../../shortcodes/shortcodes.css" rel="stylesheet" type="text/css">
<link href="../../css/prettyPhoto.css" rel="stylesheet" type="text/css">
-->
<!-- START SETTINGS BOX -->
<script type="text/javascript" src="../../settingsbox/farbtastic/farbtastic.js"></script>
<script type="text/javascript" src="../../settingsbox/settingsbox.js"></script>
<!-- <link href="../../settingsbox/settingsbox.css" rel="stylesheet" type="text/css">
<link href="../../settingsbox/farbtastic/farbtastic.css" rel="stylesheet" type="text/css">
 END SETTINGS BOX -->

<title>Red-Sky</title>
  
  <style>
  /* SETTINGS BOX CSS */
.backwrapper{
    max-width: 1000px;
    margin:0px auto;
    padding:0px 15px;
}
.backwrappercolor{
    background: #f1f1f1;
}
.bodycolor01{
    background-color: #555;
}
.bodycolor02{
    background-color: #B5AE9B;
}
.bodycolor03{
    background-color: #86524D;
}
.bodycolor04{
    background-color: #655D59;
}
.bodycolor05{
    background-color: #8D8E91;
}
.bodycolor06{
    background-color: #88A65E;
}
.bodycolor07{
    background-color: #A36F76;
}
.bodycolor08{
    background-color: #53777A;
}
.bodycolor09{
    background-color: #574951;
}
.bodycolor10{
    background-color: #2B4959;
}
.bodytexture01{
    background-image: url('textures/01.png');
}
.bodytexture02{
    background-image: url('textures/02.png');
}
.bodytexture03{
    background-image: url('textures/03.png');
}
.bodytexture04{
    background-image: url('textures/04.png');
}
.bodytexture05{
    background-image: url('textures/05.png');
}
.bodytexture06{
    background-image: url('textures/06.png');
}
.bodytexture07{
    background-image: url('textures/07.png');
}
.bodytexture08{
    background-image: url('textures/08.png');
}
.bodytexture09{
    background-image: url('textures/09.png');
}
.bodytexture10{
    background-image: url('textures/10.png');
}
.bodytexture01.bodytexturePreview{
    background-image: url('textures/01.1.png');
}
.bodytexture02.bodytexturePreview{
    background-image: url('textures/02.1.png');
}
.bodytexture03.bodytexturePreview{
    background-image: url('textures/03.1.png');
}
.bodytexture04.bodytexturePreview{
    background-image: url('textures/04.1.png');
}
.bodytexture05.bodytexturePreview{
    background-image: url('textures/05.1.png');
}
.bodytexture06.bodytexturePreview{
    background-image: url('textures/06.1.png');
}
.bodytexture07.bodytexturePreview{
    background-image: url('textures/07.1.png');
}
.bodytexture08.bodytexturePreview{
    background-image: url('textures/08.1.png');
}
.bodytexture09.bodytexturePreview{
    background-image: url('textures/09.1.png');
}
.bodytexture10.bodytexturePreview{
    background-image: url('textures/10.1.png');
}
.customPanel{
    border-radius:0px 6px 6px 0px;
    z-index:999999;
    box-shadow:1px 1px 2px #555;
    position: fixed;
    padding: 20px 15px 20px 20px;
    width: 156px;
    background: white;
    border-top: 1px solid #e2e2e2;
    border-right: 1px solid #e2e2e2;
    border-bottom: 1px solid #e2e2e2;
    top: 113px;
    left: -195px;
    font-family: 'Lato';
}
.customPanel .customPanelOptions{
    
}
.customPanel h1 {
	border-bottom:1px dotted #ccc; 
	margin-bottom:10px;
	padding-bottom:3px;
	font-size:14px;
	font-weight:700;
}
.customPanel select {
	margin:2px 0px 6px;
	border:1px solid #ccc;
	border-radius:4px;
	padding:3px;
	width:100%;
}
.customPanel .customPanelOptions .customPanelOptionsDefault{
    border: 1px solid #D5D5D5;
    background: #F1F1F1;
    background: -webkit-gradient(linear, left top, left bottom, from(white), to(#E8E8E8));
    background: -moz-linear-gradient(top, white, #E8E8E8);
    background: -o-linear-gradient(white,#E8E8E8);
    cursor: pointer;
    overflow: hidden;
    float: left;
    padding-left: 15px;
    padding-right: 15px;
	margin-top:3px;
	border-radius:4px;
}
.customPanel .customPanelOptions .customPanelOptionsDefault:hover{
    background: -webkit-gradient(linear, left top, left bottom, from(#E8E8E8), to(white));
    background: -moz-linear-gradient(top, #E8E8E8, white);
    background: -o-linear-gradient(#E8E8E8,white);
}
.customPanel .customPanelOptions .customPanelOptionsColor{
    height: 24px;
    width: 24px;
    float: left;
    border: 1px solid #ABABAB;
    margin: 0 5px 5px 0;
    cursor: pointer;
}
.customPanel .customPanelOptions .customPanelOptionsTexture{
    height: 24px;
    width: 24px;
    float: left;
    border: 1px solid #ABABAB;
    margin: 0 5px 5px 0;
    cursor: pointer;
}
.customPanel .customPanelButton{
    position: absolute;
    height: 33px;
    width: 34px;
    background: white  url('images/options_button.png') no-repeat center center;
    top: 20px;
    right: -45px;
    border-top: 1px solid #e2e2e2;
    border-right: 1px solid #e2e2e2;
    border-bottom: 1px solid #e2e2e2;
    cursor: pointer;
    border-radius:0px 6px 6px 0px;
    padding:5px;
    box-shadow:1px 1px 2px #555;
}
.customPanel .customPanelButton:hover{
    background-image: url('images/options_button_hover.png');
}
.customPanel .customPanelOptions .customPanelOptionsPickerButton{
    background: url('images/colorpicker_button.png') no-repeat 0px 0px;
    height: 24px;
    width: 24px;
    overflow: hidden;
    cursor: pointer;
    float: left;
    margin: 0 5px 5px 0;
    border: 1px solid #ABABAB;
}
.customPanel .customPanelOptionsPicker{
    position: absolute;
    top: 70px;
    right: -200px;
    display: none;
}

/* RED-SKY CSS Document */


/* ============================ START CSS RESET AND OPTIONS ============================ */
* {
	margin:0px;
	padding:0px;
	border:0px;
	vertical-align:top;
	text-decoration:none;
}
body {
	background:#f1f1f1;
	font-size:13px;
	line-height:1.8em;
	font-family: 'Bitter', sans-serif;
	background-color: #7293a1;
	padding-top: 50px;
	padding-bottom: 50px;
}
.separator {
	border-bottom:1px solid #b6b6b6;
	box-shadow:0px 1px 0px #fefefe;
	padding:5px 0px;
	clear:both;
	margin:10px 0px;
}
a {
	color:#444;
}
.sidebar {
	padding-bottom:30px;
}
sup {
	vertical-align: super;
}
sub {
	vertical-align: sub;
}
/* ============================ END CSS RESET AND OPTIONS ============================ */



/* ============================ START TITLE CSS EFFECT ============================ */
span.show-tooltip-text {
	z-index:99999;
	display:none;
	position:fixed;
	background:#eee url(../images/texture/bgPat-10.png);
	border:1px solid #888;
	margin:0px 10px 0px 0px;
	padding:0px 12px;
	border-radius:0px 15px 0px 15px;
	color: #222;
	text-shadow:1px 1px 1px #fff;
	font: 13px/22px;
	font-weight: normal;
}
/* ============================ END TITLE CSS EFFECT ============================ */



/* ============================ START PAGINATION ============================ */
.pagination {
	border:1px solid #ccc;
	background:#fff;
	float:left;
}
.pagination li {
	list-style:none;
	float:left;
	border-right:1px solid #ccc;
}
.pagination li.last {
	list-style:none;
	float:left;
	border-right:0px;
}
.pagination li a {
	color:#454545;
	font-size:12px;
	padding:5px 8px;
	line-height:24px;
}
.pagination li a.active {
	background:#585858;
	color:#fff;
}
.pagination li a:hover {
	background:#585858;
	color:#fff;
}
/* ============================ END PAGINATION ============================ */



/* ==================================== START CSS ELEMENTS ==================================== */
.dropcaps {
	float:left;
	font-size:40px;
	line-height:44px;
	font-weight:bold;
	margin-right:15px;
	color:#454545;
	text-shadow:1px 1px 0px #fff;
}
p {
	color:#444;
	margin-bottom: 15px;
}
.button {
	text-transform:uppercase;
	border-radius:2px;
	box-shadow:1px 1px 2px #666;
	padding:4px 12px;
	border:1px solid #ccc;
	color:white;
	margin-top:10px;
	font-size:12px;
	cursor:pointer;
	background: -webkit-gradient(linear, left top, left bottom, from(#C9B6B6), to(#916D6D));
	border-color: #D4C4C4;
}
.button:hover {
	background:#e0e0e0;
	box-shadow:1px 1px 2px #333;
	background: -webkit-gradient(linear, left top, left bottom, from(#916D6D), to(#C9B6B6));
}
/* ==================================== END CSS ELEMENTS ==================================== */



/* ==================================== START PRETTY ==================================== */
.pretty {
	position: relative;
	display: block;
	color: inherit;
}
.pretty span {
	top:0;
	left:0;
	width: 100%;
	height: 100%;
	position:absolute;
}
.pretty:hover span {
	background: rgba(255,255,255,0.3) url('../images/slider_zoom.png') no-repeat center center;
}
/* ==================================== END PRETTY ==================================== */



/* ==================================== START CSS MARGINS ==================================== */
.mb5 {
	margin-bottom:5px;
}
.mb10 {
	margin-bottom:10px;
}
.mb15 {
	margin-bottom:15px;
}
.mb20 {
	margin-bottom:20px;
}
.mb25 {
	margin-bottom:25px;
}
.mb30 {
	margin-bottom:30px;
}
.mt5 {
	margin-top:5px;
}
.mt10 {
	margin-top:10px;
}
.mt15 {
	margin-top:15px;
}
.mt20 {
	margin-top:20px;
}
.mt25 {
	margin-top:25px;
}
.mt30 {
	margin-top:30px;
}
.ml5 {
	margin-left:5px;
}
.ml10 {
	margin-left:10px;
}
.ml15 {
	margin-left:15px;
}
.ml20 {
	margin-left:20px;
}
.ml25 {
	margin-left:25px;
}
.ml30 {
	margin-left:30px;
}
.mr5 {
	margin-right:5px;
}
.mr10 {
	margin-right:10px;
}
.mr15 {
	margin-right:15px;
}
.mr20 {
	margin-right:20px;
}
.mr25 {
	margin-right:25px;
}
.mr30 {
	margin-right:30px;
}
/* ==================================== END CSS MARGINS ==================================== */



/* ==================================== #Base 960 Grid ================================== */

/* ==================================== START HEADER ==================================== */
#header {
	padding-top:10px;
	padding-bottom:19px;
}
#header .logo {
	margin-top:10px;
	overflow: hidden;
	float:left;
}
#header .logo a {
	text-shadow:2px 1px 0px #fff;
	color:#333;
}
#header .logo a img {
	max-width: 99% !important;
	height: auto !important;
}
#header .logo a span {
	color:#bf3846;
}
#header .social {
	float:right;
	margin-top:14px;
}
#header .social img {
	border:0px;
	opacity:0.5;
}
#header .social img:hover {
	border:0px;
	opacity:1.0;
}
/* ==================================== END HEADER ====================================== */



/* ================================ START TOP NAVIGATION ================================ */
#topnavigation {
	height:62px;
	color:#c1c1c1;
	text-shadow:1px 1px 0px #222;
	max-width: 1050px;
	margin-left: auto;
	margin-right: auto;
	position: relative;
}
#topnavigationfiller {
}
#topnavigationfillerleft {
	display: block;
	position: absolute;
	left: -7px;
	top: -14px;
}
#topnavigationfillerright {
	display: block;
	position: absolute;
	right: -7px;
	top: -14px;
}
#topnavigationfillermiddle {
	background:url(../images/bg_menu.png);
	height: 62px;
	position: absolute;
	top: 0;
	left: 108px;
	bottom: 0;
	right: 108px;
}
#topnavigation .container {
	padding-top:10px;
	padding-bottom:10px;
}
#topnavigation .navigationmicro {
	display:none;
}
#topnavigation .navigation li {
	float:left;
	list-style:none;
	padding:10px 0px;
}
#topnavigation .navigation li a {
	padding:4px 15px 6px 15px;
	font-size:14px;
	line-height:22px;
	color:#eee;
	text-decoration:none;
	font-weight:300;
	text-shadow:1px 1px 1px #000;
}
#topnavigation .navigation li a:hover {
	padding:3px 14px 5px 14px;
	background-image:url(../images/bg_m.png);
	border-right:1px solid #5f6366;
	border-bottom:1px solid #5f6366;
	border-top:1px solid #25262a;
	border-left:1px solid #25262a;
	border-radius:3px;
}
#topnavigation .navigation li a.active {
	padding:3px 14px 5px 14px;
	background-image:url(../images/bg_m.png);
	border-right:1px solid #5f6366;
	border-bottom:1px solid #5f6366;
	border-top:1px solid #25262a;
	border-left:1px solid #25262a;
	border-radius:3px;
}
/* ================================= END TOP NAVIGATION ================================= */



/* ==================================== START DROPDOWN MENU ==================================== */
#topnavigation ul.MenuDropdown {
	margin-top:3px;
	margin-left:0px;
	z-index:1000;
}
#topnavigation ul.MenuDropdown li ul.MenuDropdown {
	margin-top: -31px;
	left: 160px;
}
#topnavigation ul.MenuDropdown li {
	padding:0px;
}
#topnavigation ul.MenuDropdown li a {
	padding:4px 10px !important;
	font-weight:300;
	font-size:14px;
}
#topnavigation ul li ul.MenuDropdown {
	display: none;
	position: absolute;
	padding:0px;
	color:#fff;
	border:1px solid #333;
}
#topnavigation ul li:hover>ul.MenuDropdown {
	display: block;
}
#topnavigation ul li:hover ul.MenuDropdown li {
	background:url(../images/texture/bgPat-3.png);
	border-top:1px dotted #333;
	display: block;
	float: none;
	width: 160px;
}
#topnavigation ul li:hover ul.MenuDropdown li a {
	padding: 0px;
	height: auto;
	border: none;
	display: block;
	color:#fff;
}
#topnavigation ul li ul.MenuDropdown li a {
	padding: 0px;
}
#topnavigation ul li:hover ul.MenuDropdown li a:hover {
	background:none;
}
#topnavigation ul li:hover ul.MenuDropdown li:hover>a {
	color: #fff;
	background:url(../images/texture/grid.png);
	border-radius:0px;
}
#topnavigation ul li:hover ul.MenuDropdown li:first-child {
	border-top: none;
}
/* ==================================== END DROPDOWN MENU ==================================== */



/* ==================================== START SLIDER ==================================== */
#slider {
	background:url(../images/bg_gray.jpg);
	border-bottom:1px solid #333;
	padding:30px 0px;
}
#slider .headerSlider {
	position: relative;
}
#slider .headerSlider .headerSliderLeft {
	height: 40px;
	width: 40px;
	color: white;
	background: #d6d6d6 url('../images/slider_left.png') no-repeat 14px 11px;
	line-height: 40px;
	text-align: center;
	-moz-border-radius: 20px 20px 20px 20px;
	-webkit-border-radius: 20px 20px 20px 20px;
	border-radius: 20px 20px 20px 20px;
	cursor: pointer;
	position: absolute;
	left: -47px;
	top: 65px;
}
#slider .headerSlider .headerSliderRight {
	height: 40px;
	width: 40px;
	color: white;
	background: #d6d6d6 url('../images/slider_right.png') no-repeat 18px 11px;
	line-height: 40px;
	text-align: center;
	-moz-border-radius: 20px 20px 20px 20px;
	-webkit-border-radius: 20px 20px 20px 20px;
	border-radius: 20px 20px 20px 20px;
	cursor: pointer;
	position: absolute;
	right: -47px;
	top: 65px;
}
#slider .headerSlider .headerSliderMiddle {
	height: 178px;
	overflow: hidden;
}
#slider .headerSlider .headerSliderMiddle ul {
	list-style: none;
	overflow: hidden;
}
#slider .headerSlider .headerSliderMiddle ul li {
	padding: 9px;
	border: 1px solid #d3d1d2;
	float: left;
	margin-left: 18px;
}
#slider .headerSlider .headerSliderMiddle ul li:first-child {
	margin-left: 0;
}
#slider .headerSlider .headerSliderMiddle ul li img {
	width: 288px;
	height: 158px;
	display: block;
}
/* ======================================= END SLIDER ====================================== */



/* ==================================== START WIDE-SLIDER ==================================== */
#wide_slider {
	border-bottom:1px solid #333;
	z-index:11;
	width:100%;
	height:400px;
	overflow:hidden;
	position:relative;
	margin-top: 50px;
	margin-bottom: 50px;
	box-shadow: 0px 0px 50px 0px black;
}
#wide_slider .slide {
	position:absolute;
	width:100%;
	height:auto;
	display:none;
	opacity: 0.0;
	filter: alpha(opacity=0);
}
#wide_slider .slide img {
	width:100%;
	height:auto;
	z-index:100;
}
#wide_slider .overlay {
	background:url(../images/texture/grid.png);
	position:absolute;
	z-index:300;
	width:100%;
	height:100%;
}
#wide_slider .slidenr {
	z-index:500;
	padding:4px 3px 0px 3px;
	background:url(../images/texture/bgPat-5.png);
	position:relative;
	bottom:0px;
	border-radius:6px 6px 0px 0px;
	border-left:1px solid #111;
	border-right:1px solid #111;
	border-top:1px solid #111;
	overflow: hidden;
	margin: 0 auto;
}
#wide_slider .slidenr li {
	background:url(../wide-slider/bullets.png) no-repeat;
	width:22px;
	height:20px;
	list-style:none;
	float:left;
	cursor:pointer;
	background-position:center -1px;
}
#wide_slider .slidenr li.active {
	background:url(../wide-slider/bullets.png) no-repeat;
	width:22px;
	height:20px;
	list-style:none;
	background-position:center -23px;
	float:left;
	cursor:pointer;
}
/* ======================================= END WIDE-SLIDER ====================================== */



/* ==================================== START NIVO-SLIDER ==================================== */
#nivo_slider {
	z-index:10 !important;
	background:url(../nivo-slider/bg-grey.jpg);
	border-bottom:1px solid #333;
	padding:30px 0px 10px;
	max-width: 1030px;
	margin-left: auto;
	margin-right: auto;
}
#nivo_slider #slider_nivo img {
	width:100% !important;
	height:auto !important;
}
/* ==================================== END NIVO-SLIDER ==================================== */



/* ==================================== START SLIDER ==================================== */
#path {
	background:url(../images/bg_path.jpg);
	border-bottom:1px solid #111;
	padding:10px 0px;
	color:#eee;
	color:#eee;
	text-decoration:none;
	font-weight:300;
	text-shadow:1px 1px 1px #333;
	max-width: 1030px;
	margin: 0 auto;
	overflow:hidden;
}
#path.pathSimple .container {
	font-size: 22px;
	height: 50px;
	line-height: 50px;
	font-style: italic;
}
#path a {
	padding:0px 15px;
	font-size:13px;
	line-height:22px;
	color:#eee;
	text-decoration:none;
	font-weight:300;
	text-shadow:1px 1px 1px #333;
}
#path a:hover {
	color:#bf3846;
}
/* ======================================= END SLIDER ====================================== */



/* ==================================== START SUBSCRIBE ==================================== */
.container .title {
	color:#fff;
	font-size:19px;
	font-weight:400;
	text-shadow:1px 1px 0px #777;
	padding:1px 0px 2px 6px;
	line-height:28px;
	text-transform:uppercase;
	margin:30px 0px;
	background-image:url(../images/texture/grid.png);
	background-color: #916D6D;
	margin-left: -35px;
	padding-left: 35px;
	overflow: hidden;
	float: left;
	padding-right: 35px;
}
.container .sidebar .title {
	margin-left: 0;
	float: none;
	margin-right: -35px;
	padding-left: 10px;
}
.title+* {
	clear: both;
}
.container .title.righttitle {
	margin-left: 0;
}
.container #subscribe {
	margin-bottom:30px;
	float:right;
	border:1px solid #c7c7c7;
	padding:5px;
	border-radius:5px;
	background:url(../images/subscribebacground.png) #f0f0f0;
	background-position:top left;
	background-repeat:repeat-x;
}
.container #subscribe .subscribeline {
	border:1px solid #ccc;
	background:#f7f7f7;
	padding:6px 3px;
	font-size:12px;
	border-radius:3px;
	box-shadow:1px 1px 0px #fff;
	color:#9b9b9b;
	font-style:italic;
	width:240px;
}
.container #subscribe .subscribebutton {
	border:1px solid #000;
	border-radius:3px;
	border:1px solid #ccc;
	background:#f7f7f7;
	font-weight:400;
	color:#6f6f6f;
	padding:6px 10px;
	height:30px;
	font-size:12px;
	text-shadow:1px 1px 0px #fff;
	box-shadow:1px 1px 0px #fff;
	cursor:pointer;
	text-transform:uppercase;
	padding-top:4px;
}
.container #subscribe .subscribebutton:hover {
	color:#be3d53;
}
/* ==================================== END SUBSCRIBE ==================================== */



/* ==================================== START OPTIONS ==================================== */
.container #options {
	padding-top:1px;
	padding-bottom:10px;
}
.container #options .image {
	margin-bottom:20px;
	text-align: center;
}
.container #options .image img {
	width:auto;
	height:auto;
	border:1px solid #b6b6b6;
	padding:2px;
	background:#fff;
}
.container #options h3 {
	font-weight:400;
	font-size:16px !important;
	color:#555;
	text-shadow:1px 1px 0px #fff;
	padding-bottom:10px;
	line-height:22px;
	margin-bottom:10px;
	border-bottom:1px solid #b6b6b6;
	box-shadow:0px 1px 0px #fefefe;
	text-align:center;
	text-transform:uppercase;
}
.container #options p {
	font: 13px/22px;
	color:#555;
	padding:0px 5px 10px;
	text-shadow:1px 1px 0px #fff;
}
/* ================================= END CONTENT OPTIONS ================================= */



/* ================================= START MINIPORTFOLIO ================================= */
.container #miniportfolio {
	padding-top:1px;
	padding-bottom:10px;
}
.container #miniportfolio .time {
	float:left;
	font-size:12px;
	line-height:26px;
	color:#555;
	text-align:center;
	margin-right:10px;
	text-shadow:1px 1px 0px #fff;
	text-transform:uppercase;
}
.container #miniportfolio .time img {
	margin-bottom: 5px;
}
.container #miniportfolio .time span {
	font-size:18px;
	line-height:15px;
}
.container #miniportfolio .information {
	padding-left: 60px;
}
.container #miniportfolio .image {
	margin-bottom:15px;
	margin-left:auto;
	margin-right:auto;
}
.container #miniportfolio .image img {
	padding:3px;
	background:#fff;
	border:1px solid #ccc;
	width:98%;
}
.container #miniportfolio h3 {
	font-weight:400;
	font-size:18px !important;
	color:#464646;
	text-shadow:1px 1px 0px #fff;
	line-height:22px;
	margin-top:-2px;
}
.container #miniportfolio p {
	font: 13px/22px;
	color:#555;
	text-shadow:1px 1px 0px #fff;
	margin-top:10px;
	margin-bottom:10px;
}
/* ================================== END MINIPORTFOLIO ================================== */



/* ==================================== START TWITTER ==================================== */
#twitter {
	background:#fff;
	border:1px solid #e5e5e5;
	border-radius:30px;
	padding:6px 15px 4px 40px;
	font-size:13px;
	line-height:22px;
	margin:30px 0px 30px 30px;
	font-weight:400;
	color:#777;
}
#twitter .twitterbird {
	background:#f1f1f1;
	position:absolute;
	padding:7px;
	border-radius:30px;
	margin-top:-14px;
	margin-left:-70px;
	border-right:1px solid #e5e5e5;
}
#twitter span a {
	float:right;
	color:#777;
}
#twitter a {
	color:#bf3846;
}
#twitter a:hover {
	text-decoration:underline;
}
#twitter {
	min-height: 28px; /*In case there are no tweets or they didn't load keep the shape of the tweeter div*/
}
.twtr-widget .twtr-doc .twtr-timeline {
	background: none !important;
}
.twtr-doc {
	background: none !important;
}
.twtr-hd {
	display:none;
}
.twtr-bd * {
	border:none !important;
}
.twtr-ft {
	display:none;
}
.twtr-user {
	display:none;
}
.twtr-reply {
	display:none;
}
.twtr-rt {
	display:none;
}
.twtr-fav {
	display:none;
}
#twitter .twtr-bd .twtr-timeline .twtr-tweets .twtr-tweet-text p, em {
	font: 13px/22px !important;
	font-weight: 400 !important;
	color: #777!important;
}
#twitter #tweet-id-1, #tweet-id-2, #tweet-id-3 {
	display: none;
}
.twtr-timestamp {
	color: #768485 !important;
}
#twitter .twtr-widget em, .twtr-widget .twtr-new-results {
	float: right;
}
.rs_twitter{
    
}
.rs_twitter ul{
	font-size:12px;
	line-height:1.5em;
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100%;
}
.rs_twitter ul li{
    opacity: 0;
    filter: alpha(opacity=0);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 0;
}
.rs_twitter ul li.active{
    z-index: 1;
}
.rs_twitter .date {
	float:right;
	color:#bf3846;
}
/* ===================================== END TWITTER ==================================== */


/* ===================================== START CONTACT ==================================== */
#googlemaps {
	max-width:960px;
	height:350px;
	overflow:hidden;
	padding:3px;
	background:#fff;
	border:1px solid #ccc;
	margin:0px 0px 30px 0px;
}
#googlemaps iframe {
	width:100%;
	height:350px;
}
#contactform {
	padding-bottom:30px;
}
#contactform #result {
	float:left;
	padding-top:13px;
}
#contactform .success {
	color:#66cc66;
}
#contactform .fail {
	color:#bf3846;
}
#contactform form {
	width:100%;
}
#contactform .contact_line {
	width:100%;
	margin-right:15px;
	border:1px solid #ccc;
	color:#999;
	padding:3px;
	font-size:13px;
	margin-bottom:14px;
}
#contactform .contact_message {
	width:100%;
	border:1px solid #ccc;
	color:#999;
	padding:3px;
	resize:none;
	height:150px;
	font-size:13px;
}
#contactform .buttons {
	float:right;
	margin-right:-6px;
}
#contactinformation {
	line-height:25px;
	font-size:13px;
	color:#474747;
	text-shadow:1px 1px 1px #fff;
}
#contactinformation p {
	margin-bottom:3px;
}
#contactinformation span {
	color:#bf3846;
}
#contactinformation a {
	color:#111;
}
#contactinformation a:hover {
	text-decoration:underline;
}
/* ===================================== END CONTACT ==================================== */



/* ===================================== START PROJECTS ==================================== */
#project .image img {
	width:100%;
	height:auto;
	margin:10px 0px;
	padding:2px;
	background:#fff;
	border:1px solid #ccc;
}
#project h3 {
	font-weight:400;
	font-size:19px !important;
	color:#464646;
	text-shadow:1px 1px 0px #fff;
	line-height:22px;
	text-transform:uppercase;
	margin-top:10px;
	margin-bottom:10px;
}
.links a {
	margin:10px 10px 10px 0px;
}
.projectinfo {
	margin-top:10px;
}
.projectinfo li {
	color:#444;
	list-style:none;
	margin-bottom:10px;
	padding-left:30px;
	text-shadow:1px 1px 0px #fff;
}
.projectinfo li.release {
	background:url(../images/details/release.png) no-repeat;
}
.projectinfo li.update {
	background:url(../images/details/update.png) no-repeat;
}
.projectinfo li.version {
	background:url(../images/details/version.png) no-repeat;
}
.projectinfo li.design {
	background:url(../images/details/designer.png) no-repeat;
}
/* ===================================== END PROJECTS ==================================== */



/* ===================================== START SUPPORT ==================================== */
.support .supporttip h4 {
	font-size:20px;
	margin-bottom:10px;
	color:#bf3846;
	font-weight:300;
}
.support .supporttip {
	margin-bottom:15px;
	background:#fff;
	border:1px solid #e1e1e1;
	border-radius:15px;
	padding:20px 20px 20px 85px;
	color:#444;
	font: 13px/22px;
}
.support h2 {
	background:url(../images/faq.png) no-repeat;
	font-size:20px;
	line-height:30px;
	margin-bottom:10px;
	color:#bf3846;
	font-weight:300;
	padding:0px 5px 5px 36px;
	text-transform:uppercase;
}
.support p {
	color:#444;
	font: 13px/22px;
	margin-bottom:15px;
}
/* ===================================== END SUPPORT ==================================== */



/* ===================================== START TESTIMONIAL ==================================== */
.testimonial {
	background:#ededed;
	border:1px solid #afafaf;
	border-radius:6px;
	padding:5px 5px 0px;
}
.testimonial p {
	font-size: 14px;
	font-weight: 400;
	line-height: 26px;
	color:#444;
	margin-bottom: 0px;
	font-style:italic;
}
.testimonial span {
	font-size: 13px;
	font-weight: 400;
	line-height: 26px;
	color:#666;
}
.testimonials {
	background: url(../images/quotes.png) #f7f7f7 no-repeat;
	background-position:15px 25px;
	border:1px solid #d8d8d8;
	margin-bottom:5px;
	border-radius:4px;
	padding:15px 15px 15px 50px;
}
/* ===================================== END TESTIMONIAL ==================================== */



/* ===================================== START WORKING MEMBERS ==================================== */
.member {
	border:1px solid #ddd;
	background:#fff;
	cursor:pointer;
	margin-top:10px;
	margin-bottom:10px;
}
.member h3 {
	font-size:16px;
	padding:6px 10px;
	text-transform:uppercase;
	line-height:26px;
}
.member p {
	padding:0px 10px;
	font-size: 14px;
	font-weight: 400;
	line-height: 26px;
	color:#444;
	margin-bottom: 0px;
	font-style:italic;
}
.member img {
	width:100%;
	height:auto;
	padding:1px;
}
.member .memberinfo {
	display:none;
	padding-bottom:10px;
}
.member:hover {
	margin-top:0px;
}
/* ===================================== END WORKING MEMBERS ==================================== */



/* ===================================== START BLOG ==================================== */
.list li {
	list-style:none;
	border-bottom:1px dotted #cecece;
	margin-bottom:5px;
}
.list li a {
	padding:14px 8px;
	font-size: 14px;
	font-weight: 400;
	line-height: 26px;
	color:#444;
}
.list li a:hover {
	color:#bf3846;
	padding:14px 8px 14px 10px;
}
.posts {
	margin-bottom:50px;
}
.posts .post_time {
	color:#757575;
	font-size:13px;
	margin-bottom:5px;
	text-shadow:1px 1px 0px #fff;
}
.posts .post_image {
	float:left;
	margin-right:20px;
	margin-bottom:10px;
}
.posts .post_image img {
	width:250px;
	height:auto;
	padding:3px;
	background:#fff;
	border:1px solid #ccc;
}
.posts h1 a {
	font-size:19px;
	line-height:32px;
	margin-bottom:15px;
	color:#565656;
	text-shadow:1px 1px 0px #fff;
	font-weight: 400;
}
.posts h1 a:hover {
	color:#bf3846;
}
.posts .read_more {
	float:left;
}
.post_details {
	float:right;
}
.post_details li {
	margin-left:20px;
	list-style:none;
	float:left;
	font-size:12px;
	margin-bottom:5px;
	color:#565656;
	text-shadow:1px 1px 0px #fff;
}
.post_details li.views {
	background:url(../images/blog_elements/eye.png) no-repeat;
	padding-left:20px;
	background-position:left center;
}
.post_details li.likes {
	background:url(../images/blog_elements/heart.png) no-repeat;
	padding-left:20px;
	background-position:left center;
}
.post_details li.comments {
	background:url(../images/blog_elements/comment.png) no-repeat;
	padding-left:20px;
	background-position:left center;
}
/* ===================================== END BLOG ==================================== */



/* ===================================== START SINGLE POST ==================================== */
.post {
	padding-bottom:10px;
}
.post h1 {
	font-size:24px;
	line-height:40px;
	margin-bottom:15px;
	color:#565656;
	text-shadow:1px 1px 0px #fff;
}
.post .post_image img {
	height:auto;
	padding:3px;
	background:#fff;
	border:1px solid #ccc;
	margin:15px auto;
}
.post .post_time {
	border-bottom:1px dotted #ccc;
	box-shadow:0px 1px 0px #fff;
	padding-bottom:3px;
	color:#757575;
	font-size:13px;
	text-shadow:1px 1px 0px #fff;
}
.post .post_time a:hover {
	color:#bf3846;
}
/* ===================================== END SINGLE POST ==================================== */



/* ===================================== START COMMENT ==================================== */
#comments {
	padding:10px 0px 30px;
	border-top:1px dotted #999;
	text-shadow:1px 1px 0px #fff;
}
#comments h3 {
	font-size:18px;
	color:#666;
	text-shadow:1px 1px 0px #fff;
	margin-bottom:20px;
}
#comments .comment {
	margin-left:90px;
	background:url(../images/texture/bgPat-9.png);
	border-radius:0px 6px 6px 6px;
	padding:20px;
	margin-bottom:20px;
}
#comments .replay {
	margin-left:120px;
	background:url(../images/texture/bgPat-9.png);
	border-radius:0px 6px 6px 6px;
	padding:20px;
	margin-bottom:20px;
}
#comments .comment_avatar {
	background:url(../images/texture/bgPat-9.png);
	border-radius:6px 0px 0px 6px;
	padding:10px;
	float:left;
	height:auto;
	margin-left:-110px;
	margin-top:-20px;
}
#comments .comment_avatar img {
	width:68px;
	border:1px solid #ccc;
}
#comments .comment_user a {
	color:#bf3846;
	font-size:14px;
	float:left;
}
#comments .comment_replay a {
	color:#555;
	font-size:13px;
	float:left;
	margin-left:10px;
}
#comments .comment_user a:hover {
	text-decoration:underline;
}
#comments .comment_replay a:hover {
	color:#111;
}
#comments .comment_date {
	text-align:right;
	font-size:12px;
	color:#555;
}
#comments .comment_message {
	margin-top:15px;
	font-size:13px;
	line-height:24px;
	color:#555;
}
#commentform {
	border-top:1px dotted #b4b4b4;
	padding:20px 0px;
	font-size:14px;
	color:#555;
	text-shadow:1px 1px 0px #fff;
}
#commentform .comment_line {
	width:290px;
	border-radius:6px;
	padding:4px 2px;
	font-size:13px;
	line-height:22px;
	border:1px solid #b4b4b4;
	margin-top:5px;
	margin-bottom:10px;
	color:#555;
}
#commentform .comment_text {
	width:99%;
	border-radius:6px;
	padding:4px 2px;
	font-size:13px;
	line-height:22px;
	border:1px solid #b4b4b4;
	margin-top:5px;
	margin-bottom:10px;
	color:#555;
	resize:none;
	height:160px;
}
#commentform .comment_button {
	border:1px solid #ccc;
	background:url(../images/buttonbg2.png) repeat-x;
	font-weight:700;
	color:#555;
	padding:1px 12px;
	font-size:12px;
	line-height:22px;
	box-shadow:1px 1px 4px #888;
	cursor:pointer;
}
#commentform .comment_button:hover {
	background:url(../images/buttonbg.png) repeat-x;
	color:#bf3846;
}
#commentform span {
	color:#bf3846;
}
#commentform code {
	font-size:12px;
}
/* ===================================== END COMMENT ==================================== */



/* ==================================== START FOOTER ==================================== */
#footer {
	background:url(../images/bgglare.png) #333;
	background-position:top center;
	background-repeat:no-repeat;
	padding:30px 0px;
	border-top:1px solid #111;
	border-bottom:1px solid #444;
	color:#c1c1c1;
	text-shadow:1px 1px 0px #222;
	max-width: 1030px;
	margin-left: auto;
	margin-right: auto;
}
#footer p {
	color:#c1c1c1;
	margin-bottom:10px;
}
#footer a {
	color:#c1c1c1;
}
#footer img {
	border:0px;
}
#footer .menus li {
	list-style:none;
}
#footer .menus.type2 li {
	border-bottom:1px dotted #777;
	padding-bottom:5px;
	margin-bottom:5px;
}
#footer .menus li a {
	padding-left:5px;
}
#footer .menus li a:hover {
	color:#bf3846;
	padding-left:8px;
}
#footer .adress {
	width:100%;
	padding-bottom:6px;
	float:left;
}
#footer .adress li {
	list-style:none;
	margin-bottom:6px;
}
#footer .adress li a:hover {
	text-decoration:underline;
}
#footer .adress .adr {
	background:url(../images/home.png) no-repeat;
	padding-left:20px;
	background-position: left center;
}
#footer .adress .call {
	background:url(../images/phone.png) no-repeat;
	padding-left:20px;
	background-position: left center;
}
#footer .adress .email {
	background: url(../images/mail.png) no-repeat;
	background-position: left center;
	padding-left:20px;
}
#footer h3 {
	border-bottom:1px solid #666;
	padding-bottom:10px;
	box-shadow:0px 1px 0px #222;
	color:#fff;
	font-weight:300;
	font-size:18px;
	line-height:22px;
	margin-bottom:20px;
	text-transform:uppercase;
}
#bottomfooter {
	background:#222;
	border-top:#262626;
	padding:10px 0px;
	color:#555;
	font: 11px/20px;
	text-transform:uppercase;
	max-width: 1030px;
	margin-left: auto;
	margin-right: auto;
	font-size: 11px;
}
#bottomfooter .footermenu {
	float:right;
}
#bottomfooter .footermenu li {
	float:left;
	list-style:none;
	padding-left:10px;
}
#bottomfooter .footermenu li a {
	color:#555;
}
#bottomfooter .footermenu li a:hover {
	color:#bf3846;
}
/* ===================================== END FOOTER ===================================== */



/* ======================================= #Tablet ====================================== */
@media only screen and (min-width: 768px) and (max-width: 960px) {
#topnavigation {
	border-bottom:1px solid #111;
}
#header .social {
	float:right;
	margin-top:20px;
}
#topnavigation .navigationmicro {
	display:none;
}
#slider #navigation .leftslide {
	position:absolute;
	margin-left:-430px;
	margin-top:125px;
	cursor:pointer;
}
#slider #navigation .rightslide {
	position:absolute;
	margin-left:400px;
	margin-top:125px;
	cursor:pointer;
}
.container #subscribe .subscribeline {
	width:150px;
}
.member {
	margin-top:0px;
	margin-bottom:10px;
}
.member .memberinfo {
	display:block;
	padding-bottom:10px;
}
#slider {
	margin-top:-1px
}
}

/* ======================================= #Mobile ====================================== */
@media only screen and (min-width: 480px) and (max-width: 768px) {
#bottomfooter .footermenu li {
	padding-right:10px;
	padding-left:0px;
}
#topnavigation {
	border-bottom:1px solid #111;
}
#header .social {
	float:right;
	margin-top:12px;
}
#topnavigation .navigationsmall {
	padding:10px 0px;
}
#topnavigation .navigationmicro {
	display:block;
	padding:2px 5px;
	margin:0px auto;
	width:200px;
	background:#333;
	border:1px solid #000;
	color:#eee;
}
#topnavigation .navigation {
	display:none;
}
#slider {
	margin-top:-1px
}
.container #subscribe .subscribeline {
	width:150px;
}
.container #miniportfolio p {
	margin-bottom:20px;
}
.container #subscribe {
	margin-top:20px;
}
.member {
	margin-top:0px;
	margin-bottom:10px;
}
.member .memberinfo {
	display:block;
	padding-bottom:10px;
}
.menus {
	margin-bottom:30px;
}
#footer p {
	margin-bottom:20px;
}
.links {
	margin-bottom:20px;
}
}

/* ======================================= #Mobile ======================================= */
@media only screen and (max-width: 480px) {
#bottomfooter .footermenu li {
	padding-right:10px;
	padding-left:0px;
}
#header .logo {
	float: none;
	width: 144px;
	margin-left: auto;
	margin-right: auto;
}
#header .social {
	float:none;
	margin-top:10px;
	width: 221px;
	margin-left: auto;
	margin-right: auto;
}
#topnavigation .navigationsmall {
	padding:10px 0px;
}
#topnavigation .navigationmicro {
	display:block;
	padding:2px 5px;
	margin:0px auto;
	width:200px;
	background:#333;
	border:1px solid #000;
	color:#eee;
}
#topnavigation .navigation {
	display:none;
}
.container #subscribe .subscribeline {
	width:150px;
}
.container #miniportfolio p {
	margin-bottom:20px;
}
.container #subscribe {
	margin-top:20px;
}
.member {
	margin-top:0px;
	margin-bottom:10px;
}
.member .memberinfo {
	display:block;
	padding-bottom:10px;
}
.pagination .first, .last {
	display:none;
}
.menus {
	margin-bottom:30px;
}
#footer p {
	margin-bottom:20px;
}
.links {
	margin-bottom:20px;
}
}
/* ===================================== END PHOTOSTREAM ===================================== */
.rsFlickrWidget {
}
.rsFlickrWidget .rsFlickrWidgetStream {
	overflow: hidden;
}
.rsFlickrWidget .rsFlickrWidgetStream .rsFlickrWidgetStreamImage {
	display: block;
	text-decoration: none;
	color: inherit;
	overflow: hidden;
	float: left;
	width: 37px;
	height: 37px;
	margin-right: 4px;
	margin-bottom: 4px;
	border: 1px solid #aaa;
}
.rsFlickrWidget .rsFlickrWidgetStream .rsFlickrWidgetStreamImage img {
}
/* ===================================== END PHOTOSTREAM ===================================== */

  </style>
  
  
  
  
  
  
  
  
  

</head>
<body style="background-color:rgba(10,253,227,1.00)">
 
 <!-- START #HEADER -->
<div class="backwrapper backwrappercolor">


  <div id="container">
      <!-- START .LOGO -->
      <div class="logo" style="color:rgba(10,0,255,1.00)"> 
       <<h1 align="center" style>TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP TPHCM</h1>	
       
        
        
        
      </div>
      <!-- END .LOGO -->
     &nbsp;&nbsp;
   
   
    <div class="header" style="background-color:rgba(241,244,140,1.00)">
    <h2 align="center"> <span style="color:red"> KHÓA LUẬN TỐT NGHIỆP </span></h2>
   
    <h1 align="center"> <span style="color:#0000FF"> Đề Tài </span> </h1>
   
    <h3 align="center"> <span style="color:rgba(252,8,12,1.00)"> ĐIỂU KHIỂN MÔ HÌNH IOT BẰNG GIỌNG NÓI </span></h3>
    </div>
  </div>
</div>
</div>







<!-- END #HEADER --> <!-- START #TOPNAVIGATION -->
<!--<div id="topnavigation">
    <div id="topnavigationfiller">
        <img id="topnavigationfillerleft" src="../../images/bg_menu_left.png" alt=""/>
        <div id="topnavigationfillermiddle"></div>
        <img id="topnavigationfillerright" src="../../images/bg_menu_right.png" alt=""/>
    </div>
    <div class="container">
        <ul class="navigation">
        <li><a href="../../index.html" class="active">Home</a>
            
        </li>
         </ul>
       
        <div class="navigationsmall">
        <form action="../../Users/TruongDang/Desktop/SkyTeam 1.0">
            <select class="navigationmicro" name="myDestination" onChange="this.form.window_name.value++; ob=this.form.myDestination; window.open(ob.options[ob.selectedIndex].value,'Window_Name'+this.form.window_name.value,'toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1,width=400,height=300')">
            <option>- Main Menu -</option>
            <option value="index.html">Home</option>
            <option value="index.html">- NivoSlider</option>

            <option value="index_simple.html">- Simple</option>
            <option value="about.html">About</option>
            <option value="portfolio.html">Portfolio</option>
            <option value="portfolio_2_columns.html">- 2 columns</option>
            <option value="portfolio_3_columns.html">- 3 columns</option>
            <option value="portfolio_4_columns.html">- 4 columns</option>
            <option value="blog.html">Blog</option>
            <option value="single_post.html">- Single Post</option>
            <option value="support.html">Support</option>
            <option value="contact.html">Contact Us</option>
            </select>-->
           <!-- <input name="window_name" style="display:none;" type="hidden" value="1">
        </form>
       
        </div>
    </div>
</div>-->
<!-- END #TOPNAVIGATION --> 



<div class="backwrapper backwrappercolor">
<div class="container">
  <div class="one columns">
    <div class="title">Show Data</div>
    
    
   
 
 <?php
$connect = mysqli_connect("localhost", "root", "123456", "khoaluan");// dang nhap vao data base 

$query1 = "SELECT * FROM temperature WHERE  datetime  ORDER BY datetime DESC limit 15   "; //đieu kien lay du lieu theo datatime, lay theo thoi gian som nhat,lay 5 dong

$result1 = mysqli_query($connect, $query1);// doc data theo dieu kien cua query1

$query = "SELECT * FROM temperature "; // lay toan bo data cua ban temperature
$result = mysqli_query($connect, $query);//  doc data theo dieu kien cua query
$query2 = "SELECT * FROM temperature "; // lay toan bo data cua ban temperature
$result2 = mysqli_query($connect, $query);//  doc data theo dieu kien cua query
$query3 = "SELECT * FROM temperature "; // lay toan bo data cua ban temperature
$result3 = mysqli_query($connect, $query);//  doc data theo dieu kien cua query

$chart_data = '';

//$query = mysql_query($sql);
//$num = mysqli_num_rows($result);
//if ($num > 0)
	
while($row = mysqli_fetch_array($result1)) //dieu kien xuat theo query1
{
	
  printf ("Datetime: %s, &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Temperature: %s,&nbsp;&nbsp; &nbsp;&nbsp;  Humidity: %s,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	Light: %s ;  Gas: %s,&nbsp;&nbsp ;  Fire: %s,&nbsp;&nbsp<br>",$row[7],$row[0], $row[1], $row[2],$row[3], $row[4]);  //code hien thi data thuong   </div>
}

///1
while($row = mysqli_fetch_array($result)) //dieu kien xuat theo query
{
	
	//code hien thi data thanh bieu do  
 $chart_data .= "{ datetime:'".$row["datetime"]."', Soil:".$row["Soil"]."}, ";

}
$chart_data = substr($chart_data, 0, -2);




while($row = mysqli_fetch_array($result2)) //dieu kien xuat theo query
{
	
	//code hien thi data thanh bieu do  
 $chart_data1 .= "{ datetime:'".$row["datetime"]."', temp:".$row["temp"]."}, ";

}
$chart_data1 = substr($chart_data1, 0, -2);

////2

while($row = mysqli_fetch_array($result3)) //dieu kien xuat theo query
{
	
	//code hien thi data thanh bieu do  
 $chart_data2.= "{ datetime:'".$row["datetime2"]."',  hum:".$row["hum"]."}, ";

}

$chart_data2= substr($chart_data2, 0, -2);

?>
 
 
 

<br>
<a href="\TrangChu2.php"> Toan Bo Data 2 </a>






 <div class="backwrapper backwrappercolor">
<div class="container">
  <div class="one columns">
    <div class="title">Data chart</div>
 
  
  <div class="container" style="width:900px;" >
   
   <br>
   <h2 align="center">Biểu Đồ</h2>
   <h3 align="center"></h3>   
   <br /><br />
   <div  align=left id="chart" ></div>
   
  </div>

 
<script >

// thong tin bieu do
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data1; ?>],
 xkey:'datetime',
 ykeys:['temp'],
 labels:['temp' ],
 hideHover:'100px',
 stacked:true

});
</script>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data2; ?>],
 xkey:'datetime1',
 ykeys:[ 'hum'],
 labels:[ 'hum' ],
 hideHover:'100px',
 stacked:true
});
</script>
<!--
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data1; ?>],
 xkey:'datetime1',
 ykeys:[ 'gas'],
 labels:[ 'Gas' ],
 hideHover:'100px',
 stacked:true
});
</script>


<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data1; ?>],
 xkey:'datetime1',
 ykeys:[ 'fire'],
 labels:[ 'Fire' ],
 hideHover:'100px',
 stacked:true
});
</script>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'datetime1',
 ykeys:[ 'light'],
 labels:[ 'Light' ],
 hideHover:'100px',
 stacked:true
});

</script>

-->

  </div>
  <!-- START #OPTIONS -->
  <div id="options">
    <div class="four columns">
     
    </div>
    <div class="four columns">
     
     
    </div>
    <div class="four columns">
     
      
    </div>
    <div class="four_last columns">
      
      
    </div>
  </div>
  <!-- 
  <div class="one columns">
    <div class="title">Hình ảnh mô hình</div>
    <div class="title" > Hinh anh thuc tien</div>
</div>
  
  <!-- START #MINIPORTFOLIO -->
  <div id="miniportfolio">
    <div class="one-third columns">    
 </div>
</div>
	<br>
   
    
 --> 
  
  <!-- START #TWITTER -->
  
  <!-- END #TWITTER -->
 <footer>
 <p align="center">Nguyễn Công Hậu -14107281 -Hero.riakdu@gmail.com <br>
 Phạm Văn Thiện -14077061 -Nhattieu3@gmail.com</p>
 
 </footer>
<!-- START #FOOTER -->

 
 
 
 
 </body>
 </html>



