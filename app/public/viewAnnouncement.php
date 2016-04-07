<?php
require_once '../Web/includes/bootstrap.php';
include_Util('RequestUtils');
include_Manager('AnnouncementManager');
include_DTO('AnnouncementDTO');


$announcementID = RequestUtils::getRequestVariable('announcementID');
$idGiven = false;

if($announcementID > 0)
{
	$idGiven = true;
	$mgr = new AnnouncementManager();
	$dto = new AnnouncementDTO();
	
	$dto = $mgr->find($announcementID, $dto);
}






?>


<div class="well">
<?php if(!$idGiven):?>

    <h3>Sorry there is no content to display</h3>
<?php else :?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php print $dto->title; ?></h3>
  </div>
  <div class="panel-body">
    <p><?php print $dto->body; ?></p>
  </div>
</div>
<?php endif;?>
</div>