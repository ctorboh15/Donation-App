<?php
require_once '../Web/includes/bootstrap.php';
include_once '../Views/includes/header.php';
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-4 orgInfo">
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
		
			<div class="col-md-8 orgInfo">
		<div class="well well-lg"> 
		<h1>Navigation</h1>
			<table class="table table-striped">
				<tbody>
					<tr>
						<td><a href="#" class="btn btn-info navBtn" role="button">Link Button</a></td>
						<td><a href="#" class="btn btn-info navBtn" role="button">Link Button</a></td>
						<td><a href="#" class="btn btn-info navBtn" role="button" >Link Button</a></td>
					</tr> 
				</tbody>
			</table>
		</div>
		</div>
		</div>	
</div>

