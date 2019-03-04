<?php
session_start();
include 'connection.php';
$email =$_SESSION['Email'];
$fname = $_POST['FName']; 
$lname=$_POST['LName'];
$password=$_POST['Password'];
$phonenumber=$_POST['PhoneNumber'];
$address=$_POST['Address'];
$query = "Update UserData set UserFirstName='$fname', UserLastName='$lname', UserPassword='$password', PhoneNumber='$phonenumber', Address='$address' WHERE UserEmail='$email' ";
if(mysqli_query($conn, $query))
{
?>
	<script type="text/javascript">
    window.location.href = 'http://visualimpact.ga/LendABook/home.php';
    </script>
<?php
}
else
{
	echo "Network failure, please try again..";
}
?>