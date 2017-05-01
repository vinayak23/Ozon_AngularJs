<!DOCTYPE html>
<html>
<head>
  <title>Sign_up</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="Ozon/dist/html/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="Ozon/dist/html/assets/css/flat-admin.css">
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="demo.css" />

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/yellow.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/app.js"></script>


<!--<script>
function validateForm() {
    var x = document.forms["form"]["fname"].value;
    var y = document.forms["form"]["lname"].value;
    var p = document.forms["form"]["username"].value;
    var q = document.forms["form"]["pass"].value;
    if (x == "") 
    {
        alert("First name must be filled out");
        return false;
    }
    else if(y == "")
    	{
    	  alert("Last name must be filled out");
          return false;

    	}
    else if(p == "")
	{
	  alert("Username must be filled out");
      return false;

	}

    else if(y == "")
	{
	  alert("Password must be filled out");
      return false;

	}

}
</script>-->
	
</head>
<style>
input.ng-invalid {
    background-color:lightblue;
}
input.ng-valid {
    background-color:"";
}
</style>
<body>
  <div class="app app-default" ng-app="Registration" ng-controller="RegistrationCtrl">

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
          <div class="form-suggestion">
            Create an account for free.
          </div>
          <form method="POST" name="form">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Firstname" required ng-model="fname" name="fname" aria-describedby="basic-addon1">

			  </div>
			  	<span ng-show="form.fname.$touched && form.fname.$invalid">The Firstname is required.</span>
			  
			   
              
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Lastname" required ng-model="lname" name="lname" aria-describedby="basic-addon1">
              </div>
			  	<span ng-show="form.lname.$touched && form.lname.$invalid">The Lastname is required.</span>
              
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
				  
                <input type="text" class="form-control" placeholder="Username" required ng-model="username" name="username" aria-describedby="basic-addon2">
              </div>
				<span ng-show="form.username.$touched && form.username.$invalid">The Username is required.</span>			  
			  
              <div class="input-group" ng-class="{ 'has-error': form.pass.$touched && form.pass.$invalid }">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Password" required ng-model="pass" name="pass" ng-minlength="3" ng-maxlength="12" aria-describedby="basic-addon3">
			  
			  </div>
			  
			<span ng-show="form.pass.$touched && form.pass.$invalid">The password is required.</span>
          
		  
		  
              <div class="text-center">
                  <input type="submit" ng-click="register()" class="btn btn-success btn-submit" value="Register">
              </div>
          </form>
          <div class="form-line">
            <div class="title">OR</div>
          </div>
          <div class="form-footer">
            <button type="button" class="btn btn-default btn-sm btn-social __facebook">
              <div class="info">
                <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
                <span class="title">Register w/ Facebook</span>
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