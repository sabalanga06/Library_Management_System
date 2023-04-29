<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	<form action="searchtable.php" method="POST">
	     <div class="search-box">
		 <input class="search-txt" type="text" name="abc" placeholder="search">
         <a class="search-btn" href=""><button name="submit" class="fa fa-search"></button></a>
   </div>
   </form>
   
</body>
</html>
<style>
body{
	margin:0;
	padding:0;
	<!----background-image:url("images/search5.jpg");--->
	background-size:cover;
}
.search-box{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	background:black;
	height:40;
	border-radius:60px;
	padding:10;
	
}
.search-btn{
	color:black;
	float:right;
	width:40;
	height:40;
	border-radius:50%;
	background:gray;
	display:flex;
	justify-content:center;
	align-items:center;
	text-decoration:none;
	transition:0.4s;
}
.search-txt{
	border:none;
	background:none;
	outline:none;
	float:left;
	padding:0;
	color:white;
	font-size:16px;
	transition:0.4s;
	line-height:40px;
	width:0px;
	
}
.search-box:hover>.search-txt{
	width:240px;
	padding:0 6px;	
}
.search-box:hover>.search-btn{
	background:white;
}
</style>
<?php
$con=mysqli_connect("localhost","root","");
$sdb=mysqli_select_db($con,"book");
if(isset($_POST['submit']))
{
$title=$_POST['abc'];
$issue="select * from issuebook where student_name='$title'";
$answer=mysqli_query($con,$issue);
	//to find how many rows in table
if(mysqli_num_rows($answer)>0)
{ 
echo"<center>";
echo "<table border=2>
<tr><th>student_name</th>
<th>enrollment_number</th>
<th>department</th>
<th>book_name</th>
<th>issue_data</th>
<th>return_date</th></tr>";
//to fetch table value from database and display
while($row=mysqli_fetch_array($answer))
{
echo "<tr>";
echo "<td>".$row['student_name']."</td>";
echo "<td>".$row['enrollment_number']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['book_name']."</td>";
echo "<td>".$row['issue_date']."</td>";
echo "<td>".$row['return_date']."</td>";
echo "</tr>";
} 
echo "</table>";
echo"</center>";
}

}
mysqli_close($con);
?>

