<html>
<head>
<title>issue book</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<style>
body{
 
 background-size:cover;
}
input[type=text],[type=numeric],[type=submit]{
	border:3px solid black;
	border-radius:2px;
	background-color:#dddddd;
}
</style>
<body>
 <header>
	  <div class="menubar">
	  <nav id="nav">
	  <ul>
	  <li><a href="homepage.php">HOME</a></li>
	  <li><a href="">BOOK</a>
	  <div class="submenu1">
	    <ul>
	       <li><a href="enterbooks.php">ADD_BOOK</a></li>
		   <li><a href="managebook.php">MANAGE_BOOK</a></li>
		   <li><a href="return.php">RETURNBOOK</a></li>
        </ul>
	  </div>
	  </li>
	  <li><a href="">CATEGORY</a>
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
	  </div>
      </header>
<center>
<form action="<?php $PHP_SELF ?>" method="post">
<h1 style="color:white; text-decoration:underline;"> Library management system</h1><br>
<h3 style="color:white";>STUDENT_NAME:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="sname" size="30"></h3><br>
<h3 style="color:white";>ENROLLMENT_NUMBER:<input type="text" name="eno" size="30"></h3><br>
<h3 style="color:white";>DEPARTMENT:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="dept" size="30"></h3><br>
<h3 style="color:white";>BOOK_NAME:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="bname" size="30"></h3><br>
<h3 style="color:white";>BOOK_NO:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="bookno" size="30"></h3><br>
<h3 style="color:white";>ISSUE_DATE:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="numeric" name="idate" size="30"></h3><br>
<h3 style="color:white";>RETURN_DATE:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="numeric" name="rdate" size="30"></h3><br><br>
<input type="submit" name="submit" value="submit">&nbsp; &nbsp;
<input type="submit" name="reset" value="reset">
</form>
</center>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","");
if($conn)
{
	echo"connect";
}
if(isset($_POST['submit']))
{
$student_name=strval($_POST['sname']);
$enrollment_number=strval($_POST['eno']);
$department=strval($_POST['dept']);
$book_name=strval($_POST['bname']);
$book_no=strval($_POST['bookno']);
$issue_date=strval($_POST['idate']);
$return_date=strval($_POST['rdate']);
$sdb=mysqli_select_db($conn,"book");
if($sdb)
{
	echo"select";
}
$sql="select*from book_details where book_no='$book_no' and available_quantity ='availabilty'";
$ans=mysqli_query($conn,"$sql");
if($ans==1)
{
	$query="insert into issuebook values('$student_name','$enrollment_number','$department','$book_name','$book_no','$issue_date','$return_date')";
$abc=mysqli_query($conn,"$query");
if($abc==1)
  {
	$upadate="UPDATE `book_details` SET `available_quantity`='not available' WHERE `book_no`='$book_no'";
	$res=mysqli_query($conn,"$upadate");
	if($res)
	{
		echo"delete";
	}
  }
  else
{
	echo"book not available";
}
}
 mysqli_close($conn);
}
 ?>











