<?php
class RequestUtils
{
	public static function getRequestVariable($variableName, $defaultValue = "")
	{
		if(isset($_REQUEST[$variableName]))
		{
			return trim($_REQUEST[$variableName]);
		}
		else 
		{
			return $defaultValue;
		}
	}
}