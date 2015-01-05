<?php

namespace SON\Db;

abstract class Table
{
	protected $db;
	protected $table;

	public function __construct(\PDO $db)
	{
		$this->db = $db;
	}

	public function fetchAll()
	{
		$sql = "SELECT * FROM {$this->table}";

		return $this->db->query($sql);
	}

	public function find($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE ID =: id");
		$stmt->bindParam(":id",$id);
		$stmt->execute();

		$res = $stmt->fetch();

		return $res;
	}
}