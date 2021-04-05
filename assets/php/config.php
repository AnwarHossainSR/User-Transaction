<?php 

	class Database{
		private $dsn="mysql:host=localhost;dbname=db_user_transaction";
		private $dbuser="root";
		private $dbpass="";
		public $conn;

		public function __construct(){
			try{
				$this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
			}catch(PDOException $e){
				echo 'Error : '.$e->getMessage();
			}
			return $this->conn;
		}

	}

 ?>