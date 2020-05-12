
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2> ADD BOOKS IN LIBRARY</h2></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<form action="insertbooks.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter Book id :</td>
<td> <input type="text" name="bid" size="48"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="bname" size="48"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Branch :</td>
<td> <input type="text" name="branch" size="48"> </td>
</tr>
<tr>
<td> Enter Publisher :</td>
<td> <input type="text" name="publisher" size="48"> </td>
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