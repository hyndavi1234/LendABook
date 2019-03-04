<?php
session_start();
include 'connection.php';
$id=$_GET['id'];
$status="lent";
$request="accepted";
$query = "Update BookData set Request='$request', Status='$status' WHERE id='$id' ";
if(mysqli_query($conn, $query))
{
?>
	<script type="text/javascript">
	alert('Request Accepted');
    window.location.href = 'http://visualimpact.ga/LendABook/Notifications.php';
    </script>
<?php
}
else
{
	echo "Network failure, please try again..";
}
?>