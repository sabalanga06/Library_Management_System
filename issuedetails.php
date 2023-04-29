<html>
<body style="background-image:url(images/lg.jpg)";>

<link rel="stylesheet" type="text/css" href="style1.css">
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
<center><h1 style="color:black; text-decoration:underline;">Library Management System</h1><br><br><br></center>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","");
$sdb=mysqli_select_db($con,"book");
{
	$sql="select * from issuebook";
$total=mysqli_query($con,$sql);
	//to find how many rows in table
if(mysqli_num_rows($total)>0)
{ 
echo"<center>";
echo"<table border=4>
<tr><th>student_name</th>
<th>enrollment_number</th>
<th>department</th>
<th>book_name</th>
<th>book_no</th>
<th>issue_date</th>
<th>return_date</th>
</tr>";
//to fetch table value from database and display
while($row=mysqli_fetch_array($total))
{
echo "<tr>";
echo "<td>".$row['student_name']."</td>";
echo "<td>".$row['enrollment_number']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['book_name']."</td>";
echo "<td>".$row['book_no']."</td>";
echo "<td>".$row['issue_date']."</td>";
echo "<td>".$row['return_date']."</td>";

echo "</tr>";
} 
echo"</table>";
echo"</center>";
}
}
mysqli_close($con);
?>
