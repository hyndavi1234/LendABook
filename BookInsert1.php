<?php
session_start();
include 'connection.php';

$email=$_SESSION['Email'];

$bookimage=$_FILES['BookImage']['tmp_name'];
$bookimagefile = addslashes(file_get_contents($bookimage)); 
$bookname = $_POST['BookName']; 
$bookdesc=$_POST['BookDesc'];
$bookprice =$_POST['BookPrice'];
$category=$_POST['BookCategory'];
$cpd=$_POST['CPD'];
$cpw=$_POST['CPW'];
$status="available";
$borroweremail="none";

$query = "INSERT into BookData(UserEmail, BookImage, BookName, BookDesc, BookPrice, BookCategory, CPD, CPW, Status, BorrowerEmail) 
	values('$email', '$bookimagefile', '$bookname', '$bookdesc', '$bookprice', '$category','$cpd','$cpw','$status','$borroweremail')";
$result=mysqli_query($conn,$query);
if(!$result)
{
    echo $result;
    echo "failed";
	?>
	<!--
	<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript">
			alert("Movie failed to upload...");
			window.location.href = 'http://visualimpact.ga/LendABook/BookEntry1.php';
		</script>
	</head>
	</html> -->
	<?php
}
else
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<script type="text/javascript">
			alert("success");
			window.location.href = 'http://visualimpact.ga/LendABook/home.php';
		</script>
	</head>
	</html>
	<?php
}
?>