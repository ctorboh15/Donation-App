<?php 
require_once '../Web/includes/bootstrap.php';

if (!isset($_SESSION["user_id"])) {
    $_SESSION["auth"] = false;
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="../../../Lib/BootStrap/css/bootstrap.min.css" rel="stylesheet">
<script src="../../Lib/js/JQuery.js"></script>
    <script src="../Lib/BootStrap/js/bootstrap.min.js"></script>
    <script src="../../Lib/js/appJs.js"></script>
	<link href="../../Lib/css/app.css" rel="stylesheet">  
    
</head>
<body>
<div class="jumbotron" style="text-align: center;"><h1 >Welcome to the New Donation Site</h1></div>
<div class="container-fluid">
  <div class="row content">
   <div class="col-sm-3 sidenav">
   <div class="well">
		<ul class="nav nav-pills nav-stacked">
			<li role="presentaion"><a href="/public/home.php">Home</a></li>
			<li role="presentaion"><a href="/public/userPage.php">User Home</a></li>
			<li role="presentaion"><a href="#">Link 3</a></li>
		</ul>
	</div>
   <div class="well content-container">
  <?php if (!$_SESSION["auth"]):?>   
			<form role="form" action="/public/home.php" method="post">
				<div class="form-group">
					<label for="userName">Organization Name:</label>
					<input type="text" class="form-control" id="userName" name="userName">
				</div>
				
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="passWord">
				</div>
				
				<button type="submit" class="btn btn-default" value="login" name="action">Submit</button>
				
			</form>
			<div>
			<?php foreach ($messages as $message)
				  {
					print $message;
				   }?>				   
			</div>		
   
   <?php else :?> 
   <?php $appUerDTO = unserialize($_SESSION['appUserDTO']);?>  	
		<h1>User Info</h1>
			<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<td>Organization Name</td>
					<td><?php print $appUerDTO->username;?></td>				
				</tr>
				<tr>
					<td>Location</td>
					<td>$Location</td>				
				</tr>
			</tbody>   				 
   			</table>
   			<div>										
   				<p style="text-align: right;"><a href="/public/logOut.php?action=signout">Sign Out</a>
   			</div>	
	<?php endif;?>
	</div>
		
	</div>
   <div class="col-sm-9">
