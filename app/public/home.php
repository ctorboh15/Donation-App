<?php
require_once '../Web/includes/bootstrap.php';
require_once '../Core/Controller/HomeController.php';
include_once '../Views/includes/header.php';
?>



<div class="container">
	<div class="row">
		<div class="jumbotron"><h1>Welcome to the New Donation Site</h1></div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-4 login">
			<form role="form" action="/public/home.php">
				<div class="form-group">
					<label for="userName">Organization Name:</label>
					<input type="text" class="form-control" id="userName" name="userName">
				</div>
				
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="passWord">
				</div>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		
		<div class="col-md-8">
			<div class="panel panel-default">
	  			<div class="panel-heading">About Us</div>
	  			<div class="panel-body">
	  			<p><?php print $aboutUs;?></p>
	  			</div>
	  			<div class="panel-footer">Panel Footer</div>
			</div>
		</div>			
	</div>	
</div>


	<div class="container">  
	  <div class="row ">
	  <div class="col-md-12">
		   <h2>Announcements</h2>
		   <ul class="list-group">
		 	<?php foreach ($announcementsList as $item):?>	 	
		 	 	<li class="list-group-item">
		 	 	<span class="badge" style="align:right;"><?php print $item->endDt;?></span>
		 			<a> <h4 class="list-group-item-heading"><?php print $item->title;?> </h4></a>
			      <p class="list-group-item-text"><?php print $item->body;?></p>	    
		   		</li>
		  	 
			<?php endforeach;?>	
		 	 </ul>
	 		</div>    
		  </div>	  
		</div>             
	</div>
	




<?php include_once '../Views/includes/footer.php';?>