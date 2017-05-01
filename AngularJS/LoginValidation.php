<?php

session_start();

include("dbconnection.php");
$data= json_decode(file_get_contents('php://input'));
$uname=$data->username;
$pass=$data->pass;
$hash = hash('sha256', $pass);
$salted_hash = hash('sha256',$hash);


$sql= $dbh->prepare("select * from register where username='$uname'");
$sql->execute();
$result=$sql->fetch();
$user=$result["username"];
$hashpass=$result["pass"];
//echo $user;
//echo $salted_hash;
//echo $hashpass;



if($uname == $user)
	{
		
		if($hashpass == $salted_hash)
		{
			$query = $dbh->prepare("SELECT * FROM register WHERE username = '$user' AND pass = '$hashpass'");
			$query->execute();
		
				if(!$row = $query->fetch())
				{
					echo "InvalidUserNameandPassword";
				}
				else
				{
				$_SESSION['ID'] = $row['ID'];
				$_SESSION['F_name'] = $user;
				$_SESSION['L_name'] = $row['lname'];
			
			
					//echo $result = ("authorised");
				echo json_encode(array("SuccessfullyLogin"));
				//echo $_SESSION['ID']; 
				}
		}
		else
			{
			echo json_encode(array("InvalidPassword"));
			}
	}
	else
	{
		echo json_encode(array("InvalidUsername"));
	}
	
	
	
	//$address=$_POST["address"];
/*$sql=$dbh->prepare("select * from register where username=? and pass=?");
$sql->execute(array($name,$pass));
if($sql->rowCount()>0)
{
	while($row = $sql->fetch()) 
	{
		$dbname=$row["username"];
		$dbpass=$row["pass"];
	}
	echo $dbname;
	echo $name;
	
	if($dbname==$name && $dbpass==$pass)
	{
		echo "<script>window.location.href=('index.php')</script>";
	}
		 
}*/



?>