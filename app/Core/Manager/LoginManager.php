<?php
include_Util('DBUtils');
include_DTO('AppUserDTO');
class LoginManager
{
	
	var $userExists = false;
	
	public function doLogin($userName, $password)
	{
		return self::verifyUser($userName, $password);
	}
	
	
	protected function verifyUser($username, $password)
	{
		$conn =  DBUtils::getConnection();
		$query = "SELECT * from AppUser WHERE UserName LIKE '" .$username . "' AND Password LIKE '". $password . "'";
		
		$res = $conn->query($query);
		$appUserDTO = new AppUserDTO();
		if($res->num_rows > 0)
		{
			while($row = $res->fetch_assoc())
			{
				$appUserDTO->loadDTOFromQuery($row);
			}
			$this->userExists = true;
			$_SESSION["auth"] = true;
			$_SESSION["user_id"] = $appUserDTO->username;
			$_SESSION["appUserDTO"] = serialize($appUserDTO);
		}
		return $this->userExists;
	}
	
	
	
	
	
}