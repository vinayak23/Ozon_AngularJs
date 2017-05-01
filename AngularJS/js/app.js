var app = angular.module('categoryApp', []);

app.controller('categoryCtrl', function($scope,$http) {

	$scope.add_category=function()
	{
		//alert('hi');
	$http.post("adddetail.php",{
		"cat_name":$scope.cat_nm,
		"des":$scope.name
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Inserted successfully");
			window.location=("DisplayCategory.php",'_self');
		}
		if(data=="notadded")
		
		{
			alert("Data not Inserted");
		}
		
	});
	}
	
	
	$scope.categoryinit=function(id)
	{
		//alert('hi');
	$http.post("initcat.php",{
		"id":id,
		
	}).success(function(data){
		
		$scope.cat_nm=data[0]["cat_name"];
		$scope.name=data[0]["cat_desc"];
		
	});
	}
	
	
	$scope.UpdateCat=function(id)
	{
		//alert('hi');
	$http.post("Update_Category.php",{
		"id": id,
		"cat_name":$scope.cat_nm,
		"des":$scope.name
	}).success(function(data){
		
		if(data=="successfullyupdated")
		{
			alert("Data Updated successfully");
			window.location= "DisplayCategory.php";
		}
		if(data=="notadded")
		
		{
			alert("Data not Inserted");
		}
		
	});
	}
	
	
	
	
	
	
});

var app = angular.module('SubcategoryApp', []);
app.controller('subcategoryCtrl', function($scope,$http) {
	
	$scope.get_category=function()
	{
		//alert('hi');
	$http.post("get_category.php").
		success(function(data){
			$scope.category=data;
			
		});
	}
	
	$scope.get_subcategory=function(id)
	{
	//alert('hi');
	$http.post("get_subcategory.php",{	
	"id":id
	}).
		success(function(data){
		$scope.cat_nm=data[0]["cat_id"];
		$scope.scat_nm=data[0]["sub_name"];
		$scope.name=data[0]["sub_desc"];
			
		});
	}
	
	
	$scope.add_subcategory=function()
	{
		
	$http.post("SubcategoryDetails.php",{
		"id":$scope.id,
		"cat_name":$scope.scat_nm,
		"des":$scope.name
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Inserted successfully");
			window.location = "DisplaySubCategory.php";
			//window.location=('DisplaySubCategory.php','_self');
		}
		if(data=="notadded")
		
		{
			alert("Data not Inserted");
		}
		
	});
	}
	
	
	$scope.UpdateSubCat=function(id)
	{
		//alert('hi');
	$http.post("Update_SubCategory.php",{
		"id":id,
		"cid":$scope.cat_nm,
		"scat_name":$scope.scat_nm,
		"des":$scope.name
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Updated successfully");
			window.location= "DisplaySubCategory.php";
		}
		if(data=="notadded")
		
		{
			alert("Data not Inserted");
		}
		
	});
	}
	
	
	
});
var app = angular.module('DisplayCat', []);
app.controller('DisplayCatCtrl', function($scope,$http) {
	
	$scope.DisplayCategory=function()
	{
		//alert('hi');
	$http.post("Display_Category.php").
		success(function(data){
			$scope.category=data;
			
		});
	}
	$scope.DelettCat=function(id)
	{
		//alert('hi');
	$http.post("DeleteCategory.php",{
		"id": id,
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Deleted successfully");
			window.location= "DisplayCategory.php";
		}
		if(data=="notadded")
		
		{
			alert("Data not Deleted");
		}
		
	});
	}
});

var app = angular.module('DisplaySubCat', []);
app.controller('DisplaySubCatCtrl', function($scope,$http) {
	
	$scope.DisplaySubCategory=function()
	{
		//alert('hi');
	$http.post("Display_SubCategory.php").
		success(function(data){
			$scope.category=data;
			
		});
	}
	
	
	$scope.DeleteSubCat=function(id)
	{
		//alert('hi');
	$http.post("DeleteSubCategory.php",{
		"id": id,
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Deleted successfully");
			window.location= "DisplaySubCategory.php";
		}
		if(data=="notadded")
		
		{
			alert("Data not Deleted");
		}
		
	});
	}
	
});

