<html><head>
</head>
<body>
<?php
	if (isset($_GET["v4"]))
	{
		$c=mysqli_connect("localhost","root","");
		if($c){
			mysqli_connect_select_db("manit",$c);
			$selected_radio = $_GET['v1'];
			
				
			if ($selected_radio = 'branch')
			{
				$query = mysqli_query( "select * from book where branch = $selected_radio");

			}
			else if ($selected_radio = 'author')
			{
				$query =mysqli_query( "select * from book where author like '%$selected_radio%'");
			}
			else if ($selected_radio = 'name')
			{
				$query = mysqli_query("select * from book where bname like '%$selected_radio%'"); //search with a book name in the table book_info
			}

			$result = mysqli_query($db,$query); 
			if(mysqli_num_rows($result)>0){
				echo"
			<table>
			<thead> 
			<tr>
			<th> bid </th>
			<th> bname </th>
			<th> author </th>
			<th> branch </th>
			<th> publisher </th>
			<th> status </th>
			</tr>
			 </thead>
			 <tbody>
			while($row = mysqli_fetch_assoc($result))
			{
			<tr>
			<td>echo\"$row[\"bid\"]\"; </td>
			<td>echo\"$row[\"bname\"]\";</td>
			<td>echo\"$row[\"author\"]\"; </td>
			<td>echo\"$row[\"branch\"]\"; </td>
			<td>echo\"$row[\"publisher\"]\"; </td>
			<td>echo\"$row[\"status\"]\"; </td>
			</tr>
			}
			</tbody>
		</table>";
		}
	}
}
?>
</body>
</html>		