<?php

class Model {

	public function __construct() 
	{
		$this->db = new Database(DB_NAME, DB_USER, DB_PASS);
	}
}

?>