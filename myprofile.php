<?php
session_start();
include 'connection.php';
$email=$_SESSION["Email"];
$query = "select * from UserData where UserEmail='$email' ";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Lend A Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="./css/style1.css">
<style>
.container {
    position: relative;
    color: white;
    margin-left:30%;
    margin-top:2%;
    margin-bottom:2%;
    width: 600px;
    height: 420px;
    color: white;
    padding:25px;
    
    /*width: 460px;
    height: 320px;
    position: relative;
    left:450px; 
    margin: 50px;
    max-width: 1000px;
    padding: 70px 50px;*/
    background-color: rgba(0, 0, 0, 0.5);
    transform: translate(-3%,-3%);
}
.container tr, td
{
    padding:15px;
}
</style>
</head>
<body>
<div class="header">
   <div class="title">
        <h2>Lend A Book</h2>
   </div>
   
   <div class="topnav">
       <a href="Logout.php">Logout <span class="glyphicon glyphicon-user"></span></a>
       <a href="Register.php">Register</a>
   </div>
</div><!--header close-->

<div class="row">
  <div class="sidenav">
      <a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a>
      <a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a>
      <a href="mybooks.php"><span class="glyphicon glyphicon-list"></span> My Books</a>
      <a href="Notifications.php"><span class="glyphicon glyphicon-bell"></span> Notifications</a>
      <a href="BookEntry1.php"><span class="glyphicon glyphicon-plus"></span> Add Book</a>
      <a href="lentbooks.php"><span class="glyphicon glyphicon-book"></span> Lent Books</a>
      <a href="borrowedbooks.php"><span class="glyphicon glyphicon-book"></span> Borrowed Books</a>
      <a href="CartView.php"><span class="glyphicon glyphicon-shopping-cart"></span> View Cart</a>
      <!-- <a onclick=check_already_loggedin()>View</a> -->
  </div><!--sidenav close-->
  
  <div class="column middle">
            
            <center>
                <h3>Profile Details</h3>
            </center>
            <table class="container">
            <tr>
                <td rowspan="4"><img src="user.png" width="100" height="150"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><label>First Name :</label></td>
                <td><?php echo $row['UserFirstName'];?></td>
            </tr>
            <tr>
                <td></td>
                <td><label>Last Name :</label></td>
                <td><?php echo $row['UserLastName'];?></td>
            </tr>
            <tr>
                <td></td>
                <td><label>User Email:</label></td>
                <td><?php echo $row['UserEmail'];?></td>
            </tr>
            </table>
            <center>
                  <a href="EditProfile.php"><button class="btn btn-primary">Edit Profile</button></a>
            </center>


</div><!--column-middle close-->
</div><!--row close-->

<script type="text/javascript">
  function check_already_loggedin()
  {
    var check='<?php echo $_SESSION['user'];?>'
    if(check==true)
      window.location.href="othershome.php";
    else
      window.location.href="notreg.php";
  }
</script>
</body>
</html>