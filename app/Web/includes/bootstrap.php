<?php
define('APP_UTIL_PATH', $_SERVER['DOCUMENT_ROOT'].'/Web/includes/Utils/');
define('APP_DTO_PATH', $_SERVER['DOCUMENT_ROOT'].'/Model/DTO/');

function include_Util($fileName)
{
	include_once APP_UTIL_PATH . $fileName . '.php';
}

function include_DTO($fileName)
{
	include_once APP_DTO_PATH . $fileName . 'DTO.php';
}