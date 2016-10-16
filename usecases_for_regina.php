<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Så här skall man använda Regina!</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.1.0.js"></script>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<style type="text/css">
.container header div a {
	font-family: Gotham, Helvetica Neue, Helvetica, Arial, sans-serif;
}
a:link {
	color: #8bc34a;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #8bc34a;
}
a:hover {
	text-decoration: none;
	color: #8bc34a;
}
a:active {
	text-decoration: none;
	color: #8bc34a;
}
.container #about div p {
	font-family: Gotham, Helvetica Neue, Helvetica, Arial, sans-serif;
}
#div-1 {
 position:relative;
 top:25px;
    width: 100%;
    height: 430px;
	background-color:#8bc34a;
}
#div-1a {
 position:absolute;
 top:0px;
 right:0px;
 width:50%;
 height: 400px;
 padding-top: 15px;
    padding-right: 0px;
    padding-bottom: 25px;
    padding-left: 80px;
 }
#div-1b {
 position:absolute;
 top:5px;
 left:0;
 width:50%;
}
#text_row1 {
 font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-weight:bold;
 font-size:45px;
 color:#ffffff;
 position:relative;
 top:0px;
 left:10px;
 width:100%;
 height: 25px;
 padding-top: 25px;
    padding-right: 0px;
    padding-bottom: 25px;
    padding-left: 60px;
}
#text_row2 {
 font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-weight:bold;
 font-size:25px;
 color:#ffffff;
 position:relative;
 top:10px;
 left:10px;
 width:100%;
 height: 25px;
 padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 25px;
    padding-left: 60px;
}
#text_row_btn {
 position:relative;
 top:10px;
 left:10px;
 width:400px;
 height: 25px;
 padding-top: 25px;
    padding-right: 0px;
    padding-bottom: 25px;
    padding-left: 55px;
}
#appstore_btn {
 position:relative;
 left:40px;
}
#div-1c {
 position:relative;
 top:0px;
 left:0;
 width:100%;
 height: 25px;
 background-color: #000000;
}
#div-headline {
font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-weight:bold;
 font-size:45px;
 color:#8bc34a;
 position:relative;
 top:0px;
 left:10px;
 width:100%;
 height: 0px;
 padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 45px;
    padding-left: 30px;
}
#div-whiteline {
 position:relative;
 top:0px;
 left:0;
 width:100%;
 height: 5px;
 background-color: #ffffff;
}
#div-greenline {
 position:relative;
 top:25px;
 left:0;
 width:100%;
 height: 5px;
 background-color: #8bc34a;
}
#div-placeholder {
 position:relative;
 top:25px;
 left:0;
 width:100%;
}
#why_reg_row {
 display:block;
 position:relative;
 top:10px;
 left:10px;
 width:850px;
 height: 25px;
 padding-top: 25px;
    padding-right: 0px;
    padding-bottom: 25px;
    padding-left: 30px;
}
#div-placeholder_text {
 position:relative;
 top:150px;
 width:100%;
 clear:both;
 overflow:hidden;
 background-color:#ffffff;
 padding-bottom: 100px;

}
#why_reg_btn {
 position:relative;
 left:60px;
}
#why_reg_btn2 {
 position:relative;
 left:120px;
}
#div-placeholder_how_regina {
 position:relative;
 top:175px;
 left:0;
 width:100%;
}
#div-headline-center {
font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-weight:bold;
 font-size:45px;
 text-align:center;
 color:#8bc34a;
 position:relative;
 top:40px;
 left:10px;
 width:100%;
 height: 25px;
 padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 45px;
    padding-left: 15px;
}
#div-headline-center-small {
font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-weight:bold;
 font-size:30px;
 text-align:center;
 color:#555;
 position:relative;
 top:30px;
 left:10px;
 width:100%;
 height: 25px;
 padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 45px;
    padding-left: 15px;
}
.text_column {
	font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
	width: 28%;
	text-align: justify;
	font-weight: lighter;
	line-height: 25px;
	float: left;
	padding-left: 25px;
	padding-right: 20px;
	color: #555;
}

</style>
</head>
<body>
	  <?php include_once("analytics.php") ?>
<!-- Main Container -->
<div class="container">
  <!-- Navigation -->
	  <?php include_once("menu.php") ?>
  <!-- Hero Section --><!-- Rotating text --><!-- Form --><!-- Why Regina section -->
<div id="div-placeholder">
 <div id="div-greenline"></div>
 <div id="div-headline"></div>
 </div>

   <!-- Form --><!-- Why Regina section -->
<div id="div-placeholder">
  <div id="div-headline">VARFÖR REGINA!
  </div>
 </div>

    <div id="div-placeholder">
    <p id="why_reg_row"><img src="pix/Date_parking_sign.jpg" width="250px" style="padding-left:10px;"> <img id="why_reg_btn" src="pix/Thief_in_area.jpg" width="250px" style="padding-right:20px;"><img id="why_reg_btn2" src="pix/Broken_car_shield.jpg" width="250"></p>
 </div>
  <div id="div-placeholder_text">
   <p class="text_column" style="padding-left:30px;"><a href="">Upplys!</a> Det händer att man ser en felparkerad bil då dagen för snöröjning eller gatusopning är kommen. En del har ställt sig där medvetet men de flesta har helt enkelt glömt av att bilen står där. Gör en god gärning och skicka en påminnelse. Allt du behöver för att hjälpa till är registreringsnumret och Regina. Förutom uppskattning från medtrafikant så hjälper du staden hålla nere kostnaden för renhållning och snöröjning. Bra va?</p>
    <p class="text_column"><a href="">Samverka!</a> Det finns en ökad medvetenhet om brott och beteende som föregår brott. Använd Regina som ett verktyg att upplysa varandra om misstänkta aktiviteter i ditt närområde. Via appen kan du 24/7 få information direkt till din telefon ifall något skulle hända!</p>
    <p class="text_column"><a href="">Minimera skada!</a> När din bil får en skada bör du agera skyndsamt för att undvika sekundärskador. Om du råkar ut för inbrott i bilen är det illa nog, men om det också regnar in för att du inte upptäcker den trasiga rutan blir det än värre. Vi på Regina har ännu inte lösningen att förhindra inbrottet, men följdskadorna kan minimeras om vi lättare får tag på varandra</p>
  </div>
   <!-- End Why regina section -->


  <!-- More Info Section -->

</div>
<!-- Main Container Ends -->
</body>
</html>
