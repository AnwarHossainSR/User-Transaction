	<?php 
		require_once 'assets/php/header.php';
	 ?>

	<div class="container mt-4">
		<div class="card border-primary">
			<h5 class="card-header bg-primary d-flex justify-content-between">
				<span class="text-light lead align-self-center">Total Debit: <span id="debit"></span></span>
				<a class=" btn btn-light" data-toggle="modal" data-target="#addTransactionModal" href="">
					<i class="fas fa-plus-circle fa-lg">&nbsp;Add New Transaction</i>
				</a>
			</h5>
			<div class="card-body">
				<div class="table" id="showNote">
					<p class="text-center mt-5 lead">Please Wait</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Start Add new note modal -->
	<div class="modal fade" id="addTransactionModal">
		<div class="modal-dialog modal-dilog-centerd">
			<div class="modal-content">
				<div class="modal-header bg-success ">
					<h4 class="modal-title text-light text-center">Add New Transaction</h4>
					<button type="button" class="close text-light font-weight-bold" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form action="post" id="add-transaction-form" class="px-3">
						<div class="form-group">
							<input type="text" name="category" class="form-control form-control-lg" placeholder="Enter category" required>
						</div>
						<div class="form-group">
							<input type="text" name="amount" class="form-control form-control-lg" placeholder="Enter amount" required>
						</div>
						<div class="form-group">
							<input type="submit" name="add_transaction" value="Add Transaction" id="addTransactionBtn" class="btn btn-success btn-block" >
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Add new note modal -->
	<!-- Start edit note modal -->
	<div class="modal fade" id="editTransactionModal">
		<div class="modal-dialog modal-dilog-centerd">
			<div class="modal-content">
				<div class="modal-header bg-info ">
					<h4 class="modal-title text-light text-center">Edit Transaction</h4>
					<button type="button" class="close text-light font-weight-bold" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form action="post" id="edit-note-form" class="px-3">
						<input type="hidden" name="id" id="id">
						<div class="form-group">
							<input type="text" name="category" id="category" class="form-control form-control-lg" required>
						</div>
						<div class="form-group">
							<input type="text" name="amount" id="amount" class="form-control form-control-lg" required>
						</div>
						<div class="form-group">
							<input type="submit" name="editTransaction" value="Update Transaction" id="editTransactionBtn" class="btn btn-info btn-block" >
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End edit note modal -->
<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<!-- bootstrap js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

	<!-- fontawesom -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
	<!-- datatable styling from datatables.net -->
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
	<!-- sweet Alart CDN -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- External js file -->
	<script src="assets/js/script.js"></script>

</body>
</html>