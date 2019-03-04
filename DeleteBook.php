<?php
include 'connection.php';
$id= $_GET['id'];

$status="available";
$borroweremail="none";
$request="none";

$query = "UPDATE BookData set Status='$status', BorrowerEmail='$borroweremail', Request='$request' where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
  ?>
  <!DOCTYPE html>
	<html>
	<head>
		<script type="text/javascript">
			window.location.href = 'http://visualimpact.ga/LendABook/CartView.php';
		</script>
	</head>
	</html>


<?php  
}
?>