var app = angular.module('DisplayProduct', []);
app.controller('DisplayProductCtrl', function($scope,$http) {
	
	$scope.DisplayProduct=function()
	{
		//alert('hi');
	$http.post("Display_product.php").
		success(function(data){
			$scope.product=data;
			
		});
	}
	
	$scope.DeleteProduct=function(id)
	{
		//alert('hi');
	$http.post("DeleteProduct.php",{
		"id": id,
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Deleted successfully");
			window.location= "DisplayProduct.php";
		}
		if(data=="notadded")
		
		{
			alert("Data not Deleted");
		}
		
	});
	}
	
	
});

var app1 = angular.module('Product', []);
app1.controller('ProductC', function($scope,$http) {
	//alert('hi');
	$scope.get_category=function()
	{
		//alert('hi');
	$http.post("Display_Category.php").
		success(function(data){
			$scope.category=data;
			
		});
	}
	
	$scope.get_subcategory=function(cat_id)
	{
		//alert('hi');
	$http.post("GetSubCategory.php",{'cat_id':cat_id}).
		success(function(data){
			$scope.subid=data;
			
		});
	}
	
	$scope.add_product=function()
	{
		
	$http.post("ProductDetails.php",{
		"c_id":$scope.id,
		"s_id":$scope.sid,
		"pro_name":$scope.pro_nm,
		"pro_desc":$scope.pro_desc
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Inserted successfully");
			window.location = "DisplayProduct.php";
			//window.location=('DisplaySubCategory.php','_self');
		}
		if(data=="notadded")
		
		{
			alert("Data not Inserted");
		}
		
	});
	}
	
	$scope.get_product=function(id)
	{
		//alert(id);
	$http.post("getProduct.php",{"id":id}).
		success(function(data){
			
		$scope.id=data[0]["cat_id"];
		$scope.sid=data[0]["sub_id"];
		$scope.pro_nm=data[0]["pro_name"];
		$scope.pro_desc=data[0]["pro_description"];
			$scope.get_subcategory($scope.id);
		});
	}
	
	
	$scope.UpdateProduct=function(id)
	{
		//alert('hi');
	$http.post("Update_Product.php",{
		"id":id,
		"cid":$scope.id,
		"s_id":$scope.sid,
		"pro_name":$scope.pro_nm,
		"pro_desc":$scope.pro_desc
	}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("Data Updated successfully");
			window.location= "DisplayProduct.php";
		}
		if(data=="notadded")
		
		{
			alert("Data not Inserted");
		}
		
	});
	}
		
});
	var app1 = angular.module('Login', []);
app1.controller('LoginCtrl', function($scope,$http) {
	//alert('hi');
	$scope.LoginForm=function()
	{
		//alert('hi');
	$http.post("LoginValidation.php",{
			"username":$scope.uname,
			"pass":$scope.pass,
			
		}).success(function(data){
		
		if(data=="SuccessfullyLogin")
		{
			//alert("Data Updated successfully");
			window.location= "DisplayCategory.php";
		}
		if(data=="InvalidUsername")
		
		{
			alert("Invalid Username..");
			window.location= "Login.php";
		}
		if(data=="InvalidPassword")
		
		{
			alert("Invalid Password..");
			window.location= "Login.php";
		}
		if(data=="InvalidUserNameandPassword")
		
		{
			alert("Invalid usernamr and Password..");
			window.location= "Login.php";
		}
		
	});
	}
	
	
	
});

var app1 = angular.module('Registration', []);
app1.controller('RegistrationCtrl', function($scope,$http) {
	//alert('hi');
	$scope.register=function()
	{
		//alert('hi');
	$http.post("AddNewRegister.php",{
			"fname":$scope.fname,
			"lname":$scope.lname,
			"username":$scope.username,
			"pass":$scope.pass,
			
		}).success(function(data){
		
		if(data=="successfullyadded")
		{
			alert("successfully Registered");
			window.location= "login.php";
		}
		if(data=="notadded")
		{
			alert("not successfully register");
			window.location= "register.php";
		}

});
	}
});
