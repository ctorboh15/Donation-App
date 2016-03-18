<?php 
include_Util('RequestUtils');
include_Util('DBUtils');
include_Manager('AnnouncementManager');
include_DTO('AnnouncementDTO');
$mgr = new AnnouncementManager();
$dto = new AnnouncementDTO();


$orgName = RequestUtils::getRequestVariable('userName');


$aboutUs = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
		labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
		fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
		anim id est laborum.";

$announcementsList = $mgr->findAllActive();
