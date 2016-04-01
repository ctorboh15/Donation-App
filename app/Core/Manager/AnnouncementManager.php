<?php
require_once '../Web/includes/bootstrap.php';
include_DTO('AnnouncementDTO');
include_Util('DBUtils');
include_Util('RequestUtils');
include_Manager('AppManager');


class AnnouncementManager implements AppManager
{
	private $sp_Find = 'sp_findAnnouncement';
	private  $sp_FindActive = 'sp_findAllActiveAnnouncements';
	private  $sp_Save = 'sp_SaveAnnouncement';
	
	public function find($id, AbstractDTO $dto, $conn = null)
	{ 
		if(is_null($conn))
		{
			$conn =	DBUtils::getConnection();
		}
		
		$params = array($dto->announcementID);
		
		$query = ' Select * from Announcements WHERE AnnouncementID = ' . $id;
		$res = $conn->query($query);
		
		if($res->num_rows > 0)
		{	
			while($row = $res->fetch_assoc())
			{				
				$dto = new AnnouncementDTO();
				$dto->loadDTOFromQuery($row);
				$conn->close();
				return $dto;
			}						
		}						
	}
	
	
	public function findAllActive()
	{
		$conn =	DBUtils::getConnection();		
		$query = 'Select * from Announcements';
		$res = $conn->query($query);
		$announcementList = array();
		
		while($result = $res->fetch_assoc())
		{
			$dto = new AnnouncementDTO();
			$dto->loadDTOFromQuery($result);
			$announcementList[] = $dto;			
		}		
		$conn->close();
		return $announcementList;			
	}
	
	
	public function findActive($conn = null)
	{
		
	}
	
	
	public function save(AbstractDTO $dto, $conn = null)
	{
		
	}
	
	public function loadDTOFromRequest(AnnouncementDTO $dto)
	{
		$dto->body = RequestUtils::getRequestVariable('body');
		$dto->title = RequestUtils::getRequestVariable('title');
		$dto->orgID = RequestUtils::getRequestVariable('orgID');
		$dto->endDt = RequestUtils::getRequestVariable('endDt');		
		return $dto;
	}
	
	public function findAllByOrgID($orgID)
	{
		$conn =	DBUtils::getConnection();
		$query = 'Select * from Announcements WHERE OrgID = '. $orgID;
		$res = $conn->query($query);
		$announcementList = array();
		
		while($result = $res->fetch_assoc())
		{
			$dto = new AnnouncementDTO();
			$dto->loadDTOFromQuery($result);
			$announcementList[] = $dto;
		}
		$conn->close();
		return $announcementList;
	}
}