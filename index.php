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
<title>Regina sverige</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.1.0.js"></script>
<script src="js/typed.js"></script>
<script>

$(document).ready(function(){

   $( "#push_message" ).click(function() {
        var reg_number = $("#reg_number").val();
		var text_to_push = $("#job").val();
		/* write function to verify properly*/
        if (reg_number.length>0 && text_to_push.length>0){
            
			//$("#text_row2").text(reg_number +" if_och " +text_to_push);
			
			$.ajax({
                type:'POST',
                url:'pushData.php',
                data:'reg_number='+reg_number+'&text_to_push='+text_to_push,
                beforeSend:function(html){
                    $("#loader").show();
                },
                success:function(html){
                       $("#loader").remove();
                    $('#postlist').append(html); /* Post progress from insert function*/
                }
            }); 
        }
		else
		{
			//$("#text_row2").text(reg_number +" else_och " +text_to_push);
		}
    });

 
 $(function(){
        $(".element").typed({
            strings:
			[
			"@ODT401 Din bil är parkerad med lyktorna tända!", 
			"@HMN338 P-lisor på gatan där din bil är parkerad!", 
			"@MBO053 Tack, du är en ängel", 
			"@KGZ342 Vad har du så bråttom till? Du riskerar liver på våra barn!", 
			"@OZA032 ”Om du blinkar vänster i en rondell fattar ingen vart du ska!", 
			],
            typeSpeed: 10,
			backSpeed: 0
        });
    });
	
	$("#reg_number").keyup(function(event){
	$(this).css("text-transform","uppercase")
	var myLength = $("#reg_number").val().replace(/ /g, '').length;
		if(myLength>=6)
		{
			 $("#job").prop('disabled', false);
		}
		else 
		{
			$("#job").prop('disabled', 'disabled');
			  if((myLength==0))
			{
				$(this).css("text-transform","capitalize")
			}
		}
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
 top:40px;
 left:10px;
 width:100%;
 height: 25px;
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

</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onLoad="reg_number.focus();">
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header>
    <h4 class="logo"><img src="pix/home.png" width="50" height="40"></h4>
    <div style="position:relative; left:0px; top: 18px; width: 1000px;" >
     
       <a href="read_text_with_regina.php" style="padding:25px;">LÄS TEXT</a>
       <a href="index.php" style="padding:25px;">SKICKA TEXT</a>
     <a href="api_functionality_regina.php" style="padding:25px;">HUR FUNKAR DET?</a>
     <a href="usecases_for_regina.php" style="padding:25px;">VARFÖR REGINA?</a>
     <a href="download_application.php" style="padding:25px;">LADDA NER APP</a>
      
    </div>
  </header>
  <!-- Hero Section -->
  <div id="div-1">
  <div id="div-1b"> 
    <p id="text_row1">SKICKA TEXT TILL <br> BILÄGARE</p>
    <p id="text_row2">VIA TELEFON ELLER <br> WEBBEN</p>
    <p id="text_row_btn"><img src="pix/download_appstore.png" width="150" height="47"> <img id="appstore_btn" src="pix/download_googleplay.png" width="160" height="45"></p>
  </div>
  <div id="div-1a"><img style="padding-left:75px;" src="pix/regina_android_iphone_apps.png" width="375" height="399"></div>
</div>

 <!-- Rotating text -->
<div id="div-placeholder">
 <div id="div-headline-center">SKICKA TEXT MED FORMULÄRET!</div>
  <div id="div-headline-center-small" class="element"></div>
 </div>
 
 <!-- Form -->
 <div id="div-placeholder">
 <div class="form-style-6">

<input id="reg_number" type="text" name="field1" placeholder="Fyll i reg. nummer ex: ABC123" />

<select id="job" name="field4" disabled>
<option value="0" selected>Välj meddelande</option>
<optgroup label="Indoors">
  <option value="fishkeeping">Fishkeeping</option>
  <option value="reading">Reading</option>
  <option value="boxing">Boxing</option>
  <option value="debate">Debate</option>
  <option value="gaming">Gaming</option>
  <option value="snooker">Snooker</option>
  <option value="other_indoor">Other</option>
</optgroup>
<optgroup label="Outdoors">
  <option value="football">Football</option>
  <option value="swimming">Swimming</option>
  <option value="fishing">Fishing</option>
  <option value="climbing">Climbing</option>
  <option value="cycling">Cycling</option>
  <option value="other_outdoor">Other</option>
</optgroup>
</select>   

<div id="loader" style="display:none;"><img src="pix/loader.gif"></div>
<input id="push_message" type="submit" value="Skicka" />
<div id="postlist"></div>

</div>
</div>

 <!-- Why Regina section -->
<div id="div-placeholder">
 <div id="div-greenline">
 </div>
 <div id="div-headline">VARFÖR REGINA!
 </div>
 </div>
 
    <div id="div-placeholder">
    <p id="why_reg_row"><img style="padding-left:20px;" src="pix/why_regina_1.png" width="250" height="154"> <img id="why_reg_btn" src="pix/why_regina_1.png" width="250" height="154"><img id="why_reg_btn2" src="pix/why_regina_1.png" width="250" height="154"></p>
 </div>
  <div id="div-placeholder_text">
   <p class="text_column" style="padding-left:30px;">Det händer att man ser en felparkerad bil då dagen för snöröjning eller gatusopning är kommen. En del har ställt sig där medvetet men de flesta har helt enkelt glömt av att bilen står där. Gör en god gärning och skicka en påminnelse. Allt du behöver är registreringsnumret och Regina. Förutom uppskattning från medtrafikant så hjälper du staden hålla nere kostnaden för renhållning och snöröjning. Bra va? </p>
    <p class="text_column">Det finns en ökad medvetenhet om brott och beteende som föregår brott. Använd Regina som ett verktyg att upplysa varandra om misstänkta aktiviteter runt en parkeringsplats eller ett garage. Tänk på att du själv både kan ta emot och skicka information via registreringsnumret.</p>
    <p class="text_column">När din bil får en skada bör du agera skyndsamt för att undvika sekundärskador. Om du råkar ut för inbrott i bilen är det illa nog, men om det också regnar in för att du inte upptäcker den trasiga rutan blir det än värre. Vi på Regina har ännu inte lösningen att förhindra inbrottet, men följdskadorna kan minimeras om vi lättare får tag på varandra. </p>
  </div>
   <!-- End Why regina section -->
 

  <!-- Parallax Section -->
  <section class="banner">
    <h2 class="parallax">PARALLAX HERO</h2>
    <p class="parallax_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
  </section>
 
  <!-- More Info Section -->
  <footer>
    <article class="footer_column">
      <h3>ABOUT</h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
    </article>
    <article class="footer_column">
      <h3>LOCATION</h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
    </article>
  </footer>
  <!-- Footer Section -->
  <section class="footer_banner" id="contact">
    <h2 class="hidden">Footer Banner Section </h2>
    <p class="hero_header">FOR THE LATEST NEWS &amp; UPDATES</p>
    <div class="button">subscribe</div>
  </section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2015 - <strong>Light Theme</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
