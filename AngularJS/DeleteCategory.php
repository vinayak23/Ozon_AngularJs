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
$cid=$data->id;

$sql=$dbh->prepare("update category SET del_flg=? where cat_id=?");
$sql->execute(array('1',$cid));
if($sql->rowCount()>0)
	
	echo json_encode(array("successfullyadded"));
else
	echo json_encode(array("notadded"));
?>

  <?php } ?>