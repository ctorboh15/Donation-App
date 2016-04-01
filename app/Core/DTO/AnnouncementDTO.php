<?php
include_DTO('AbstractDTO');
class AnnouncementDTO extends AbstractDTO
{
	var $announcementID;
	var $title;
	var $body;
	var	$orgID;
	var $activeInd;
	var $endDt;
	
	public function loadDTOFromQuery($row)
	{		
		$this->announcementID = $row['AnnouncementID'];
		$this->title = $row['Title'];
		$this->body = $row['Body'];
		$this->orgID = $row['OrgID'];
		$this->endDt = $row['EndDT'];
		$this->activeInd = $row['ActiveIND'];				
	}
	

}