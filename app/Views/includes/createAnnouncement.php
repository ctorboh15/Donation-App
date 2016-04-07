<?php
require_once '../Web/includes/bootstrap.php';
?>

<div class="well">
<form role="form" action="/public/userPage.php" method="post">
	<table width="1200px;" style="border-collapse: separate; border-spacing:1em;">
	<colgroup>
		<col width="20%">
		<col width="35%"> 
		<col width="35%"> 
		<col width="1o%">
	</colgroup>
		<thead>
			<tr>
				<td colspan="3"><h4>Create Announcement</h4><td>
			</tr>
		</thead>
		<tbody>
		<tr>		
			<td><label for="userName">Title:</label></td>
			<td><input type="text" class="form-control" id="userName" name="title"></td>
		</tr>					
			
		<tr>
			<td>Body</td>
			<td colspan="2"><textarea class="form-control" rows="10"></textarea></td>
		</tr>
		<tr>
			<td>End Date</td>
			<td width="200px;"><input type="text" class="form-control" id="userName" name="endDt"></td>
			<td><span class="glyphicon glyphicon-calendar"></span></td>
		</tr>
		<tr>
		<td colspan="2" style="text-align:right;"></td>
			<td colspan="2" style="text-align:right;">
			<button type="submit" class="btn btn-default" value="create" name="action" style="width: 200px;">Submit</button>
			<button type="button" class="btn btn-default" value="login" name="action" style="width: 200px;">Clear</button></td>
		</tr>
		</tbody>
	</table>
</form>
</div>