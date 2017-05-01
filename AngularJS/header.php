<?php
//session_start();
  $ID = $_SESSION['ID'];
  $F_name = $_SESSION['F_name'];
   
  ?>
  
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
	  <li class="dropdown profile">
	  
	  <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-user"></span> <?php echo $F_name;?> 
        </button>
	  
	  
			<!-- <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span><?php echo $F_name;?> 
        </button>-->
           <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username"><?php echo $F_name;?></h4>
            </div>
            <ul class="action">
              <li>
                <a href="./logout.php">
                  Logout
                </a>
              </li>
              
            </ul>
          </div>
        </li>
		</ul>
      
     <!-- <ul class="nav navbar-nav navbar-right">
     		<a href="./logout.php"> 
            <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button></a>
      </ul>-->
    </div>
  </div>
</nav>