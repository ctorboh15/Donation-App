<?php

class SecurityManager
{
	public static function isLoggedIn()
	{
		return $_SESSION["auth"];
	}
}