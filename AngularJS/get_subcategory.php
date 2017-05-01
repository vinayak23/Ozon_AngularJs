

<?php
include("dbconnection.php");
$data=json_decode(file_get_contents("php://input"));
$sub_id=$data->id;
$sql1=$dbh->prepare("select b.sub_id,a.cat_id, b.sub_name, b.sub_desc from category a, sub_category b where a.cat_id=b.cat_id and b.sub_id=$sub_id");
$sql1->execute();
$data=array();
while($row=$sql1->fetch())
{
	$data[]=array("sub_name"=>$row['sub_name'],
	"sub_desc"=>$row['sub_desc'],
	"cat_id"=>$row['cat_id']);
}
echo json_encode($data);

 ?>
 
  