//stsearchbname

<html>
<body>
<?php

    if (isset($_GET["v4"]))
    {
        $c=mysqli_connect("localhost","root","","manit");
        if($c){
            $selected_radio = $_GET['v1'];
            $data= $_GET['v2'];
                
            if ($selected_radio == 'branch')
            {
                $query = "select * from book where branch = '$data';";

            }
            else if ($selected_radio == 'author')
            {
                $query = "select * from book where author like '%".mysqli_real_escape_string($c,$data)."%';";
            }
            else if ($selected_radio == 'name')
            {
                $query = "select * from book where bname like '%".mysqli_real_escape_string($c,$data)."%';";
                //search with a book name in the table book_info
            }

            $result = mysqli_query($c,$query); 
            if(mysqli_num_rows($result)>0){
                echo "
                <table>
                <thead>
                <tr>
                <th> BOOK ID </th>
                <th> BOOK NAME </th>
                <th> AUTHOR </th>
                <th> BRANCH </th>
                <th> PUBLISHER </th>
                <th> STATUS </th>
                </tr>
                </thead>
                <tbody> ";
                while($row = mysqli_fetch_assoc($result))
                { 
                    echo"<tr>
                    <td>".$row['bid']."</td>
                    <td>".$row["bname"]."</td>
                    <td>".$row["author"]."</td>
                    <td>".$row["branch"]."</td>
                    <td>".$row["publisher"]."</td>
                    <td>".$row["status"]."</td>
                    </tr>";
                }
                echo"
                </tbody>
                </table>";
            }
        }
    }
?>
</body>
</html>        

	
