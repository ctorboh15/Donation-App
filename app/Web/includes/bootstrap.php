<?php
define('APP_UTIL_PATH', $_SERVER['DOCUMENT_ROOT'].'/Web/includes/Utils/');


function include_Util($fileName)
{
	include_once APP_UTIL_PATH . $fileName . '.php';
}