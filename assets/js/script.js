$(document).ready(function($){

	//Add new note request 
	$('#addTransactionBtn').click(function(e) {
		if ($('#add-transaction-form')[0].checkValidity()){
			e.preventDefault();
			$('#addTransactionBtn').val('Please wait...');
			$.ajax({
				url: 'assets/php/process.php',
				method: 'post',
				data: $('#add-transaction-form').serialize()+'&action=add_transaction',
				success:function(response){	
					console.log(response)	
					$('#addTransactionBtn').val('Add Transaction');
					$('#add-transaction-form')[0].reset();
					$('#addTransactionModal').modal('hide');
					//sweet alert
					Swal.fire({
						title: 'Transaction added successfully',
						icon: 'success',
						showClass: {
						  popup: 'animate__animated animate__fadeInDown'
						},
						hideClass: {
						  popup: 'animate__animated animate__fadeOutUp'
						}
					});
					displayAllTransaction();
				}
			})	
		}
	});
	function displayAllTransactionNumber(){
      $.ajax({
        url : "assets/php/process.php",
        type : "POST",
        data : {action:'load_data_count'},
        success : function(data){
        	console.log(data)
          $('#debit').html(data);
        }
      });
    }
    displayAllTransactionNumber();

	displayAllTransaction();
	//Display all nodes
	function displayAllTransaction(){
      $.ajax({
        url : "assets/php/process.php",
        type : "POST",
        data : {action:'load_data'},
        success : function(data){
          $('#showNote').html(data);
          //For Datatable styling and functionality
		  $("table").DataTable({
		  	order : [0,'asc']
		  });
        }
      });
    }

    //Edit transaction of 
    $('body').on('click', '.editBtn', function(e) {
    	e.preventDefault();
    	edit_id=$(this).attr('id');
    	$.ajax({
    		url: 'assets/php/process.php',
    		method: 'post',
    		data: {edit_id: edit_id},
    		success:function(response){
    			//console.log(response);
    			data= JSON.parse(response);
    			$('#id').val(data.id);
    			$('#category').val(data.category);
    			$('#amount').val(data.amount);
    		}
    	});
    	
    });

    //Update Transaction
    $('#editTransactionBtn').click(function(event) {
    	event.preventDefault();
    	$('#editTransactionBtn').val('Please wait...');
    	$.ajax({
    		url: 'assets/php/process.php',
    		method: 'post',
    		data: $('#edit-note-form').serialize()+'&action=update_note',
    		success:function(response){
    			$('#editTransactionBtn').val('Update Transaction');
					$('#edit-note-form')[0].reset();
					$('#editTransactionModal').modal('hide');
					//sweet alert
					Swal.fire({
						title: 'Transaction Updated successfully',
						type:'success'
					});
					displayAllTransaction();
    		}
    	});
    });

    //Delete a transaction request
     $('body').on('click', '.deleteBtn', function(e){
     	e.preventDefault();
     	del_id=$(this).attr('id');
     	//console.log(del_id);
     	Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		  	$.ajax({
		  		url: 'assets/php/process.php',
		  		method: 'post',
		  		data: {del_id: del_id},
		  		success:function(response){
		  			Swal.fire(
				      'Deleted!',
				      'Transaction deleted successfully!!.',
				      'success'
				    )
				    displayAllTransaction();
		  		}
		  	});
		  }
		});
     });


	});
	
/* ================Profile End================ */





	