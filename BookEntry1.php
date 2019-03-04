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





	<form action="BookInsert1.php" method="post" enctype="multipart/form-data">
    <table align="center">
			<tr>
				<td class="inputheading">Book Name : </td>
				<td><input type="text" name="BookName" class="inputbox" required></td>
                
			</tr>
            
			<tr>
				<td class="inputheading">Book Description : </td>
				<td><input type="text" name="BookDesc" class="inputbox" required></td>
                
			 
            
			<tr>
				<td class="inputheading">Book Price : </td>
				<td><input type="text" name="BookPrice" class="inputbox" required></td>
			</tr>
			<tr>
				<td class="inputheading">Category : </td>
				<td><input type="text" name="BookCategory" class="inputbox" required></td>
			</tr>
			<tr>
				<td class="inputheading">Cost Per Day : </td>
				<td><input type="text" name="CPD" class="inputbox" required></td>
			</tr>
            <tr>
				<td class="inputheading">Cost Per Week : </td>
				<td><input type="text" name="CPW" class="inputbox" required></td>
			</tr>
            <tr>
				<td class="inputheading">Upload Book Image : </td>
				<td><input type="file" name="BookImage" accept="image/*" class="inputbox" required></td>
			</tr>
			<tr>
				<td></td>
				<td align="left">
					<input type="submit" value="submit" class="btn_submit" required>
				</td>
			</tr>
		</table>  
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