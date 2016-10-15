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
#faqs dt, #faqs dd { padding: 0 0 0 50px }
#faqs dt { font-family: Arial,Gotham, Helvetica Neue;font-size:1.5em; color: #555; cursor: pointer; height: 37px; line-height: 37px; margin: 0 0 15px 25px}
#faqs dd { font-family: Arial,Gotham, Helvetica Neue;font-size: 1em; margin: 0 0 20px 25px}
#faqs dt { background: url(pix/expand-icon.png) no-repeat left}
#faqs .expanded { background: url(pix/expanded-icon.png) no-repeat left}
</style>
<body>
<dl id="faqs">
  <dt>Hur hittar jag texter som skickats till min bil?</dt>
  <dd>Gå in på ”Läs text” och knappa in ditt registreringsnummer</dd>

  <dt>Jag hittar inte appen på appstore!</dt>
  <dd>Appen finns för närvarande bara för Android. Övriga får använda webben ytterligare en tid. Vi jobbar på det</dd>

  <dt>Hur loggar jag in?</dt>
  <dd>Du behöver inte logga in. Vi har inget behov av att veta vem du är eller vilken e-post du har. All kommunikation sker direkt i appen och då behöver du inte logga in</dd>
</dl>
</body>
</html>
