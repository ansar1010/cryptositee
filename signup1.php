<?php 

include 'indexn.php';

error_reporting(0);

session_start();

if (isset($_SESSION['email'])) {
    header("Location: signup-success.html ");
}

if (isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$repeat_password = ($_POST['repeat_password']);

	if ($password == $repeat_password) {
		$sql = "SELECT * FROM signup WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO signup ( email, password, repeat_password)
					VALUES ( '$email', '$password', '$repeat_password')";
			$result = mysqli_query($conn, $sql);
			header("Location: signup-success.html");
			
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$email = "";
				$_POST['password'] = "";
				$_POST['repeat_password'] = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>