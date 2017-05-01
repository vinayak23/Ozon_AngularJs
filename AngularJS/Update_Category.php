	

<?php
include("dbconnection.php");
$data= json_decode(file_get_contents('php://input'));
$cid=$data->id;
$cname=$data->cat_name;
$desc=$data->des;

//$address=$_POST["address"];
$sql=$dbh->prepare("update category SET cat_name=?,description=? where cat_id=?");
$sql->execute(array($cname,$desc,$cid));
if($sql->rowCount()>0)
	
	echo json_encode(array("successfullyadded"));
else
	echo json_encode(array("notadded"));
?>

 