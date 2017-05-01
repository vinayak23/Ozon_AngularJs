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

<div class="app app-default" ng-app="DisplayProduct" ng-controller="DisplayProductCtrl">
<?php include("sidebar.php");?>


<div class="app-container">

  <?php include("header.php");?>



<div class="row">
    <div class="col-xs-12">
    <div class=" pull-right" >
     <a href="AddProduct.php"> 
     <button type="submit" class="btn btn-primary" >ADD</button>
      </a>							  		
  	 </div>
      <div class="card">
        <div class="card-header">
          <h3>Product Details</h3>
        </div>
        
        <div class="card-body">
          <div class="row">
  <div class="col-md-10">
    <table class="table" ng-init="DisplayProduct()">
      <thead>
        <tr>
          <th>Product ID</th>
          <th>Cat Name</th>
          <th>Sub Name</th>
		  <th>Product Name</th>
		  <th>Product Description</th>
         <th>Edit/Delete</th>

<tr ng-repeat="pro in product">
<td>{{pro.pro_id}}</td>
<td>{{pro.cat_name}}</td>
<td>{{pro.sub_name}}</td>
<td>{{pro.product_name}}</td>
<td>{{pro.product_description}}</td>
<th><a href="./Editproduct.php?id={{pro.pro_id}}&name={{pro.cat_name}}">Edit</a>/<a href=""ng-click="DeleteProduct(pro.pro_id)">Delete</a></td>
</tr>

</table>
</body>
</html>

  <?php } ?>