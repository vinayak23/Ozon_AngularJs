

<?php
include("dbconnection.php");
$data=json_decode(file_get_contents("php://input"));
$cat_id=$data->cat_id;
$sql1=$dbh->prepare("select b.sub_id,a.cat_id,a.cat_name, b.sub_name, b.sub_desc from category a, sub_category b where a.cat_id=b.cat_id and b.Del_Flag=0 and b.cat_id=?");
$sql1->execute(array($cat_id));
$data=array();
while($row=$sql1->fetch())
{
	$data[]=$row;
	
}
echo json_encode($data);

 ?>
 
 