<html>
<head>
<title>Manage books:</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<style>
body{
 <!---background-image:url("images/search6.jpg");--->
 background-size:cover;
}
.box{
	text-align:center;
	padding:50px;
	margin:70px auto;
	height:100px;
	width:200px;
    background-color:rgba(0,0,0,0.3);
	color:white;
	}
	#a{
		float:left;
	}
	#b{
		float:right;
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
	  
	  <div class="box" id="a">
	  <h3 style="font-size:25px;">totalbook</h3><br>
	  <a href="totalbook.php"><input type="submit" name="submit" value="show details"></a>
	  </div>
	  <div class="box"id="b">
	  <h1 style="font-size:25px;">return book</h3><br>
	  <a href="returndetails.php"><input type="submit" name="submit" value="show details"></a>
	  </div>
	  <div class="box">
	  <h3 style="font-size:25px;">issue book</h3><br>
	  <a href="issuedetails.php"><input type="submit" name="submit" value="show details"></a>
	  </div>
	  <div class="box">
	  <h3 style="font-size:25px;">available book</h3><br>
	  <a href="available.php"><input type="submit" name="submit" value="show details"></a>
	  </div>
	</body>
</html>	


