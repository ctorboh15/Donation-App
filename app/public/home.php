<?php
require_once '../Web/includes/bootstrap.php';
require_once '../Core/Controller/HomeController.php';
include_once '../Views/includes/header.php';
?>

			<div class="panel panel-default">
	  			<div class="panel-heading">About Us</div>
	  			<div class="panel-body">
	  			<p><?php print $aboutUs;?></p>
	  			</div>
	  			<div class="panel-footer">Panel Footer</div>
			</div>
	
	
	
			<div class="panel panel-default anncDiv">
	  			<div class="panel-heading"> <h2>Announcements</h2></div>
	  			<div class="panel-body">
		  			<div class="list-group">
		  				<?php foreach ($announcementsList as $item):?>	
		  				<button id="<?php print $item->announcementID;?>" type="button" class="btn btn-default btn-block btn-lg annBtn" data-toggle="modal" data-target="#announcementModal" width="100%;"><?php print $item->title;?></button>
					  <?php endforeach;?>	
					</div>		
	  			</div>
	  			<div class="panel-footer">Announcement Footer</div>
			</div>
			
			

			
		<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="announcementModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php include_once '../Views/includes/footer.php';?>