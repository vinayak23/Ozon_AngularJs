<?php
include("dbconnection.php");
$data= json_decode(file_get_contents('php://input'));
$fname=$data->fname;
$lname=$data->lname;
$uname=$data->username;
$pass=$data->pass;


$hash = hash('sha256', $pass);                    
$enc_pwd = hash('sha256',$hash);
//$address=$_POST["address"];
$sql=$dbh->prepare("insert into register (fname,lname,username,pass) values(?,?,?,?)");
$sql->execute(array($fname,$lname,$uname,$enc_pwd));
if($sql->rowCount()>0)
{
	
	echo json_encode(array("successfullyadded"));
}else
	echo json_encode(array("notadded"));


?>