<?php
session_start();
include 'connection.php';

$query = "select * from BookData where BookCategory='Horror' LIMIT 4";
$query1 = "select * from BookData where BookCategory='Thriller' LIMIT 4";
$query2 = "select * from BookData where BookCategory='Adventure' LIMIT 4";
$query3 = "select * from BookData where BookCategory='Others' LIMIT 4";

$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$result3=mysqli_query($conn,$query3);
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
<script>
function myFun()
{
    var user='<?php echo $_SESSION['User'];?>';
    var email='<?php echo $_SESSION['Email'];?>';
    if(user=="true")
    {
        document.getElementById("UserName").textContent=email;
    } 
}
</script>
<link rel="stylesheet" type="text/css" href="./css/style1.css">
</head>
<body onload="myFun()">
    
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
    <h4><b>Welcome</b>, <span id="UserName"></span></h4>
     
    
      
      
        <div class="container" >
            <h2>Horror</h2>
            <hr>
            <div class="card-deck" >
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                	<div class="card" style="width:10px" >
                      <img  
                            src="data:image/jpeg;base64,<?php echo base64_encode( $row['BookImage'] ); ?>" 
                            alt="Card image" class="card-img-top"
                            style="width:100%" width="150" height="300">
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $row['BookName'];?></h4>
                        <p class="card-text">Book Price: <?php echo $row['BookPrice'];?></p>
                        <p class="card-text">Cost Per Day: <?php echo $row['CPD'];?></p>
                        <a href="RequestUser.php?id=<?php echo $row['id'];?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus"></span>Request User</a>
                      </div>
                    </div>
                <?php
                }
                ?>
            </div><!--card-deck close-->
            <br>
            
            <h2>Thriller</h2>
            <hr>
            <div class="card-deck" >
            <?php
            while($row1=mysqli_fetch_assoc($result1))
            {
            ?>
            	<div class="card" style="width:10px" >
                  <img class="card-img-top" 
                        src="data:image/jpeg;base64,<?php echo base64_encode( $row1['BookImage'] ); ?>" 
                        alt="Card image" 
                        style="width:100%" width="150" height="300">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row1['BookName'];?></h4>
                    <p class="card-text">Book Price: <?php echo $row1['BookPrice'];?></p>
                    <p class="card-text">Cost Per Day: <?php echo $row1['CPD'];?></p>
                    <a href="RequestUser.php?id=<?php echo $row1['id'];?>" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>Request User</a>
                  </div>
                </div>
            <?php
            }
            ?>
            </div>
            <br>
            
            <h2>Adventure</h2>
            <hr>
            <div class="card-deck" >
            <?php
            while($row2=mysqli_fetch_assoc($result2))
            {
            ?>
            	<div class="card" style="width:500px">
                  <img class="card-img-top" 
                        src="data:image/jpeg;base64,<?php echo base64_encode( $row2['BookImage'] ); ?>" 
                        alt="Card image" 
                        style="width:100%" width="150" height="300">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row2['BookName'];?></h4>
                    <p class="card-text">Book Price: <?php echo $row2['BookPrice'];?></p>
                    <p class="card-text">Cost Per Day: <?php echo $row2['CPD'];?></p>
                    <a href="RequestUser.php?id=<?php echo $row2['id'];?>" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>Request User</a>
                  </div>
                </div>
            <?php
            }
            ?>
            </div>
            <br>
            
            <h2>Others</h2>
            <hr>
            <div class="card-deck" >
            <?php
            while($row3=mysqli_fetch_assoc($result3))
            {
            ?>
            	<div class="card" style="width:10px" >
                  <img class="card-img-top" 
                        src="data:image/jpeg;base64,<?php echo base64_encode( $row3['BookImage'] ); ?>" 
                        alt="Card image" 
                        style="width:100%" width="150" height="300">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row3['BookName'];?></h4>
                    <p class="card-text">Book Price: <?php echo $row3['BookPrice'];?></p>
                    <p class="card-text">Cost Per Day: <?php echo $row3['CPD'];?></p>
                    <a href="RequestUser.php?id=<?php echo $row3['id'];?>" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>Request User</a>
                  </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div><!--container close-->
        
   
   
        
        
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