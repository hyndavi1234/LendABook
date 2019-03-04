<?php
include 'connection.php';
$email=$_POST['Email'];
$password=$_POST['Password'];
$query="SELECT * FROM UserData WHERE UserEmail='$email'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if($row['UserPassword']==$password && $password!=''){
	session_start();
	$_SESSION['Email']=$email;
	$_SESSION['User']="true";
	header('Location:http://visualimpact.ga/LendABook/home.php');
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		alert("username or password incorrect");
		window.location.href="Register.php";
	</script>
</head>
</html> 
<?php
}?>