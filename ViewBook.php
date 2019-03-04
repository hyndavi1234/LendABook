<?php
include 'connection.php';
$id=$_GET['id'];
$query="select * from BookData where id = '$id' ";
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));
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
      <a href="BookEntry1.php"><span class="glyphicon glyphicon-plus"></span> Add Book</a>
      <a href="lentbooks.php"><span class="glyphicon glyphicon-book"></span> Lent Books</a>
      <a href="borrowedbooks.php"><span class="glyphicon glyphicon-book"></span> Borrowed Books</a>
      <a href="CartView.php"><span class="glyphicon glyphicon-shopping-cart"></span> View Cart</a>
      <!-- <a onclick=check_already_loggedin()>View</a> -->
  </div><!--sidenav close-->
  
  <div class="column middle">
    
    
    
    
    
<br>
<div class="container">
    <div class="card flex-row flex-wrap">
        <div class="card-header border-0">
            <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['BookImage'] ); ?>"
            width="280" height="280" >
        </div>
        <div class="card-block  ml-3">
            <h2 class="card-title" style="italic"><?php echo $row['BookName'];?></h2>
			<p class="card-text" style="itlaic">Book Price: <?php echo $row['BookPrice'];?></p>
			<br>
			<p class="card-text" style="italic">Category: <?php echo $row['BookCategory'];?></p>
			<br>
			<p class="card-text" style="italic">Description: <?php echo $row['BookDesc'];?></p>
			<br>
			<p class="card-text" style="itlaic">Cost Per Day: <?php echo $row['CPD'];?></p>
			<br>
			<p class="card-text" style="itlaic">Cost Per Week: <?php echo $row['CPW'];?></p>
		</div>
        <div class="w-100"></div>
    </div>
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