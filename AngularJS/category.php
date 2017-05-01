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
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
  <script src="js/app.js"></script>
</head>
<body>

<div class="app app-default" ng-app="categoryApp" ng-controller="categoryCtrl">
<?php include("sidebar.php");?>


<div class="app-container">

  <?php include("header.php");?>

	
		<div class="row">
			<form method="POST" name="form">
  			  <div class="col-md-12">
    			  <div class="card">
       					 <div class="card-header">
       						   Basic Elements
      					  </div>
      					  <div class="card-body">
         				 <div  class="row">
 							 <div class="col-md-6">
  							  <input type="text" ng-model="cat_nm"  class="form-control" name="cat_nm" id="cat_nm" placeholder="Category name" required >
  							  <textarea name="name" id="name" ng-model="name" rows="3" class="form-control" required ></textarea>
  							  </div>
  							  
  							  <div class="form-group">
      							<div class="col-md-9 col-md-offset-3">
       								 <button ng-click="add_category()" type="submit" class="btn btn-primary" >Save</button>
       								  <a href="./DisplayCategory.php"> 
       								 <button type="button" class="btn btn-primary" >Cancle</button>
      									</a>
   							   </div>
  						  </div>
  							  
  							</div>
  							
  							
  							
      				</div>
      			</div>	
      	</div>
      	</form>
</div>

  
</div>
  <script src="all-letter.js"> </script>
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</form>
</body>
</html>

  <?php } ?>