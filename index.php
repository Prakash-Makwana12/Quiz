<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<?
	include 'header.html';
?>

<body>
<?php
	require('db.php');
	session_start();
    if (isset($_POST['username']))
    {
        $email = $_POST['username'];
        $password = $_POST['password'];
		$_SESSION['password'] =$password ;
		
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		
		//Checking is user existing in the database or not
        $query = "SELECT id,firstname,email,password FROM `user` WHERE email='$email' and password='".md5($password)."'";
		$res = mysqli_query($conn, $query);		
		$row = mysqli_num_rows($res);
        if($row>0)
        {
			$_SESSION['username'] = $email;
			while($rows = mysqli_fetch_assoc($res)) 
			{
        		$id = $rows["id"];
				$uname=$rows["firstname"];
				
				$_SESSION['userid'] = $id;
				$_SESSION['uname']=$uname;

   			}
				header("Location: home.php"); 
			
        }
        else
        {
			echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
		}
    }
    else
    {?>
	<!-- <h1>Log In</h1> -->
	<aside id="logoAside">
		<img src="logo.jpg" height="600px" width="600px" />
	</aside>
	<aside id="loginAside">
	<form id="form1" action="" method="post" name="login">
		<input type="email" name="username" placeholder="Email Address" required /><br />
		<input type="password" name="password" placeholder="Password" required /><br />
		<input name="submit" type="submit" value="Login" />
			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
	</form>
	</aside>
<?php } ?>
</body>
<?
	include 'footer.html';
?>
</html>
