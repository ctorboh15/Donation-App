<?php
require_once '../Web/includes/bootstrap.php';
include_Manager('SecurityManager');
include_Util('NavUtil');

if(!SecurityManager::isLoggedIn())
{
	NavUtil::redirect('fdffd');
}


require_once '../Core/Controller/UserController.php';
include_once '../Views/includes/header.php';


?>

<?php include_once '../Views/includes/createAnnouncement.php'; ?>


<div class="panel panel-default anncDiv">
  			<div class="panel-heading"> <h2>Announcements</h2></div>
  			<div class="panel-body">
	  			<div class="list-group">
	  				<?php foreach ($userAnnouncements as $item):?>	
  				<button id="<?php print $item->announcementID;?>" type="button" class="btn btn-default btn-block btn-lg annBtn" data-toggle="modal" data-target="#announcementModal" width="100%;"><?php print $item->title;?></button>
  <?php endforeach;?>	
				</div>		
  			</div>
  			<div class="panel-footer">Announcement Footer</div>
		</div>
		
