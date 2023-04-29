<html>
<head> 
<style>
.box{
	height:300px;
</style>
<title>Admin login</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body style="background-size:cover";>
 <div class="box">
    <h1 style="text-decoration:underline";>LOGIN</h1>
    <form action="<?php $PHP_SELF ?>" method="post">
    <h2>UserName:</h2>
	<input type="text" name="uname">
    <h2>Password:</h2>
	<input type="password" name="pass">
	<a href="homepage.php">
	<p class="btn" style="align:center"><input type="submit" value="login" name="btn"></p></a>
	<a href="forgotpassword.php" style="color:black";>forgot password?</a>
	</div>
</form>
</body>
</html>
 
<?php
session_start();
//$servername = "localhost";
//$username = "root";
//$password = "password";

$con = mysqli_connect('localhost' , 'root' , " " );
echo "connection";
$db = mysqli_select_db($con, 'library_project');
echo "database";

if((isset($_POST['uname']))&&(isset($_POST['pass']))){
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$sql = " select * from  login where username='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1)
		{
			echo "login successful";
			$_SESSION['uname'] = $username;
			$_SESSION['pass'] =$password;
			header('location:homepage.php');
		}
}
mysqli_close($con);
?>

