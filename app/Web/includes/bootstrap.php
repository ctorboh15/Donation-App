<?php
define('APP_INCLUDE_PATH', $_SERVER['DOCUMENT_ROOT'].'/Core/');
define('APP_UTIL_PATH', APP_INCLUDE_PATH.'Utils/');
define('APP_DTO_PATH', APP_INCLUDE_PATH. 'DTO/');
define('APP_MGR_PATH', APP_INCLUDE_PATH.'Manager/');

function include_Util($fileName)
{
	include_once APP_UTIL_PATH . $fileName . '.php';
}

function include_DTO($fileName)
{
	include_once APP_DTO_PATH . $fileName . '.php';
}


function include_Manager($fileName)
{
	include_once  APP_MGR_PATH . $fileName . '.php';
}