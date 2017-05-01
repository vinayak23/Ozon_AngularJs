<!DOCTYPE html>
<html>
<head>
  <title>UserLogin</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

  <link rel="stylesheet" type="text/css" href="Ozon/dist/html/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="Ozon/dist/html/assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/yellow.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/app.js"></script>

</head>
<body>



  <div class="app app-default" ng-app="Login" ng-controller="LoginCtrl" >

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
      <div class="app-form">
        <div class="form-header">
          <div class="app-brand"> Admin Login</div>
        </div>
        <form method="POST" name="form">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" ng-model="uname" class="form-control" placeholder="Username" name="uname" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" ng-model="pass" class="form-control" placeholder="Password" name="pass" aria-describedby="basic-addon2">
            </div>
            <div class="text-center">
                <input type="submit" ng-click="LoginForm()" class="btn btn-success btn-submit" value="Login">
            </div>
        </form>

        <div class="form-line">
          <div class="title">OR</div>
        </div>
        <div class="form-footer">
          <button type="button" class="btn btn-default btn-sm btn-social __facebook">
            <div class="info">
              <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
              <span class="title">Login with Facebook</span>
            </div>
          </button>
        </div>
      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
</body>
</html>