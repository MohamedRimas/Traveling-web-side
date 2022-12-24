<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:20px;
		}
		.mtop10{
			margin-top:20px;
		}
		.modal-label{
			position:relative;
			top:10px
		}
	</style>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">CRUD Operation </h1>
	
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			
			<div class="row">
				<a href="book.php"  class="btn btn-primary"> BACK</a>
				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>phone</th>
						<th>address</th>
						<th>location</th>
						<th>guests</th>
						<th>arrivals</th>
						<th>leaving</th>
						<th>fuction</th>
					</thead>
					<tbody>
						<?php
							include_once('book_form.php');
							$sql = "SELECT * FROM book_form";

							//use for MySQLi-OOP
							$query = $connection->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['name']."</td>
									<td>".$row['email']."</td>
									<td>".$row['phone']."</td>
									<td>".$row['address']."</td>
									<td>".$row['location']."</td>
									<td>".$row['guests']."</td>
									<td>".$row['arrivals']."</td>
									<td>".$row['leaving']."</td>
									
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
					

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	
    $('#myTable').DataTable();

   
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>


</html>


