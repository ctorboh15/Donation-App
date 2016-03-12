<?php
require_once '../Web/includes/bootstrap.php';
require_once '../Controller/HomeController.php';
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
	  <h2>Pagination</h2>
	  <p>The .pagination class provides pagination links:</p>     
	  
	  <div class="container ">
	  <h2>List Group With Custom Content</h2>
		  <div class="list-group scrollable">
		    <a href="#" class="list-group-item active">
		      <h4 class="list-group-item-heading">First List Group Item Heading</h4>
		      <p class="list-group-item-text">List Group Item Text</p>
		    </a>
		    <a href="#" class="list-group-item">
		      <h4 class="list-group-item-heading">Second List Group Item Heading</h4>
		      <p class="list-group-item-text">List Group Item Text</p>
		    </a>
		    <a href="#" class="list-group-item">
		      <h4 class="list-group-item-heading">Third List Group Item Heading</h4>
		      <p class="list-group-item-text">List Group Item Text</p>
		    </a>
		    <a href="#" class="list-group-item">
		      <h4 class="list-group-item-heading">Second List Group Item Heading</h4>
		      <p class="list-group-item-text">List Group Item Text</p>
		    </a>
		    <a href="#" class="list-group-item">
		      <h4 class="list-group-item-heading">Third List Group Item Heading</h4>
		      <p class="list-group-item-text">List Group Item Text</p>
		    </a>
		    <a href="#" class="list-group-item">
		      <h4 class="list-group-item-heading">Second List Group Item Heading</h4>
		      <p class="list-group-item-text">List Group Item Text</p>
		    </a>
		    <a href="#" class="list-group-item">
		      <h4 class="list-group-item-heading">Third List Group Item Heading</h4>
		      <p class="list-group-item-text">List Group Item Text</p>
		    </a>
		    
		  </div>	  
		</div>             
	  <ul class="pagination">
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	  </ul>
	</div>


<?php include_once '../Views/includes/footer.php';?>