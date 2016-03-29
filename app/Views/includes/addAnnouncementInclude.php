<?php
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 orgInfo">
			<div class="well well-lg" id="organization-Well">
			<form class="form-horizontal" role="form">
				<table width="100%;">
					<colgroup>
						<col width="20%">
						<col width="80%">
					</colgroup>
					<thead>
						<tr class="table-heading">
							<td colspan="2">Create New Annoucement</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Title</td>
							<td>
								<input type="email" class="form-control" id="email">
							</td>
						</tr>
						<tr>
							<td>Body</td>
							<td><textarea class="form-control" rows="5" id="comment"></textarea></td>
						</tr>
						<tr>
							<td>End Date</td>
							<td>
							
								<input type="date" class="form-control" id="date">
							</td>
							<td><span class="glyphicon glyphicon-calendar"></span></td>
						</tr>
						<tr>
						<td>Date Picker</td>
						<td>
							<div class="col-xs-5 date">
					            <div id="embeddingDatePicker"></div>
					            <input type="hidden" id="selectedDate" name="selectedDate" />
					        </div>
					        </td>
						</tr>
					</tbody>
				</table>
			</form>
			</div>
		</div>
	</div>	
</div>


	