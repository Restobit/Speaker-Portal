<?php

class Columns_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getPurpleColumn()
	{
		$query = 'SELECT * FROM `purplecontent` ORDER BY position ;';
		$sth = $this->db->prepare($query);
		$sth->execute();
		$pupleContentResult = $sth->fetchAll(PDO::FETCH_OBJ);
		return $pupleContentResult;
	}

	public function getMagentaColumn()
	{
		$query = 'SELECT * FROM `magentacontent` ORDER BY position ;';
		$sth = $this->db->prepare($query);
		$sth->execute();
		$magentaContentResult = $sth->fetchAll(PDO::FETCH_OBJ);
		return $magentaContentResult;
	}

	public function updateColumnItemPosition()
	{
		$positionsData = $_POST["positions"];

		foreach ($positionsData as $position) {
			$index = $position["id"];
			$newPosition = $position["position"];
			$table = $position["tableid"] == "purple-column" ? "purplecontent" : "magentacontent";
			$sql = "UPDATE `$table` SET `position` = '$newPosition' WHERE `id` ='$index';";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
		}

		exit("success");
	}
}
