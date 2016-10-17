<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

if((isset($_POST["reg_number"]) && !empty($_POST["reg_number"])) && (isset($_POST["text_to_push"]) && !empty($_POST["text_to_push"]))){

include('db_no_git/regina_dbConfig.php');
$db->set_charset('utf8');
$reg_number = strtoupper(substr($_POST["reg_number"],0,7));
$reg_number = mysqli_real_escape_string($db,$reg_number);
$reg_number = strip_tags($reg_number);

$text_to_push = substr($_POST["text_to_push"],0,100);
$text_to_push = mysqli_real_escape_string($db,$text_to_push);
$text_to_push = strip_tags($text_to_push);


	//$url = 'http://localhost:8888/regina_json/testcurl_receiver.php';

	$url = 'https://apiregina.custodes.se/';

	$data = array ("namespace" => "message", "function" => "createMessage", "data" => array ("userIdentifier" =>"951bc7f4834c555f","carIdentifier" => $reg_number, "content" =>$text_to_push));


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

	//var_dump($errors);
	//var_dump($response);

	curl_close($ch);

	# Print response.
	if($result)
	{
		$arr = json_decode($result,true);

		if ($arr['data']['error'] == 0)
		{
			 echo "Du har skickat: @".strtoupper($reg_number)." - ".$text_to_push."!"; //echo $arr['data']['message'];
		}
		else
		{
			echo $arr['data']['message'];
		}

		//echo "<pre>$result</pre>";
	}
	else
	{
		var_dump($errors);
		var_dump($response);
	}

}
else
{
	echo "Något gick fel! Ladda om sidan och prova igen (No input to process)";
}

?>
