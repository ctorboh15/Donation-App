<?php
require_once '../Web/includes/bootstrap.php';
include_DTO('Announcement');
include_Util('DBUtils');

class AnnouncementManager implements AppManager
{
	private final $sp_Find = 'sp_findAnnouncement';
	private final $sp_FindActive = 'sp_findAllActive';
	private final $sp_Save = 'sp_SaveAnnouncement';
	
	public function find($id, AnnouncementDTO $dto, $conn)
	{
		if(is_null($conn))
		{
			$conn =	DBUtils::getConnection();
		}
		
		mysqli_query($conn, $query);
		
		if($res = $conn->store_result())
		{
			printf("---\n");
			var_dump($res->fetch_all());
			$res->free();
		}
		else 
		{
			if ($mysqli->errno) 
			{
				echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
			}
		}
		
		
	}
	
	
	public function findActive()
	{
		
	}
	
	
	public function save($dto)
	{
		
	}
}