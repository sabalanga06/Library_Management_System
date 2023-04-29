<html>
<head>
<title>enter books:</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<style>
body{
	color:white;
 background-size:cover;
 
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
<center><h1 text-size="45" style="text-decoration:underline;"> Library Management System</h1></center><br><br>
<form action="<?php $PHP_SELF ?>"method="post"> 
<center>
 <b><h2>Enter Title :</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="bname" size="30"></h2><br>
 <b><h2>Enter Publication :</b><input type="text" name="publ" size="30"></h2><br>
 <b><h2>Enter Author:</b>&nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="author" size="30"></h2><br>
 <b><h2>Enter Book_no:</b>&nbsp; &nbsp; &nbsp;<input type="text" name="bno" size="30"></h2><br>
 <b><h2>Enter Sem:</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="sem" size="30"></h2><br>
 <b><h2>Enter Department:</b><input type="text" name="dept" size="30"></h2><br><br>
 <p style="align:center"><input type="submit" name="submit" value="submit">&nbsp; &nbsp;
<input type="reset" value="Reset"></p>
</center>
</form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","");
if(isset($_POST['submit']))
{
$title=strval($_POST['bname']);
$publication=strval($_POST['publ']);
$author=strval($_POST['author']);
$bno=intval($_POST['bno']);
$sem=intval($_POST['sem']);
$dept=strval($_POST['dept']);
$sdb=mysqli_select_db($conn,"book");
$query="insert ignore into book_details values('$title','$publication','$author','$bno','$sem','$dept')";
$abc=mysqli_query($conn,"$query");
echo"data inserted";
mysqli_close($conn);
}	
?>