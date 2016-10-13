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

   //$( "#push_message" ).click(function() {
    $(document).keypress(function(e) {
    if(e.which == 13)
	{
		var reg_number = $("#reg_number").val();
		var text_to_push = $("#job").val();
		/* write function to verify properly*/
        if (reg_number.length>0 && text_to_push!=0){

			//$("#text_row2").text(reg_number +" if_och " +text_to_push + text_to_push.length);

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
	}ß
	});


/* $(function(){
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
    }); */

	$("#reg_number").keyup(function(event){
	$(this).css("text-transform","uppercase")
	$("#postlist").text('');
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
 top:40px;
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
 left:5px;
 width:850px;
 height: 25px;
 padding-top: 25px;
    padding-right: 0px;
    padding-bottom: 45px;
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
 left:0px;
 width:100%;
 height: 25px;
 padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 60px;
    padding-left: 15px;
}
#div-placeholder_text_faq {
 position:relative;
 top:25px;
 width:80%;
 clear:both;
 overflow:hidden;
 background-color:#ffffff;
 padding-bottom: 50px;
 padding-left: 10px;

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
    <a href="index.php"><h4 class="logo"><img src="pix/home.png" width="50" height="40"></h4></a>
    <div style="position:relative; left:0px; top: 18px; width: 1000px;" >

       <a href="read_text_with_regina.php" style="padding:25px;">LÄS TEXT</a>
       <a href="send_text_to_regnumber.php" style="padding:25px;">SKICKA TEXT</a>
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
<div id="div-placeholder"><!--<div id="div-headline-center-small" class="element"></div>-->
 </div>

 <!-- Form --><!-- Why Regina section -->
<div id="div-placeholder">
  <div id="div-headline">VARFÖR REGINA!
  </div>
 </div>

    <div id="div-placeholder">
    <p id="why_reg_row"><img src="pix/Broken_car_shield.jpg" width="250px" style="padding-left:10px;"> <img id="why_reg_btn" src="pix/Thief_in_area.jpg" width="250px" style="padding-right:20px;"><img id="why_reg_btn2" src="pix/Date_parking_sign.jpg" width="250"></p>
 </div>
  <div id="div-placeholder_text">
   <p class="text_column" style="padding-left:30px;">Det händer att man ser en felparkerad bil då dagen för snöröjning eller gatusopning är kommen. Gör en god gärning och skicka en påminnelse. Allt du behöver är regnummer och Regina.</p>
    <p class="text_column">Ser du något skumt i ditt område? Använd Regina som ett verktyg att upplysa varandra om misstänkta aktiviteter runt en parkeringsplats eller ett garage. Tänk på att du själv både kan ta emot och skicka information via registreringsnumret.</p>
    <p class="text_column">När din bil får en skada bör du agera skyndsamt för att undvika följdskador. Om du råkar ut för inbrott i bilen är det illa nog, men om det också regnar in för att du inte upptäcker den trasiga rutan blir det än värre.</p>
  </div>
   <!-- End Why regina section -->

   <div id="div-headline"></div>
   <div id="div-placeholder">
    <div id="div-greenline"></div>

    </div>

   <!-- Form --><!-- Use cases -->
<div id="div-placeholder">
  <div id="div-headline">HUR FUNKAR DET?
  </div>
 </div>

    <div id="div-placeholder" style="padding-bottom:200px;">
    <p id="why_reg_row"><img src="pix/funkar_top_image.jpg" width="900" height="360" style="padding-left:10px;"></p>
 </div>
   <!-- End Why regina section -->

   <div id="div-placeholder">
		<div id="div-headline"></div>
	  <div id="div-headline" style="height:75px;">FAQ</div>
	  </div>

		<div id="div-placeholder_text_faq">
		<p class="text_column_wide" style="padding-left:40px;">1. Hur hittar jag texter som skickats till min bil? @svar: a. Gå in på ”Läs text” och knappa in ditt registreringsnummer.</p>
		<p class="text_column_wide" style="padding-left:40px;">2. Jag hittar inte appen på appstore? @svar: a. Appen finns för närvarande bara för Android. Övriga får använda webben ytterligare en tid. Vi jobbar på det.</p>
		<p class="text_column_wide" style="padding-left:40px;">3. Hur loggar jag in? @svar: Du behöver inte logga in. Vi har inget behov av att veta vem du är eller vilken e-post du har. All kommunikation sker direkt i appen och då behöver du inte logga in.</p>
		<p class="text_column_wide" style="padding-left:40px;">4. Vem kan se vad jag skriver? @svar: Eftersom vem som helst kan söka på ett registreringsnummer kan vem som helst se vad som skickats till det. Regina är inte ett social nätverk där du har konversationer med individer. Regina är tänkt som ett öppet nätverk för information som kan hjälpa alla trafikanter. Därför har vi valt att köra öppet tills vidare.</p>
		<p class="text_column_wide" style="padding-left:40px;">5. Kan andra användare se vem jag är? @svar: Nej, vi tillhandahåller ingen information om fordonet som har ett visst registreringsnummer. Inte heller någon information om ägaren eller föraren. Vi fixar så att ni kan snacka med varandra, utan att behöva veta vilka ni är. Det viktiga är att rätt person får informationen, inte vem den personen är.</p>
		<p class="text_column_wide" style="padding-left:40px;">6. Jag har en moped, kommer det att fungera? @svar: Japp, all konversation sker runt registreringsnumret, inte fordonet. Alla fordon som har ett registreringsnummer kan använda Regina.</p>
		<p class="text_column_wide" style="padding-left:40px;">7. Min bil är modern, jag behöver inte Regina. @svar: Nja, du behöver kanske inte Regina för att få veta att larmet på din bil går, eller att en lampa är trasig. Men andra trafikanter kan inte nå dig via den app som din biltillverkare utvecklat. Med Regina spelar årsmodell och bilmärke ingen roll. Alla kan vara med.</p>
		<p class="text_column_wide" style="padding-left:40px;">8. Är det här allt? @svar: Vi på Regina har stora planer. Vi börjat dock med att etablera detta API för kommunikation. Hjälp oss sprida det för snabbare utveckling av häftiga funktioner. Vi hör av oss när det kommer uppdateringar.</p>
		<p class="text_column_wide" style="padding-left:40px;"></p>
		<p class="text_column_wide" style="padding-left:40px;">Har du en fråga som inte besvaras här så är du varmt välkommen att kontakta oss via hej@regina.se!</p>
	</div>


  <div id="div-headline"></div>
  <div id="div-headline"></div>
  <div id="div-headline"></div>
  <div id="div-headline"></div>
<!-- Main Container Ends -->
</body>
</html>
