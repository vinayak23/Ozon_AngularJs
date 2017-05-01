<?php

include("dbconnection.php");
$sql1=$dbh->prepare("select * from category where del_flg=0");
$sql1->execute();
$data=array();
while($row=$sql1->fetch())
{
	$data[]=array("cat_id"=>$row["cat_id"],"cat_name"=>$row["cat_name"],"description"=>$row["description"]);
	
}
echo json_encode($data);
 
  ?>