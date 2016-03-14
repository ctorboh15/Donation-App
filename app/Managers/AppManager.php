<?php
require_once '../Web/includes/bootstrap.php';


interface AppManager
{
	public function find ($id, AbstractDTO $dto, $conn = null);
	public function save(AbstractDTO $dto, $conn = null);
	public function findActive($conn = null);
}