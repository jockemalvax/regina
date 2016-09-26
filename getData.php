<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

if((isset($_POST["reg_number"]) && !empty($_POST["reg_number"])))
{

//Include DB configuration file
include('../db_no_git/regina_dbConfig.php');

//Get last ID
$reg_number = $_POST["reg_number"];

//Get rows by limit except already displayed
$query = $db->query("SELECT * FROM message_que WHERE M_Reg_number = '".$reg_number."' ORDER BY M_Created DESC LIMIT 30");

	if($query->num_rows > 0)
	{
    	while($row = $query->fetch_assoc())
		{ ?>
        <div class="list-item"><h2><?php echo $row["M_Text_to_send"]; ?></h2></div>
	<?php }
	}
	else
	{ 
	?>
    	<div class="load-more">
        	No result found!
    	</div>
	<?php 
	}
	 
}
else
{
	 header('HTTP/1.1 500 No values submitted!');
}
?>