<!DOCTYPE html>
<html lang="en">
<head>
<title>Lend A Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="./css/style1.css">
<link rel="stylesheet" type="text/css" href="./css/AccessStyle.css">
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





	<form class="box" action="RegisterInsert.php" method="post">
    	<h1>Registration</h1>
        <input type="text" name="FName" placeholder="FirstName" required>
        <input type="text" name="LName" placeholder="LastName" required>
        <input type="email" name="Email" placeholder="E-Mail" required>
        <input type="password" name="Password" placeholder="Enter Password" required>
        <input type="password" name="CPassword" placeholder="confirm Password" required>
        <input type="text" name="PhoneNumber" placeholder="Mobile Number" min="10" max="10" required>
        <textarea rows="5" cols="28" name="Address" placeholder="Address" required></textarea>
        <input type="submit" name="Register" value="Register">
        <center><a href="Login.php">
            <p style="color:white;">Already Registered? click here to Login</p>
        </a></center>
    </form>
    
    
    
    
    
        
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