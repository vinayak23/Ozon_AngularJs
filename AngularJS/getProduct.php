

<?php
include("dbconnection.php");

$data= json_decode(file_get_contents('php://input'));
$pid=$data->id;
$data=array();
$sql=$dbh->prepare("select * from product where pro_id=?");
$sql->execute(array($pid));
if($sql->rowCount()>0)
{
	$row=$sql->fetch();
	$data[]=array("cat_id"=>$row["cat_id"],"sub_id"=>$row["sub_id"],"pro_name"=>$row["product_name"],"pro_description"=>$row["product_description"]);
	
	echo json_encode($data);
	}
?>

 