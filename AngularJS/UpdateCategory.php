

<?php
include("dbconnection.php");
$id=$_POST["id"];
$name=$_POST["cat_nm"];
$desc=$_POST["name"];
echo $id;

//$address=$_POST["address"];
$sql=$dbh->prepare("update category SET cat_name=?,description=? where cat_id=?");
$sql->execute(array($name,$desc,$id));
if($sql->rowCount()>0)
{
	echo "<script>
	alert ('Succcessfully updated....');
	window.location.href=('DisplayCategory.php')
	</script>";
}
?>

  