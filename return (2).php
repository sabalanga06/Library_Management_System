<html>
<head>
<title>HOME PAGE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<header>
	      <div class="menubar">
	          <nav id="nav">
	             <ul>
	                 <li><a href="homepage.php">HOME</a></li>
	                 <li><a href="">BOOK</a>
	                       <div class="submenu1">
								<ul>
									<li><a href="enterbooks.php">ADDBOOK</a></li>
									<li><a href="managebook.php">MANAGEBOOK</a></li>
									<li><a href="return.php">RETURNBOOK</a></li>
								</ul>
							</div>
						</li>
					 <li><p style="color:white;">CATEGORY</p>
							<div class="submenu1">
								<ul>
									<li><a href="computer.php">COMPUTER</a></li>
									<li><a href="electrical.php">ELECTRICAL</a></li>
									<li><a href="mechanical.php">MECHANICAL</a></li>
									<li><a href="civil.php">CIVIL</a></li>
								</ul>
							</div>
						</li> 
					<li><a href="issuebook.php">ISSUE</a></li>
					<li><a href="searchbooks.php">SEARCH</a></li>
					<li><a href="logout.php">LOGOUT</a></li></ul>
				</nav>
      </header><br><br><br>
	  <section><center>
	  <form action="<?php $PHP_SELF ?>" method="post">
<h1 style="color:white; text-decoration:underline;"> Library management system</h1><br>
<h3 style="color:white";>STUDENT_NAME:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="sname" size="30"></h3><br>
<h3 style="color:white";>ENROLLMENT_NUMBER:<input type="text" name="eno" size="30"></h3><br>
<h3 style="color:white";>DEPARTMENT:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="dept" size="30"></h3><br>
<h3 style="color:white";>BOOK_NAME:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="bname" size="30"></h3><br>
<h3 style="color:white";>BOOK_NO:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="bookno" size="30"></h3><br>
<h3 style="color:white";>RETURN_DATE:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="numeric" name="rdate" size="30"></h3><br><br>
<input type="submit" name="submit" value="submit">&nbsp; &nbsp;
<input type="submit" name="reset" value="reset">
</form>

</body>
</html>
<?php
$con = mysqli_connect("localhost", "root" ,"" );
$db = mysqli_select_db($con,"book");
if(isset($_POST['submit']))
{
$student_name=strval($_POST['sname']);
$enrollment_number=strval($_POST['eno']);
$department=strval($_POST['dept']);
$book_name=strval($_POST['bname']);
$book_no=strval($_POST['bookno']);
$return_date=strval($_POST['rdate']);
$sql = "insert into returnbook value('$student_name','$enrollment_number','$department','$book_name','$book_no','$return_date')";
$query = mysqli_query($con,"$sql");
if($query==1)
{


	$insert="insert into book_details value('$title')";
	$quey = mysqli_query($con,"$insert");
	if($quey)
			{
			echo "return";
			}
}
}
mysqli_close($con);
?>
