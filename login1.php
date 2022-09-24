<?php 

include 'indexn.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    // header('Location: welcome.php ');
}

if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'  ";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
		header('Location: home.html ');
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

