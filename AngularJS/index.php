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

<DOCTYPE html>

<html>
<head>
  <title>Main_Page</title>
  
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
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script> 
<script src="js/app.js"></script>
</head>
<body ng-app="categoryApp">
 <li><a href="#Cat">Category</a></li><li><a href="#Sub">SubCategory</a></li>
 <div ng-view></div>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"> Admin</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="active">
        <a href="./index.php">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      
      
      
        <a href="DisplayCategory.php"> 
          <div class="title">CATAGORY</div>
        </a>
     
     
        <a href="./DisplaySubCategory.php">
          <div class="title">SUB CATEGORY</div>
        </a>
        
         <a href="./DisplayProduct.php"> 
          <div class="title">PRODUCT</div>
        </a>
        
    </ul>
  </div>
</aside>


<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        
        
      </ul>
      
      
      <ul class="nav navbar-nav navbar-right">
     		<a href="./logout.php"> 
            <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button></a>
      </ul>
    </div>
  </div>
</nav>

</div>
  
</div>
  
 

</body>
</html>
  <?php } ?>