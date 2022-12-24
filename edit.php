<?php
	session_start();
	include_once('book_form.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$location = $_POST['location'];
		$guests = $_POST['guests'];
		$arrivals = $_POST['arrivals'];
		$leaving = $_POST['leaving'];
		$sql = "UPDATE book_form SET name='$name',email='$email',phone='$phone',address ='$address',location ='$location',guests='$guests',arrivals='$arrivals',leaving ='$leaving'  WHERE id = '$id'";

		//use for MySQLi OOP
		if($connection->query($sql)){
			$_SESSION['success'] = ' updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>