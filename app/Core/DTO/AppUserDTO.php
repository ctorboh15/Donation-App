<?php
include_DTO('AbstractDTO');
class AppUserDTO extends AbstractDTO
{
	var $appUserID;
	var $username;
	var $contactID;
	var	$orgID;
	var $activeInd;
	var $crtDt;

	public function loadDTOFromQuery($row)
	{
		$this->appUserID = $row['AppUserID'];
		$this->username = $row['UserName'];
		$this->contactID = $row['ContactID'];
		$this->orgID = $row['OrgID'];
		$this->crtDt = $row['CrtDt'];
		$this->activeInd = $row['ActiveInd'];
	}


}