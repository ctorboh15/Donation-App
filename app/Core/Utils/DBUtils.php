<?php
require_once '../Web/includes/bootstrap.php';
include_Util('Util');

class DBUtils
{
	public static function getConnection()
	{
		$link = new mysqli(Util::getDbServer(), Util::getDbUserName(), Util::getDbPassword(), Util::getDbName(), 3306);
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		echo 'Connected successfully';
		
		return $link;
	}
	
	
	public static function startTransaction(mysqli $conn = null)
	{
		$trans = null;
		
		if(!$conn || $conn == null)
		{
			$conn = self::getConnection();
		}
		
		 $trans = $conn->begin_transaction();
		 return $trans;	
	}
	
	
	public static function endTransaction(mysqli $conn, boolean $success)
	{
		if(!$success)
		{
			mysqli_rollback($conn);
		}
		else
		{
			mysqli_commit($conn);
		}
		self::closeConnection($conn);
	}
	
	public static function closeConnection(mysqli $conn)
	{
		mysqli_close($conn);
	}
	
}