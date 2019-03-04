<?php
session_start();
include 'connection.php';
$email=$_SESSION['Email'];
$id=$_GET['id'];

$query="Insert into CartBooks(UserEmail,BookId) values('$email','$id')";
$status="lent";
$borroweremail=$email;
$query1 = "UPDATE BookData set Status='$status', BorrowerEmail='$borroweremail' where id='$id'";
$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);

if($result)
{
    ?>
    <!DOCTYPE html>
	<html>
	<head>
		<script type="text/javascript">
			alert("Book Added to cart...");
			window.location.href = 'http://visualimpact.ga/LendABook/home.php';
		</script>
	</head>
	</html>
    <?php
}
?>
