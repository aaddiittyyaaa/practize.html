<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = mysqli_connect('localhost','root','','motogp');
	$name= "INSERT into user(`first name`,`last name`,`gender`,`email`,`password`) values('$firstName','$lastName','$gender','$email','$password')";
    $execute = mysqli_query($conn,$name);
	if($execute){
		header("Location:index.html");
	}
	
	
?>