<?php
session_start();
include 'connection.php';
$email=$_SESSION['Email'];
$id=$_GET['id'];
$request="requested";
$query = "Update BookData set Request='$request',BorrowerEmail='$email' WHERE id='$id' ";
if(mysqli_query($conn, $query))
{
?>
	<script type="text/javascript">
	alert('Request send to owner');
    window.location.href = 'http://visualimpact.ga/LendABook/home.php';
    </script>
<?php
}
else
{
	echo "Network failure, please try again..";
}
?>