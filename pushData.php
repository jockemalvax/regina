<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
date_default_timezone_set('Europe/Stockholm');

if((isset($_POST["reg_number"]) && !empty($_POST["reg_number"])) && (isset($_POST["text_to_push"]) && !empty($_POST["text_to_push"]))){

//Include DB configuration file
include('../db_no_git/regina_dbConfig.php');

//Get last ID
$reg_number = $_POST["reg_number"];
$text_to_push = $_POST["text_to_push"];
$date= new DateTime('NOW');
$date_to_push = $date->format('Y-m-d H:i:s');

//$insert_row = $db->query("INSERT INTO message_que (M_Reg_number, M_Text_to_send) VALUES('".$reg_number."','".$text_to_push."')");

$insert_row = $db->query("INSERT INTO message_que (M_Reg_number, M_Text_to_send, M_Created) VALUES('".$reg_number."','".$text_to_push."','".$date_to_push."')");

    if($insert_row)
    {
         //Record was successfully inserted, respond result back to index page
         /* $my_id = $db->insert_id; //Get ID of last inserted row from MySQL
          echo '<li id="item_'.$my_id.'">';
          echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-'.$my_id.'">';
          echo '<img src="images/icon_del.gif" border="0" />';
          echo '</a></div>';
          echo $contentToSave.'</li>';
          $mysqli->close(); //close db connection */
		  echo "Ditt meddelande är skickat!";

    }else{
        
        //header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
        //header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
        //kanske borde skriva ner felen till databasen?
		//kolla hur man bäst sparar lösenorden
		//kolla även hur man skyddar den här filen från botar osv ()
		echo 'Something wring with insert statement'.mysqli_error($db);
		//exit();
    }

}
else
{
	 header('HTTP/1.1 500 No values submitted!');
     //exit();
}
//Limit on data display
/*$showLimit = 5;

//Get all rows except already displayed

$queryAll = $db->query("SELECT COUNT(*) as num_rows FROM posts WHERE id < ".$lastID." ORDER BY id DESC");
$rowAll = $queryAll->fetch_assoc();
$allNumRows = $rowAll['num_rows'];

//Get rows by limit except already displayed
$query = $db->query("SELECT * FROM posts WHERE id < ".$lastID." ORDER BY id DESC LIMIT ".$showLimit);

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){ 
        $postID = $row["id"]; ?>
        <div class="list-item"><a href="javascript:void(0);"><h2><?php echo $row["title"]; ?></h2></a></div>
<?php } ?>
<?php if($allNumRows > $showLimit){ ?>
    <div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
        <img src="loading.gif"/>
    </div>
<?php }else{ ?>
    <div class="load-more" lastID="0">
        That's All!
    </div>
<?php }
    }else{ ?>
    <div class="load-more" lastID="0">
        That's All!
    </div>
<?php
    }
} */
?>