
<?php
include("dbconnection.php");
$sql1=$dbh->prepare("select b.sub_name,a.cat_name, c.pro_id, c.product_name, c.product_description from category a, sub_category b,product c where a.cat_id=c.cat_id and b.sub_id=c.sub_id and c.del_flg=0;");
$sql1->execute();
$data=array();
while($row=$sql1->fetch())
{
	$data[]=$row;
	
}
echo json_encode($data);

 ?>
 