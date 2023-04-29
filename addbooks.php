<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>

<?php
$con = mysqli_connect("localhost", 'root ,"" );
$db = mysqli_select_db($con, 'library project');
$title=$_POST["title"];
$author=$_POST["author"];
$quantity=$_POST["quantity"];
$query = "insert into book_info(,title,author,quantity) values('$title','$author','$quantity';)"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);

?>

<h3> Book information is inserted successfully </h3>
</body>
</html>