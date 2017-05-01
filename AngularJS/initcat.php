

<?php
include("dbconnection.php");
$data= json_decode(file_get_contents('php://input'));
$cid=$data->id;

//$address=$_POST["address"];
$sql=$dbh->prepare("select * from category where cat_id=?");
$sql->execute(array($cid));
$data=array();
$row=$sql->fetch();
if($sql->rowCount()){
	$data[]=array(
	"cat_name"=>$row["cat_name"],"cat_desc"=>$row["description"],
	);
}
echo json_encode($data);
?>

  