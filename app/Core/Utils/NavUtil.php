<?php
require_once '../Web/includes/bootstrap.php';


class NavUtil
{
	public static function redirect($location)
	{
		if($_SESSION["auth"])
		{
			header('Location: '. $location);
		}
		else 
		{
			header('Location: '. AppConstants::HOME_PAGE);
		}
	}
	
	public static function redirectHome()
	{
		header('Location: '. AppConstants::HOME_PAGE);
	}
	
}