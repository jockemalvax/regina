<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

if((isset($_POST["reg_number"]) && !empty($_POST["reg_number"])))
{

//Include DB configuration file
include('../db_no_git/regina_dbConfig.php');
$db->set_charset('utf8');

$date= new DateTime('NOW');
$date_to_push = $date->format('Y-m-d H:i');

$reg_number = strtolower(substr($_POST["reg_number"],0,25));
$reg_number = preg_replace('/\s+/', '', $reg_number);
$reg_number = mysqli_real_escape_string($db,$reg_number);
$reg_number = strip_tags($reg_number);

	//$url = 'http://localhost:8888/regina_json/testcurl_receiver.php';
	
	$url = 'https://apiregina.custodes.se/';
	
	$data = array ("namespace" => "message", "function" => "getMessagesForCar", "data" => array ("carIdentifier" => $reg_number));
	
   
	$ch = curl_init( $url );
	
	# Setup request to send json via POST.
	$payload = json_encode( $data );
	//$payload = json_encode( "data" => $data );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Basic cmVnaW5hOlN1RDM4bGI3', 
'Accept−Charset: UTF−8'));
	
	# Return response instead of printing.
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	
	# Send request.
	$result = curl_exec($ch);
	
	$errors = curl_error($ch);
	$response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	
	
	curl_close($ch);
	
	# Print response.
	if($result)
	{
		
		//echo "apan";
		$arr = json_decode($result,true);
		
		if(count($arr['data']['messages'])>0)
		{
		
			for ($i = 0; $i < count($arr['data']['messages']); $i++)
			{
			 ?>
             <div id="div-placeholder">
			 <div id="result_box">@<?php echo htmlspecialchars(strtoupper($arr['data']['messages'][$i]['carId'])); ?> - <?php echo htmlspecialchars($arr['data']['messages'][$i]['content']); ?>
		</div>
		<p id="enter_text_2"><?php echo htmlspecialchars(substr($arr['data']['messages'][$i]['date'],0,16)); ?></p>
 
  		<?php	
			}
			
		
		}
		else
		{
			?><div id="div-placeholder">
				<div id="result_box">@<?php echo htmlspecialchars(strtoupper($reg_number)); ?> - Vi hittade inga träffar just nu, men det är så här de ser ut!
			</div>
			<p id="enter_text_2"><?php echo $date_to_push;?></p>
			
			<?php
			//var_dump($errors);
			//var_dump($response);
	

		}
	}
	else
	{
		echo "Något gick fel! Ladda om sidan och prova igen (No input to process)";
	}
	
}
else
{
	echo "Något gick fel! Ladda om sidan och prova igen (No input to process)";
}
?>