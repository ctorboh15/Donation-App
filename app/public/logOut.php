<?php

require_once '../Web/includes/bootstrap.php';
include_Util('RequestUtils');
$action = RequestUtils::getRequestVariable('action');

if($action === "signout")
{
	session_destroy();
}
?>

<div class="jumbotron">
	<h1>You have been logged out of the app</h1>
	<?php print $action;?>
</div>