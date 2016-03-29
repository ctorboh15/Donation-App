<?php 
if (!isset($_SESSION["user_id"])) {
    $_SESSION["auth"] = false;
}?>

<html>
<head>
<link href="../../../Lib/BootStrap/css/bootstrap.min.css" rel="stylesheet">
<script src="../../Lib/js/JQuery.js"></script>
    <script src="../Lib/BootStrap/js/bootstrap.min.js"></script>
     
	<link href="../../Lib/css/app.css" rel="stylesheet">  
    
</head>
<body>
<div class="jumbotron" style="text-align: center;"><h1 >Welcome to the New Donation Site</h1></div>
<div class="container-fluid">
  <div class="row content">
  
  <?php if (!$_SESSION["auth"]):?>
   <div class="col-sm-3 sidenav">
   <div class="well">
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
		</div>
		<div class="well">
			something can go here
			
		</div>
   </div>
   <?php else :?>
   	<div class="col-sm-3 sidenav">
		<div class="well well-lg" id="organization-Well"> 
		<h1>User Info</h1>
			<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<td>Organization Name</td>
					<td>$OrgName</td>				
				</tr>
				<tr>
					<td>Location</td>
					<td>$Location</td>				
				</tr>
			</tbody>   				 
   			</table>		
		</div>
		</div>
	<?php endif;?>
   <div class="col-sm-9">
