
<?php
include("dbconnection.php");
$sql1=$dbh->prepare("select b.sub_id,a.cat_name, b.sub_name, b.sub_desc from category a, sub_category b where a.cat_id=b.cat_id and Del_Flag=0;");
$sql1->execute();
$data=array();
while($row=$sql1->fetch())
{
	$data[]=$row;
	
}
echo json_encode($data);

 ?>
 
 