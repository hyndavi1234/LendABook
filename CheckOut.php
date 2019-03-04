<?php
session_start();
include 'connection.php';

$email=$_SESSION['Email'];
$request="accepted";
$query = "select * from BookData where BorrowerEmail='$email' and Request='$request' ";
$fare=0;

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

<link rel="stylesheet" type="text/css" href="./css/style1.css">
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
<h3>Your Orders</h3>
<?php
while($row=mysqli_fetch_assoc($result))
{
        $fare=$fare+($row['BookPrice'])*0.6;
?>
      <div class="card flex-row flex-wrap">
        <div class="card-header border-0">
            <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['BookImage'] ); ?>" width="150px" height="150px" >
        </div>
        <div class="card-block px-2">
		    <br>
            <h4 class="card-title"><?php echo $row['BookName'];?></h4>
           
            <p class="card-text" style="itlaic">Category: <?php echo $row['BookCategory'];?></p>
            <p class="card-text" style="itlaic">Actual Book Price: <?php echo $row['BookPrice'];?></p>
            
			<div class="text-right">
            <a href="ViewBook.php?id=<?php echo $row['id'];?>"  
               class="btn btn-primary float-left ml-2" hspace="100px">
                <span class="glyphicon glyphicon-eye-open"></span>View</a>
			</div>
        </div>
        <div class="w-100"></div>
    </div>
    <br><br>  
<?php    
    }
if($fare==0)
{
?>

<h4>No Items in the cart..</h4>

<?php
}
else
{
?>

<h4>Amount to be paid : Rs <?php echo $fare;?>/-</h4>
<h4>Expected Delivery Date: <?php echo date('d-m-Y', strtotime($date. ' + 5 days'));?></h4>

<?php
}
?>




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