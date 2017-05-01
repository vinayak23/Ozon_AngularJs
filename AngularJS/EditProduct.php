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
$name= $_REQUEST['name'];
?>

<div class="app" ng-app="Product" ng-controller="ProductC" ng-init="get_category();get_product('<?php echo $id;?>')">
<?php include("sidebar.php");?>


<div class="app-container">

  <?php include("header.php");?>





	<div class="row">
		<form method="POST" name="form">
  			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
       						   Product Update
					</div>
      					<div class="card-body">
							<div class="row">
								<div class="col-md-6">
								<label>category</label>
								<input type="textbox" name="pid" style="visibility:hidden;"/>
								<select class="form-control"  name="id" ng-model="id" ng-change="get_subcategory(id)">
								
								<option ng-repeat="a in category" value="{{a.cat_id}}">{{a.cat_name}}</option>
								</select>
								
								<label>Sub category</label>
								<select class="form-control"  name="sid" ng-model="sid" id="sid">
								<option ng-repeat="a in subid" value="{{a.sub_id}}">{{a.sub_name}}</option>
							
										
								</select>
								
 							
									<label>Product name</label>
									
									<input type="text" class="form-control" name="pro_nm" ng-model="pro_nm" required placeholder="Product name">
									<label>Product description</label>
									<textarea name="pro_desc" ng-model="pro_desc" rows="3" class="form-control" required></textarea>
  							  </div>
  							  
  							<div class="form-group">
      							<div class="col-md-9 col-md-offset-3">
       								 <button ng-click="UpdateProduct('<?php echo $id;?>')" type="submit" class="btn btn-primary" >Update</button>
       								  <a href="./DisplayProduct.php"> 
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
	</div>
	</div>
	
		</body>
		</html>
		
  <?php } ?>