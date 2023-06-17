<?php

class DBConnect{
	public $server="localhost";
	public $user="root";
	public $password="";
	public $dbName="bdcf";
	public $link;
	public $error;

	public function __construct()
	{		
			$this->dbConnect();
	}

	public function dbConnect()
	{
			$this->link=new mysqli($this->server,$this->user,$this->password,$this->dbName);
			if(!$this->link)
			{
				$this->error="Database Not Connect!!";
			}
			else
			{
				$this->error="Database Connected!!";
			}
	}

public function __destruct()
	{		
			$this->link->close();
	}

}


?>