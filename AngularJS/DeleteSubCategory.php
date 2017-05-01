<?php

  session_start();
  $ID = $_SESSION['ID'];
  $F_name = $_SESSION['F_name'];
  $L_name = $_SESSION['L_name'];
  
  echo "id: ".$ID;
  //echo "Name: ".$name;

    if($_SESSION["ID"] == null)
    {
     header("Location: ./Login.php");
    }
  else{

?>
<?php
include("dbconnection.php");

$data= json_decode(file_get_contents('php://input'));
$sid=$data->id;

$sql=$dbh->prepare("update sub_category SET Del_Flag=? where sub_id=?");
$sql->execute(array('1',$sid));
if($sql->rowCount()>0)
	
	echo json_encode(array("successfullyadded"));
else
	echo json_encode(array("notadded"));
?>

  <?php } ?>