<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

if((isset($_POST["reg_number"]) && !empty($_POST["reg_number"])))
{

$date= new DateTime('NOW');
$date_to_push = $date->format('Y-m-d H:i');

//Include DB configuration file
include('../db_no_git/regina_dbConfig.php');
$db->set_charset('utf8');

$reg_number = substr($_POST["reg_number"],0,25);
$reg_number = preg_replace('/\s+/', '', $reg_number);
$reg_number = mysqli_real_escape_string($db,$reg_number);
$reg_number = strip_tags($reg_number);


//Get rows by limit except already displayed
$query = $db->query("SELECT * FROM message_que WHERE M_Reg_number = '".$reg_number."' ORDER BY M_Created DESC LIMIT 30");

	if($query->num_rows > 0)
	{
    	while($row = $query->fetch_assoc())
		{ ?>
  
        <div id="div-placeholder">
			<div id="result_box">@<?php echo htmlspecialchars(strtoupper($row["M_Reg_number"])); ?> - <?php echo htmlspecialchars($row["M_Text_to_send"]); ?>
		</div>
		<p id="enter_text_2"><?php echo htmlspecialchars(substr($row["M_Created"],0,16)); ?></p>

          
	<?php }
	}
	else
	{ 
	?>
    	<div id="div-placeholder">
			<div id="result_box">@<?php echo htmlspecialchars(strtoupper($reg_number)); ?> - Vi hittade inga träffar just nu men det skulle kunna se ut så här när någon skickar till dig!
		</div>
		<p id="enter_text_2"><?php echo $date_to_push;?></p>
	<?php 
	}
	 
}
else
{
	 header('HTTP/1.1 500 No values submitted!');
}
?>