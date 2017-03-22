

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $fname = $_POST['username'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$number = $_POST['phone'];
		$address = $_POST['addre'];
		
			$fname = stripslashes($fname);
		$fname = mysql_real_escape_string($fname);
		
			$lname = stripslashes($lname);
		$lname = mysql_real_escape_string($lname);
		
		
		
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		
		$number = stripslashes($number);
		$number = mysql_real_escape_string($number);
		
		$address = stripslashes($address);
		$address = mysql_real_escape_string($address);
		
		
		
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `user` (firstname,lastname, email, password, phonenumber,address,trn_date) VALUES ('$fname','$lname',  '$email','".md5($password)."','$number','$address', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
	<input type="text" name="username" placeholder="First Name" required />
<input type="text" name="lname" placeholder="Last Name" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="phone" placeholder="Phone Number" required />
<input type="text" name="addre" placeholder="Address" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
