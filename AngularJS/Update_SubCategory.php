

<?php
include("dbconnection.php");
$data= json_decode(file_get_contents('php://input'));
$id=$data->id;
$cid=$data->cid;
$sname=$data->scat_name;
$desc=$data->des;

//$address=$_POST["address"];
$sql=$dbh->prepare("update sub_category SET cat_id=?,sub_name=?,sub_desc=? where sub_id=?");
$sql->execute(array($cid,$sname,$desc,$id));
if($sql->rowCount()>0)
	
	echo json_encode(array("successfullyadded"));
else
	echo json_encode(array("notadded"));
?>

  <?php } ?>