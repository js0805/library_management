
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2> UPDATE STATUS OF BOOKS IN LIBRARY</h2></center>
<!--Once the form is submitted, all the form data is forwarded to UpdateBooks.php -->
<form action="UpdateBooks.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter Book id :</td>
<td> <input type="text" name="bid" size="48"> </td>
</tr>
<tr>
<td> Enter Status: </td>
<td> <input type="text" name="status" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>