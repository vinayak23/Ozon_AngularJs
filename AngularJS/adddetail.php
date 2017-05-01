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
$name=$data->cat_name;
$desc=$data->des;
//$address=$_POST["address"];
$sql=$dbh->prepare("INSERT INTO category(cat_name, description) VALUES (?,?)");
$sql->execute(array($name,$desc));
if($sql->rowCount()>0)
	echo json_encode(array("successfullyadded"));
else
		echo json_encode(array("notadded"));

?>
  <?php }?>