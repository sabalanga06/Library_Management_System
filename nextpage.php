<?php
$con=mysqli_connect("localhost","root","");
if($con)
{
	echo"conection";
}
if(isset($_POST['submit']))
{
$name=($_POST['uname']);
$psw=($_POST['pass']);
$sdb=mysqli_select_db($con,"library project");
$query="insert into login values('$name',$psw)";
$total=mysqli_query($con,"$query");
if($total)
{ 
echo "Values Inserted Successfully";
}
mysqli_close($con);
}
?>