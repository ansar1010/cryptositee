<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "cryptoguru";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
// else{
//     echo"connected";
// }
// 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Cryptoguru</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
			    <form action="signup1.php" id="signup1" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="email" name="email" id="email" placeholder="Email" required="">
					<input type="password" name="password" id="password" placeholder="Password" required="">
					<input type="password" name="repeat_password" id="repeat_password" placeholder="Repeat Password" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
			    <form action="login1.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>