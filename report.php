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
elseif (isset($_GET['Home']))
{
	header("Location: home.php");
}

?>

<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<title>Your Attempts</title>
			<link rel="stylesheet" href="css/style.css" />
		</head>
		
		<?php include 'header.html'; ?>
		<p id="welcome">
				Welcome <?php echo $_SESSION['uname']; ?>!
				<a id="btnLogout" href="logout.php">Logout</a>
			</p>
		<body>
		<div class="form">
		<form action='' method="get">
				<aside id="asideOptions">
				
				<input  class="btn" type='submit' value='Home' name='Home'><br />
				<input class="btn"  type='submit' value='Profile' name='Profile'><br />
				<input class="btn"  type='submit' value='Results' name='Results'><br />
			
			</aside>
		<aside id="asideMain1">
		<?php 
		{
				$query =  "select user.id, count(answers.answergiven) , answers.testid  from user , question  , answers
				where user.id = '$id' and  answers.userid = '$id' and question.questionid = answers.questionid
				and question.answer = answers.answergiven group by answers.testid";

				$query1 =  "select user.id, count(answers.answergiven) , answers.testid  from user , quiz2  , answers
				where user.id = '$id' and  answers.userid = '$id' and quiz2.questionid = answers.questionid
				and quiz2.answer = answers.answergiven group by answers.testid";

				$res = mysqli_query($conn, $query);
				$res1 = mysqli_query($conn, $query1);
				$row = mysqli_num_rows($res);
				$row1 = mysqli_num_rows($res1);
				if($row>0 || $row1>0)
				{?>
 					<table id="reportTable">
 						<tr>
 							<th>User ID</th>
							<th>DateTime</th>
							<th>Score</th>
						</tr>

					<?php while($rows = mysqli_fetch_assoc($res) ) 
					{?>
						<tr>
							<td><?php echo $rows["id"]; ?></td>
							<td><?php echo $rows["testid"]; ?></td>
							<td><?php echo $rows["count(answers.answergiven)"]; ?></td>
						</tr>
					<?php
					 } ?>
					<?php while($rows1 = mysqli_fetch_assoc($res1) ) {
					?>

						<tr>
							<td><?php echo $rows1["id"]; ?></td>
							<td><?php echo $rows1["testid"]; ?></td>
							<td><?php echo $rows1["count(answers.answergiven)"]; ?></td>
						</tr>
						<?php 
						}?>
		</table><a href="home.php">Back</a>
		</div>
		<?php } ?>

		<?php } ; ?>
		</aside>
	</form>
	</div>
	</body>
	<!-- <?php include 'footer.html'?> -->
</html>