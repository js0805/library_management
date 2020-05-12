
<html>
<head>
	<title>user </title>
	
	<style>
	*{
	padding: 0px;
	margin: 0px;
	font-family: Century Gothic;
}

h1{
	float: left;
	padding-left: 50px;
	font-size: 50px;
	color:white;
}
ul{
	float: right;
	align-items: center;
	color: solid transparent;
	padding: 10px;
	
}
ul li{
	padding-top: 20px;
	display: inline-block;
	
}
ul li.active a{
	background-color: white;
	color: black;

}
ul li a{
	color: black;
	text-decoration: none;
	padding: 5px 20px;
	border: .5px solid transparent;
	transition: 0.6
	s ease;
}
ul li a:hover{
	background-color: white;
	color: black;
}
.middle{
	padding-top: 350px;
	padding-left: 150px;
	text-align: center;
	font-size: 80px;
	color: 800000;
}
.main ul ul{
	display: block;
	background: black;
	padding: 0;
	margin: 0;
	position: absolute;
	top: 100%;
}
body{
	align:center;
	 
}
.main ul ul li{
	float: none;
	position: relative;
}
.main ul ul li a{
	padding: 25px;
	color: white;
	width: 300px;
	text-align: left;
}
</style>
</head>
<body background="C:\Users\Hiiii\Downloads\pic6(1).jpg" >

<?php
include ("stfunctions.php");?>
	
	<div class="main">
		<i><h1>user page</h1></i>
		<ul>
			<li class="active"><a href="#">home</a></li>

			<li><a href="stsearchallbook.php">all available books</a></li>
			<li><a href="stsearchbookname.php">search book by name</a></li>
			<li><a href="stsearchauthorname.php">search book by author</a></li>
			<li><a href="stsearchbranchname.php">search book by branch</a></li>
			<li><a href="#">logout</a></li>
		</ul>

	</div>
		
	<div class="middle">
	    <h1><?php echo $username; ?></h1>
		<i><h2>welcome</h2></i>
        
	</div>
	 
</body>
</html>
