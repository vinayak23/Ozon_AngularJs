

<?php
include("dbconnection.php");
$sub_id=$_POST['id'];
$cat_id=$_POST['catid'];
$sub_name=$_POST['scat_nm'];
$sub_desc=$_POST['name'];
echo $cat_id;
$sql=$dbh->prepare("update sub_category SET cat_id=?,sub_name=?,sub_desc=? where sub_id=?");
$sql->execute(array($cat_id,$sub_name,$sub_desc,$sub_id));
if($sql->rowCount()>0)
	echo "<script>alert ('successfully Updated');window.location.href=('DisplaySubCategory.php');</script>";
else
	echo "not added";

?>
  