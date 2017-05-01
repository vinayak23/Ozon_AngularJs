<?php

  session_start();
  $ID = $_SESSION['ID'];
  $F_name = $_SESSION['F_name'];
  $L_name = $_SESSION['L_name'];
  
  //echo "id: ".$ID;
  //echo "Name: ".$name;

    if($_SESSION["ID"] == null)
    {
     header("Location: ./Login.php");
    }
  else{

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="Ozon/dist/html/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="Ozon/dist/html/assets/css/flat-admin.css">
  
 

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/app.js"></script>
</head>
<body>
<?php
$id = $_REQUEST['id'];
?>
<div class="app app-default" ng-app="categoryApp" ng-controller="categoryCtrl">
<?php include("sidebar.php");?>


<div class="app-container"  ng-init="categoryinit('<?php echo $id;?>')">

  <?php include("header.php");?>

  


	<div class="row">
			<form method="POST" name="form">
  			  <div class="col-md-12">
    			  <div class="card">
       					 <div class="card-header">
       						   Update Category
      					  </div>
      					  <div class="card-body">
         				 <div class="row">
 							 <div class="col-md-6">
 							 <input type="textbox" name="id" value="{{id}}"style="visibility:hidden;"/>
  							  <input type="text" class="form-control" name="cat_nm" ng-model="cat_nm" >
  							  <textarea rows="3" class="form-control" name="name" ng-model="name"></textarea>
  							  </div>
  							  
  							  <div class="form-group">
      							<div class="col-md-9 col-md-offset-3">
      								  
       								 <button ng-click ="UpdateCat('<?php echo $id;?>')" type="submit" class="btn btn-primary"> UPDATE</button>
       								  <a href="./DisplayCategory.php"> 
       								 <button type="button" class="btn btn-danger" >Cancle</button>
      									</a>
   							   </div>
  						  </div>
  							  
  							</div>
  							
  							
  							
      				</div>
      			</div>	
      	</div>
      	</form>
</div>




</body>
</html>

  <?php } ?>