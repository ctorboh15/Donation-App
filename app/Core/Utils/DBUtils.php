<?php
require_once '../Web/includes/bootstrap.php';
include_Util('Util');

class DBUtils
{
	public static function getConnection()
	{
		$link = new mysqli('127.0.0.1:3306', 'appUser', 'Execute1', Util::getDbName());
		
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		
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
	
	public static function createParameters(array $params)
	{
		$paramString = '(';
		$sizeOfArray = sizeof($params);
		for ($i = 0; $i < $sizeOfArray; $i++)
		{
			$paramString.$params[$i];
			if($i < $sizeOfArray -1)
			{
				$paramString.',';
			}
		}
		
		$paramString.')';
		return $paramString;
	}
	
}