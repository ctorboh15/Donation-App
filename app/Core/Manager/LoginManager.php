<?php
include_Util('DBUtils');
class LoginManager
{
	var $userPage = '/public/userPage.php';
	var $userExists = false;
	
	public function doLogin($userName, $password)
	{
		if(self::verifyUser($userName, $password))
		{
			header('Location: '. $this->userPage);
		}
	}
	
	
	protected function verifyUser($username, $password)
	{
		$conn =  DBUtils::getConnection();
		$query = 'Select * from AppUser WHERE UserName = ' .$username . 'AND Password = '. $password;
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