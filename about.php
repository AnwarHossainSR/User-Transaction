<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Transaction</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"/>
	<!-- datatable styling from datatables.net -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
	<!-- Sweet Alart -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

	<!-- Sweet alert animate Css -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.navbar-brand img{
			width: 80px!important;
			height: 60px!important;
		}
		.dropdown-menu{
			left: -11px!important;
		}
		.nav-tabs > li > a.active {
		    background-color: #007BFF!important;
		    color: #fff!important;
		}
		/*.swal2-popup {
		    background-color: #CFCCC7!important;
		}*/
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  	<a class="navbar-brand" href="index.php">User Transaction</a>

	  <!-- Toggler/collapsibe Button -->
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  <!-- Navbar links -->
	    <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    	<ul class="navbar-nav ml-auto">
	      		<li class="nav-item">
	        		<a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "index.php")? "active":""; ?>" href="index.php"><i class="fas fa-home active"></i>&nbsp;Home</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "about.php")? "active":""; ?>" href="about.php"><i class="fas fa-user-circle"></i>&nbsp; About</a>
	      		</li>
	    	</ul>
	    </div>
	</nav> 

	<div class="text-center">
		<h1>This is about page</h1>
	</div>
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