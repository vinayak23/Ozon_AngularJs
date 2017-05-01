<?php

  session_start();
  $ID = $_SESSION['ID'];
  $F_name = $_SESSION['F_name'];
  $L_name = $_SESSION['L_name'];
  
  echo "id: ".$ID;
  //echo "Name: ".$name;

    if($_SESSION["ID"] == null)
    {
     header("Location: ./Login.php");
    }
  else{

?>

<?php 
include("dbconnection.php");
$val=$_POST("val");
echo $val;
if(!empty($_POST['val']))
{
	$cid=$_POST['val'];
	//echo $cid;
	$query=$dbh->prepare("select * from sub_category where cat_id=$cid");
	
	//$result=mysqli_query($dbh,$query);
	foreach($query as $sub)
	{
		?>
		<option value="<?php echo $sub['sub_id'];?>"><?php echo $sub['sub_name'];?></option>
	<?php 
	}
}else{
	echo "<script>alert('Error');</script>";
}

?>

  <?php } ?>