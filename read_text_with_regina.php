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
<title>Läs text om din bil</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.1.0.js"></script>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<script>

$(document).ready(function(){

$( "#hamta" ).click(function() {
  var reg_number = $("#reg_number").val();

  /* write function to verify properly*/
    if (reg_number.length>0){

  $.ajax({
            type:'POST',
            url:'getData.php',
            data:'reg_number='+reg_number,
            beforeSend:function(html){
                $("#loader").show();
      $('#postlist').text('');
            },
            success:function(html){
                $("#loader").remove();
                $('#postlist').append(html); /* Post progress from insert function*/
            }
        });
    }
  else
  {
  /* Meddelande om korrekt input*/
  }
});

  //$( "#get_message" ).click(function() {
    $(document).keypress(function(e) {
    if(e.which == 13)
	{
	    var reg_number = $("#reg_number").val();

		/* write function to verify properly*/
        if (reg_number.length>0){

			$.ajax({
                type:'POST',
                url:'getData.php',
                data:'reg_number='+reg_number,
                beforeSend:function(html){
                    $("#loader").show();
					$('#postlist').text('');
                },
                success:function(html){
                    $("#loader").remove();
                    $('#postlist').append(html); /* Post progress from insert function*/
                }
            });
        }
		else
		{
			/* Meddelande om korrekt input*/
		}
	}
	});


	$("#reg_number").keyup(function(event){
	$(this).css("text-transform","uppercase")
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
 color:#000000;
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
	position: relative;
	top: 25px;
	left: 0;
	width: 100%;
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
	font-weight: bold;
	font-size: 45px;
	text-align: center;
	color: #8bc34a;
	position: relative;
	top: 40px;
	left: 25px;
	width: 82%;
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
#enter_text {
font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-weight:bold;
 font-size:10px;
 text-align:center;
 color:#8bc34a;
 position:fixed;
 top:265px;
 left:0px;
 width:100%;
 height: 15px;
 padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 5px;
    padding-left: 10px;
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
  font: 95% Arial, Helvetica, sans-serif;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 100%;
  height: 45px;
  padding: 2%;
  background: #8bc34a;
  border-bottom: 2px solid #8bc34a;
  border-top-style: none;
  border-right-style: none;
  border-left-style: none;
  color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #7bac41;
}
#result_box
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    -webkit-border-radius: 5px;
    outline:none;
    position:relative;
	margin-left:200px;
	box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 600px;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #8bc34a;
    padding: 3%;
    color: #555;
	height:55px auto;
    font: 95% Arial, Helvetica, sans-serif;
	font-size:23px;
	text-align:left;
    max-width: 600px;
    margin: 10px auto;
    padding: 16px;


}
#enter_text_2 {
font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-weight:bold;
 font-size:10px;
 text-align:center;
 color:#8bc34a;
 position:relative;
 top:5px;
 left:254px;
 width:100%;
}
#postlist {
 font-family: Arial,Gotham, Helvetica Neue, Helvetica,sans-serif;
 font-size:22px;
 color:#8bc34a;
}

</style>
</head>
<body onLoad="reg_number.focus();">
  <?php include_once("analytics.php") ?>
<!-- Main Container -->
<div class="container">
  <!-- Navigation -->
  <?php include_once("menu.php") ?>
  <!-- Hero Section --><!-- Rotating text -->
<div id="div-placeholder">
 <div id="div-headline-center">LÄS TEXT!</div>
  <div id="div-headline-center-small" class="element"></div>
 </div>

 <!-- Form -->
 <div id="div-placeholder">
 	<div class="form-style-6">

		<input id="reg_number" type="text" name="field1" maxlength="25" placeholder="Fyll i reg. nummer ex: ABC123" />
    <input id="hamta" type="submit" value="Hämta" />

    <div id="loader" style="display:none; padding-top:25px;"><img src="pix/loader.gif"></div>
    <!--<input id="push_message" type="submit" value="Skicka" />-->
    <div id="postlist" style="padding-top:25px;"></div>

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
