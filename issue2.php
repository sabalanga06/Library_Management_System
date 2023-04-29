<?php
$con=mysqli_connect("localhost","root","");
if($con)
{
	echo"conection";
}
$sdb=mysqli_select_db($con,"book");
if(isset($_REQUEST['btn']))
{
$name=($_REQUEST['aname']);
$enumber=($_REQUEST['eno']);
$department=($_REQUEST['dept']);
$book_name=($_REQUEST['bname']);
$bookno=($_REQUEST['bookno']);
$issdate=($_REQUEST['idate']);
$retdate=($_REQUEST['rdate']);
$query="insert into issuebook values('.$_REQUEST['aname'].','.$_REQUEST['eno'].','.$_REQUEST['dept'].','.$_REQUEST['bname'].','.$_REQUEST['bookno'].','.$_REQUEST['idate'].','.$_REQUEST['rdate'].')";
$total=mysqli_query($con,"$query");
if($total)
{ 
echo "Values Inserted Successfully";
}
mysqli_close($con);
}
?>
