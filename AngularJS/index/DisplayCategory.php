<?php

  session_start();
  $ID = $_SESSION['ID'];
  $F_name = $_SESSION['F_name'];
  $L_name = $_SESSION['L_name'];
  
 // echo "id: ".$ID;
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

<div class="app app-default" ng-app="DisplayCat" ng-controller="DisplayCatCtrl">
<?php include("sidebar.php");?>


<div class="app-container">

  <?php include("header.php");?>

<div class="row">
    <div class="col-xs-12">
    <div class=" pull-right" >
     <a href="./category.php"> 
     <button type="submit" class="btn btn-primary" >ADD</button>
      </a>							  		
  	 </div>
      <div class="card">
        <div class="card-header">
          Caterogy Table
        </div>
        
        <div class="card-body">
          <div class="row">
  <div class="col-md-8">
    <table class="table" ng-init="DisplayCategory()">
      <thead>
        <tr>
          <th>#</th>
          <th>Cat Name</th>
          <th>Discription</th>
         <th>Edit/Delete</th>

<tr ng-repeat="cat in category">
<td>{{cat.cat_id}}</td>
<td>{{cat.cat_name}}</td>
<td>{{cat.description}}</td>
<th><a href="EditCategory.php?id={{cat.cat_id}}">Edit</a>/<a href="" ng-click="DelettCat(cat.cat_id)">Delete</a></td>
</tr>

</table>
</body>
</html>

<?php } ?>