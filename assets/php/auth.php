<?php 

	require_once 'config.php';

	class Auth extends Database{
		
		//Add New transaction
		public function addNewTransaction($category,$amount){
			$now = date('Y-m-d\TH:i:s.uP', time());
			$sql="INSERT INTO transaction (category,amount,create_at) VALUES (:category, :amount, :create_at)";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['category'=>$category,'amount'=>$amount, 'create_at'=>$now]);
			return true;
		}

		//Fetch all transaction
		public function getAllTransaction(){
			$sql="SELECT * FROM transaction";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute();

			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		//count transaction
		public function loadTransactionNumber()
		{
			$sql="SELECT * FROM transaction";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute();

			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		//Edit transaction 

		public function editTransaction($id){
			$sql="SELECT * FROM transaction WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id]);
			$result=$stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}

		//Update note for an user 
		public function updateTransaction($id,$category,$amount){
			$now = date('Y-m-d\TH:i:s.uP', time());
		    $sql="UPDATE transaction SET  category = :category, amount = :amount, create_at = :create_at  WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['category'=>$category,'amount'=>$amount,'create_at'=>$now, 'id'=>$id]);
			return true;
		}

		//Delete note for an user
		public function deleteTransaction($id){
		    $sql="DELETE FROM transaction WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id]);
			return true;
		}

		
	}
 ?>