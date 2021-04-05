<?php 

	require_once('auth.php');
	$transaction=new Auth();

	//Add new transaction method
	if (isset($_POST['action']) && $_POST['action'] == 'add_transaction'){
		$category=$_POST['category'];
		$amount=$_POST['amount'];
		$transaction->addNewTransaction($category,$amount);
	}
	//Add new transaction method
	if (isset($_POST['action']) && $_POST['action'] == 'load_data_count'){
		
		$row = $transaction->loadTransactionNumber();
		$i = 0;
		foreach ($row as $key => $value) {
			$i = $i + 1;
		}
		echo $i;
	}

	if(isset($_POST['action']) && $_POST['action'] == 'load_data'){
		$output = '';
		$notesactions = $transaction->getAllTransaction();
		if ($notesactions) {
			$output .= '<table class="table table-striped bg-light text-center table-hover table-borderless">
						<thead>
							<tr>
								<th>Date</th>
								<th>Category</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>';
			foreach ($notesactions as $key => $row) {
				$output .= '<tr>
				 				
								<td>'.$row['create_at'].'</td>
								<td>'.$row['category'].'</td>
								<td>'.'$'.$row['amount'].'</td>
								<td>
									<a href="#" id="'.$row['id'].'" title="Edit Transaction" class="editBtn"><i class="fas fa-edit fa-lg text-info" data-toggle="modal" data-target="#editTransactionModal"></i></a>&nbsp;
									<a href="#" id="'.$row['id'].'" title="Delete Transaction" class="deleteBtn"><i class="fas fa-trash-alt fa-lg text-info text-danger"></i></a>
								</td>
							</tr>';
			}
			$output .= '</tbody>
					</table>';
					echo $output;
		}else{
			echo '<h3 class="text-center text-secondary"> There is no Transaction.</h3>';
		}
	}

	//Handle edit node of an user ajax request
	if (isset($_POST['edit_id'])) {
		$id=$_POST['edit_id'];
		$row=$transaction->editTransaction($id);
		echo json_encode($row);
	}
	//Handle Update 
	if(isset($_POST['action']) && $_POST['action'] == 'update_note'){
		$id = $_POST['id'];
		$category = $_POST['category'];
		$amount = $_POST['amount'];
		$transaction->updateTransaction($id,$category,$amount);
	}
	//Handle Delete a Note for an user ajax request handle

	if(isset($_POST['del_id'])){
		$id=$_POST['del_id'];
		$transaction->deleteTransaction($id);
	}


 ?>

