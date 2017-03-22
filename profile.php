<?php
include ("auth.php");
require ('db.php');
if (isset($_GET['Profile']))
{
	header("Location: profile.php");
}
elseif (isset($_GET['Results']))
{
	header("Location: report.php");
}
elseif (isset($_GET['Home']))
{
	header("Location: home.php");
}
elseif (isset($_GET['update'])) 
{
	$id = $_SESSION['userid'];
	$fname =$_GET['fname'];
	$lname =$_GET['lname'];
	$password=$_GET['password'];
	$num=$_GET['number'];
	$add = $_GET['address'];
	$query = "update user set firstname ='$fname',lastname ='$lname',password='".md5($password)."',phonenumber='$num',address='$add' where id=$id";
	$result = mysqli_query($conn, $query);
	$_SESSION['uname']=$fname;
	$_SESSION['password']=$password;
	//$row = mysqli_num_rows($result);
	
	//header("Location: profile.php");
}

$id = $_SESSION['userid'];
$query = "select * from user where id=$id";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
$rows = mysqli_fetch_assoc($result);
			

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<?php include 'header.html'; ?>
	<body>
		<div class="form">
			<p id="welcome">
				Welcome <?php echo $_SESSION['uname']; ?>!
				<a id="btnLogout" href="logout.php">Logout</a>
			</p>
			<form action='' method="get">
			<aside id="asideOptions">
				
				<input  class="btn" type='submit' value='Home' name='Home'><br />
				<input class="btn"  type='submit' value='Profile' name='Profile'><br />
				<input class="btn"  type='submit' value='Results' name='Results'><br />
			
			</aside>
				<aside id="asideProfile">
				<h1 align="center">Profile</h1>
					<table id="profileTable">
						<tr class="tr">
							<td class="tr"> First Name :</td>
							<td class="tr"><input type="text" name="fname" value="<?php echo $rows["firstname"]?>"/></td>
						</tr>
						<tr class="tr">
							<td class="tr"> Last Name :</td>
							<td class="tr"><input type="text" name="lname" value="<?php echo $rows["lastname"]?>"/></td>
						</tr>
						<tr class="tr">
							<td class="tr"> Email :</td>
							<td class="tr"><input type="text" name="email" disabled  value="<?php echo $rows["email"]?>"/></td>
						</tr>
						<tr class="tr">
							<td class="tr"> Password :</td>
							<td class="tr"><input type="text" name="password" value="<?php echo $_SESSION['password']?>"/></td>
						</tr>
						<tr class="tr">
							<td class="tr"> Phone Number :</td>
							<td class="tr"><input type="text" name="number" value="<?php echo $rows["phonenumber"]?>"/></td>
						</tr>
						<tr class="tr">
							<td class="tr"> Address :</td>
							<td class="tr"><input type="text" name="address" value="<?php echo $rows["address"]?>"/></td>
						</tr> 

					</table>
				<br>
				<input type='submit' value='Update' name='update'>	
			</aside>
			</form>
			</div>
	</body>
</html>