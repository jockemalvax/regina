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
<title>Skicka text till registreringsnummer med Regina</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.1.0.js"></script>
<link rel="icon" href="pix/favicon.png">
<script>

$(document).ready(function(){

   //$( "#push_message" ).click(function() {
    $(document).keypress(function(e) {
	$("#postlist").text('');
    if(e.which == 13)
	{
		var reg_number = $("#reg_number").val();
		var text_to_push = $("#job").val();
		/* write function to verify properly*/
        if (reg_number.length>0 && text_to_push!=0){

			//$("#text_row2").text(reg_number +" if_och " +text_to_push + text_to_push.length);

			$.ajax({
                type:'POST',
                //url:'pushData.php',
                url:'pushData.php',
				data:'reg_number='+reg_number+'&text_to_push='+text_to_push,
                beforeSend:function(html){
                    $("#loader").show();
                },
                success:function(html){
                    $("#loader").remove();
                    $('#postlist').append(html); /* Post progress from insert function*/
					$("#reg_number").val('');
					$("#job").val('0');
					$("#job").prop('disabled', 'disabled');
					$("#reg_number").focus();

                }
            });
        }
		else
		{
			//$("#text_row2").text(reg_number +" else_och " +text_to_push);
		}
	}
	});

	$("#reg_number").keyup(function(event){
	$(this).css("text-transform","uppercase")
	var myLength = $("#reg_number").val().replace(/ /g, '').length;
		if(myLength>=2)
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
 text-align:left;
 color:#8bc34a;
 position:relative;
 top:40px;
 left:200px;
 width:100%;
 height: 25px;
 padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 80px;
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
      <a href="index.php"><h4 class="logo" style="width:50px;"><img src="pix/home.png" width="50px" height="40px"></h4></a>
    <div style="position:relative; left:60px; top: 18px; width: 900px; align:left;">

       <a href="read_text_with_regina.php" style="padding-right:25px;">LÄS TEXT</a>
       <a href="send_text_to_regnumber.php" style="padding:25px;">SKICKA TEXT</a>
     <a href="api_functionality_regina.php" style="padding:25px;">HUR FUNKAR DET?</a>
     <a href="usecases_for_regina.php" style="padding:25px;">VARFÖR REGINA?</a>
     <a href="download_application.php" style="padding:25px;">LADDA NER APP</a>

    </div>
  </header>
  <!-- Hero Section --><!-- Rotating text -->
<div id="div-placeholder">
 <div id="div-headline-center">SKICKA TEXT!</div>
 <!--<div id="div-headline-center-small" class="element"></div>-->
 </div>

 <!-- Form -->
 <div id="div-placeholder">
 <div class="form-style-6">

<input id="reg_number" type="text" name="field1" placeholder="Fyll i reg. nummer ex: ABC123" />

<select id="job" name="field4" disabled>
<option value="0" selected>Välj meddelande</option>
<optgroup label="Gör någon glad">
  <option value="tack">Tack!</option>
  <option value="Snygg backspegel!">Snygg backspegel!</option>
  <option value="Blink blink">Blink blink</option>
</optgroup>
<optgroup label="Säg ifrån">
  <option value="Men blinka då!!">Men blinka då!!</option>
  <option value="Sluta kolla mobilen när du kör!!">Sluta kolla mobilen när du kör!!</option>
  <option value="Svårt att läsa? - Parkering förbjuden här av en anledning!">Svårt att läsa? - Parkering förbjuden här av en anledning!</option>
</optgroup>
<optgroup label="Uppmana">
  <option value="Tvätta mig - mina grannar skäms!">Tvätta mig - mina grannar skäms!</option>
  <option value="Flytta mig - det är städdag!">Flytta mig - det är städdag!</option>
  <option value="Titta till mig - jag behöver dig!">Titta till mig - jag behöver dig!</option>
</optgroup>
</select>

<div id="loader" style="display:none;"><img src="pix/loader.gif"></div>
<!--<input id="push_message" type="submit" value="Skicka" />-->
<div id="postlist"></div>

</div>
</div>

<!-- Search results -->

 <div id="div-placeholder" style="height:300px;"></div>

 <!-- Why Regina section -->
<div id="div-placeholder">

</div>

    <div id="div-placeholder"></div>
   <!-- End Why regina section -->


  <!-- Parallax Section --><!-- More Info Section -->
  <footer></footer>
  <!-- Footer Section --><!-- Copyrights Section -->
</div>
<!-- Main Container Ends -->
</body>
</html>
