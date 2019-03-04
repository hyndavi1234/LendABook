<?php
session_start();
include 'connection.php';
$email=$_SESSION["Email"];
$lent = "lent";
$query = "select * from BookData where UserEmail='$email' and Status='$lent' ";
$result=mysqli_query($conn,$query);
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

<link rel="stylesheet" type="text/css" href="style1.css">
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
      
    
    
    
    
	<div class="container">
	<br><br>
	<h3>Lent Books</h3>
	<?php
	if((mysqli_num_rows($result))==0)
	{
	    ?>
	    <h4>No lent books</h4>
	    <?php
	}
	else
	{
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<div class="card flex-row flex-wrap">
        <div class="card-header border-0">
            <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['BookImage'] ); ?>" width="150px" height="150px" >
        </div>
        <div class="card-block ml-3">
		    <br>
            <h4 class="card-title"><?php echo $row['BookName'];?></h4>
            <p class="card-text" style="itlaic">Category: <?php echo $row['BookCategory'];?></p>
			<div class="text-right">
            <a href="ViewBook.php?id=<?php echo $row['id'];?>"  
               class="btn btn-primary float-left"><span class="glyphicon glyphicon-eye-open">View</span></a>
			</div>
        </div>
        <div class="w-100"></div>
    </div>
    <br><br>
	<?php	
	}
	}
	?>
	</div>
	
	
	
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