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
<title>Så här funkar API:et bakom Regina</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.1.0.js"></script>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<script>
$(document).ready(function(){
    $("#faqs dd").hide();
    $("#faqs dt").click(function () {
        $(this).next("#faqs dd").slideToggle(500);
        $(this).toggleClass("expanded");
    });
});
</script>

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
	display: block;
	position: relative;
	top: 10px;
	left: 0px;
	width: 850px;
	height: 25px;
	padding-top: 25px;
	padding-right: 0px;
	padding-bottom: 25px;
	padding-left: 30px;
}
#div-placeholder_text {
 position:relative;
 top:25px;
 width:100%;
 clear:both;
 overflow:hidden;
 background-color:#ffffff;
 padding-bottom: 50px;

}
#div-placeholder_text_faq {
 position:relative;
 top:25px;
 width:80%;
 clear:both;
 overflow:hidden;
 background-color:#ffffff;
 padding-bottom: 50px;

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
.form-style-6{
    font: Arial, Helvetica, sans-serif;
	font-size:23px;
	text-align:center;
    max-width: 600px;
    margin: 10px auto;
    padding: 16px;
    background: #ffffff;
}
.form-style-6 h1{
    background: #8bc34a;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 select
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    -webkit-border-radius: 5px;
    outline:none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #8bc34a;
    padding: 3%;
    color: #555;
	height:50px;
    font: 95% Arial, Helvetica, sans-serif;

}
.form-style-6 input[type="text"]:focus,
.form-style-6 select:focus
{
    box-shadow: 0 0 5px #8bc34a;
    padding: 3%;
    border: 1px solid #8bc34a;
}
.form-style-6 select:disabled
{
    box-shadow: 0 0 5px #ccc;
    border: 1px solid #ccc;
	color: #ccc;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #8bc34a;
    border-bottom: 2px solid #8bc34a;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #8bc34a;
}
.text_column_wide {
	width: 90%;
	text-align: left;
	font-weight: lighter;
	line-height: 25px;
	float: left;
	padding-left: 25px;
	padding-right: 20px;
	color: #A3A3A3;
}
#faqs dt, #faqs dd { padding: 0 0 0 50px }
#faqs dt { font-family: Arial,Gotham, Helvetica Neue;font-size:1.5em; color: #555; cursor: pointer; height: 37px; line-height: 37px; margin: 0 0 15px 25px}
#faqs dd { font-family: Arial,Gotham, Helvetica Neue;font-size: 1em; margin: 0 0 20px 25px}
#faqs dt { background: url(pix/expand-icon.png) no-repeat left}
#faqs .expanded { background: url(pix/expanded-icon.png) no-repeat left}

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
  <div id="div-headline">HUR FUNKAR DET?
  </div>
 </div>

    <div id="div-placeholder" style="height:300px;padding-bottom:100px;">
    <p id="why_reg_row"><img src="pix/funkar_top_image.jpg" width="900" height="360" style="padding-left:10px;"></p>
 </div>

   <!-- End Why regina section -->


	 <div id="div-placeholder">
		<div id="div-headline"></div>
	  <div id="div-headline">FAQ</div>
	  </div>


	<div id="div-placeholder_text_faq" style="padding-left:15px; padding-top:25px;">
		<dl id="faqs">

      <dt name="faq">Hur får man access till API:et?</dt>
      <dd>Kontakta oss via vår FB för att få en nyckel: <a href="http://facebook.com/reginasverige" target="_blank">API nyckel</a></dd>

      <dt>Jag hittar inte appen på appstore!</dt>
		  <dd>Appen finns för närvarande bara för Android. Vi jobbar på en iOS version med tillsvidare kan du använda webben för att skicka/lyssna!</dd>

			<dt>Vem kan se vad jag skriver?</dt>
		  <dd>Alla som söker på ett specifikt regnummer kan läsa det som skickats till just det regnumret</dd>

			<dt>Kan andra användare se vem jag är?</dt>
		  <dd>Nej! - All kommunikation identifieras via regnumret och vi behöver inte veta vem du är för att det ska funka</dd>

			<dt>Fungerar Regina på alla fordon?</dt>
		  <dd>Alla fordon som har ett registreringsnummer kan använda Regina</dd>

			<dt>Är API:et öppet för ALLA!</dt>
		  <dd>JA! - Vi vill att alla skall använda Reginas API. Kontakta oss via vår FB för att få en nyckel: <a href="http://facebook.com/reginasverige" target="_blank">API nyckel</a></dd>

    </dl>
	</div>


			<div id="div-headline"></div>
			<div id="div-headline"></div>
			<div id="div-headline"></div>
			<div id="div-headline"></div>

  <!-- Copyrights Section -->

</div>
<!-- Main Container Ends -->
</body>
</html>
