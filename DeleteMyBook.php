<?php
session_start();
include 'connection.php';
$email = $_SESSION["Email"];
$id= $_GET['id'];
$query="Delete from BookData where id='$id' and UserEmail='$email' ";
$result=mysqli_query($conn,$query);
if($result)
{
  ?>
  <!DOCTYPE html>
	<html>
	<head>
		<script type="text/javascript">
			window.location.href = 'http://visualimpact.ga/LendABook/mybooks.php';
		</script>
	</head>
	</html>


<?php  
}
?>