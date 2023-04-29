<html>
<body style="background-image:url(images/search.jpg)";>
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
<center>
<h1 style="color:black; text-decoration:underline;">Library Management System</h1><br><br><br>
</center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
$sdb=mysqli_select_db($con,"book");
if(isset($_POST['submit']))
{
	$title=$_POST['abc'];
	$sql="select * from book_details where book_no='$title'";
$total=mysqli_query($con,$sql);
	//to find how many rows in table
if(mysqli_num_rows($total)>0)
{ 
echo"<center>";
echo "<table border=2>
<tr><th>title</th>
<th>publication</th>
<th>author</th>
<th>book_no</th>
<th>sem</th>
<th>department</th>
<th>available_quantity</th>
</tr>";
//to fetch table value from database and display
while($row=mysqli_fetch_array($total))
{
echo "<tr>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['publication']."</td>";
echo "<td>".$row['author']."</td>";
echo "<td>".$row['book_no']."</td>";
echo "<td>".$row['sem']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['available_quantity']."</td>";

echo "</tr>";
} 
echo "</table>";
echo"</center>";
}
}


/*$title=$_POST['abc'];
$civ="select * from civil where title='$title'";
$result=mysqli_query($con,$civ);
	//to find how many rows in table
if(mysqli_num_rows($result)>0)
{ 
echo"<center>";
echo "<table border=2>
<tr><th>title</th>
<th>publication</th>
<th>author</th></tr>";
//to fetch table value from database and display
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['publication']."</td>";
echo "<td>".$row['author']."</td>";
echo "</tr>";
} 
echo "</table>";
echo"</center>";
}

$title=$_POST['abc'];
$elec="select * from electrical where title='$title'";
$res=mysqli_query($con,$elec);
	//to find how many rows in table
if(mysqli_num_rows($res)>0)
{ 
echo"<center>";
echo "<table border=2>
<tr><th>title</th>
<th>publication</th>
<th>author</th></tr>";
//to fetch table value from database and display
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['publication']."</td>";
echo "<td>".$row['author']."</td>";
echo "</tr>";
} 
echo "</table>";
echo"</center>";

}

$title=$_POST['abc'];
$mech="select * from mechanical where title='$title'";
$ans=mysqli_query($con,$mech);
	//to find how many rows in table
if(mysqli_num_rows($ans)>0)
{ 
echo"<center>";
echo "<table border=2>
<tr><th>title</th>
<th>publication</th>
<th>author</th></tr>";
//to fetch table value from database and display
while($row=mysqli_fetch_array($ans))
{
echo "<tr>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['publication']."</td>";
echo "<td>".$row['author']."</td>";
echo "</tr>";
} 
echo "</table>";
echo"</center>";
}
}
*/
?>

<?php
$con=mysqli_connect("localhost","root","");
$sdb=mysqli_select_db($con,"book");
if(isset($_POST['submit']))
{
$title=$_POST['abc'];
$issue="select * from issuebook where book_no='$title'";
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

<html>
<body><center><br>
<a href="issuebook.php"><input type="submit" value="ISSUE" name="iss" style="width:100px; color:white; background-color:black;"></a></center>
</body>
</html>

