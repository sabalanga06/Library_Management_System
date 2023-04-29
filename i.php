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
$sql="select * from book_details where book_no='$book_no' and book_availability ='yes'";
$ans=mysqli_query($conn,"$sql");
if($ans==1)
{
$query="insert into issuebook values('$student_name','$enrollment_number','$department','$book_name','$book_no','$issue_date','$return_date')";
$abc=mysqli_query($conn,"$query");
if($abc==1)
  {
	$upadate="UPDATE `book_details` SET `book_avalaibility`='yes' WHERE `book_avalaibility`='no'";
	$res=mysqli_query($conn,"$upadate");
	if($res)
	{
		echo"delete";
	}
  }
}

 mysqli_close($conn);

?>
