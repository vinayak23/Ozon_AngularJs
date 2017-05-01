

<?php
include("dbconnection.php");
$data= json_decode(file_get_contents('php://input'));
$id=$data->id;
$cid=$data->cid;
$sid=$data->s_id;
$pro_name=$data->pro_name;
$pro_desc=$data->pro_desc;

//$address=$_POST["address"];
$sql=$dbh->prepare("update product SET cat_id=?,sub_id=?,product_name=?,product_description=? where pro_id=?");
$sql->execute(array($cid,$sid,$pro_name,$pro_desc,$id));
if($sql->rowCount()>0)
	
	echo json_encode(array("successfullyadded"));
else
	echo json_encode(array("notadded"));
?>
