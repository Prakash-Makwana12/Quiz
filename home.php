<?php

include ("auth.php");
require ('db.php');

$_SESSION['index'] = 0;
$_SESSION['time'] = date('Y-m-d H:i:s');
$id = $_SESSION['userid'];
$timeStamp = $_SESSION['time'];

if (!isset($_SESSION['numOfAttempt']))
{
	$numOfAttempt = 1;
	$_SESSION['numOfAttempt'] = $numOfAttempt;
} 
else 
{
	$numOfAttempt = $_SESSION['numOfAttempt'];
}

if (isset($_GET['action_id'])) 
{
	$quizType = filter_input(INPUT_GET, 'option');
	$_SESSION['quizType'] = $quizType;
	header("Location: me.php");
}
elseif (isset($_GET['Profile']))
{
	header("Location: profile.php");
}
elseif (isset($_GET['Results']))
{
	header("Location: report.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome Home</title>
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
			<p align="center">Hi!<br /> You can take any of the following available test.<br /> It is mandetory to score 8 out of 10 to successfully clear the test.</p>
			<aside id="asideMain">
			
				<input type="radio" name="option" value="01" checked=""/>
				Java
				<br>
				<input type="radio" name="option" value="02"/>
				PHP
				<br>

				<input type='submit' value='Submit' name='action_id'>
				<br />
				<br />
				<!-- <input type='submit' value='Results' name='Results'> -->

			
			</aside>
			</form>

			<!-- <a  class="welcome" href="logout.php">Logout</a> -->
		</div>
	
	
	</body>
	<!-- <?php include 'footer.html'?> -->
</html>
