<?php

class Util
{
	private static $readInFile = false;
	private static $dbServer = '';
	private static $dbName = '';
	private static $dbUserName = '';
	private static $dbPassword = '';
	
	
	
	private static function readInFile()
	{
		if (!self::$readInFile)
		{
			$params = require $_SERVER['DOCUMENT_ROOT'].'/ApplicationConfig.php';
		}
		self::$dbServer = $params["dbServer"];
		self::$dbName = $params["dbName"];
		self::$dbUserName = $params["dbUserName"];
		self::$dbPassword = $params["dbPassword"];
		
		self::$readInFile = true;
	}
	
	
	public static function getDbName()
	{
		if (!self::$readInFile)
		{
			self::readInFile();
		}
		return self::$dbName;
	}
	
	
	public static function getDbServer()
	{
		if (!self::$readInFile)
		{
			self::readInFile();
		}
		return self::$dbServer;
	}
	
	public static function getDbUserName()
	{
		if (!self::$readInFile)
		{
			self::readInFile();
		}
		return self::$dbUserName;
	}
	
	public static function getDbPassword()
	{
		if (!self::$readInFile)
		{
			self::readInFile();
		}
		return self::$dbPassword;
	}
}

?>