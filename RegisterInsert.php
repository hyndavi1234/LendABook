<?php
session_start();
include 'connection.php';

$fname = $_POST['FName']; 
$lname=$_POST['LName'];
$email =$_POST['Email'];
$password=$_POST['Password'];
$cpassword=$_POST['CPassword'];
$phonenumber=$_POST['PhoneNumber'];
$address=$_POST['Address'];

if($password!=$cpassword)
{
    ?>
	<!DOCTYPE html>
	<html>
	<head>
		<script type="text/javascript">
			alert("Passwords didn't match");
			window.location.href = 'http://visualimpact.ga/LendABook/Register.php';
		</script>
	</head>
	</html>
	<?php
}
else
{
    $query1="select * from UserData where UserEmail='$email' ";
    if((mysqli_fetch_assoc($conn,$query1))>0)
    {
      ?>
    	<script type="text/javascript">
    	alert("User with this email already exixts!!!");
        window.location.href = 'http://visualimpact.ga/LendABook/home.php';
        </script>
	<?php  
    }
    else
    {
        if (!preg_match("/^[7-9][0-9]{9}$/",$phonenumber)) 
        {
         ?>
        	<script type="text/javascript">
        	alert("Enter Valid mobile number!!!");
            window.location.href = 'http://visualimpact.ga/LendABook/Register.php';
            </script>
    	<?php 
        }
        else
        {
            $query = "INSERT into UserData(UserFirstName, UserLastName, UserPassword, UserEmail, PhoneNumber, Address) 
    										values('$fname', '$lname', '$password', '$email', '$phonenumber','$address')";
            if(mysqli_query($conn, $query))
            {
            	$_SESSION['Email']=$email;
            	$_SESSION['User']="true";
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
        }
    }
}
?>