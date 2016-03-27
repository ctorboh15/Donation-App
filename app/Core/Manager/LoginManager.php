<?php
include_Util('DBUtils');
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
		
		print $query;
		$res = $conn->query($query);
		
		if($res->num_rows > 0)
		{
			$this->userExists = true;
			$_SESSION["auth"] = true;
			$_SESSION["user_id"] = $username;
		}
		return $this->userExists;
	}
	
	
}