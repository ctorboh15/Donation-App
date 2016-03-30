<?php
require_once '../Web/includes/bootstrap.php';
include_once '../Views/includes/header.php';
require_once '../Core/Controller/UserController.php';
include_Manager('SecurityManager');
include_Util('NavUtil');

if(!SecurityManager::isLoggedIn())
{
	NavUtil::redirect($location);
}
?>

<?php include_once '../Views/includes/createAnnouncement.php'; ?>
