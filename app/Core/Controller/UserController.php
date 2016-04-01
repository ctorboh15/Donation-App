<?php
include_Util('RequestUtils');
include_Manager('AnnouncementManager');
include_DTO('AnnouncementDTO');
include_DTO('AppUserDTO');

$action = RequestUtils::getRequestVariable('action');
$appUerDTO = unserialize($_SESSION['appUserDTO']);
$userAnnouncements = array();

$mgr = new AnnouncementManager();
$dto = new AnnouncementDTO();

if($action === 'create')
{
	$dto = $mgr->loadDTOFromRequest($dto);
	$dto->orgID = $appUerDTO->orgID;
}


$userAnnouncements = $mgr->findAllByOrgID($appUerDTO->orgID);