<?php

session_start();
require('db.php');
$quizType = $_SESSION['quizType'];
$timeStamp = $_SESSION['time'];
$subject = $_SESSION['subject'] ;
$numOfAttempt = $_SESSION['numOfAttempt'] ;


$id = $_SESSION['userid'] ;
if($quizType == 01)
{
	$quizTable = "question";
}
else if($quizType == 02)
{
	$quizTable = "quiz2";
}
$query =  "select user.id, count(answers.answergiven) from user , $quizTable , answers 
where user.id = '$id' and  answers.userid = '$id' and $quizTable.questionid = answers.questionid
and $quizTable.answer = answers.answergiven and answers.testid = '$timeStamp' group by user.id";
$res = mysqli_query($conn, $query);		
$row = mysqli_num_rows($res);
if($row>0)
{
	while($rows = mysqli_fetch_assoc($res)) 
	{
    	$uid = $rows["id"];
		$correctAns = $rows["count(answers.answergiven)"];
	}
			
}
else
{
	$correctAns = 0;
}

?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Result</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
	
	<main>
		<form action='' method="get">
			
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Result</p>
<p>Test Score : <?php echo $correctAns; ?>/10.</p><br />
<p><?php if($correctAns >= 8){?>
	<p> You have successfully passed the test. You are now certified in <?php echo $subject ; ?></p><br />

	<p>Number of Attempt to pass the test is <?php echo $numOfAttempt;?> </p>
	
<?php } else{
	printf("Unfortunately you did not pass the test. Please try again later! ");
	$numOfAttempt++;
	$_SESSION['numOfAttempt'] = $numOfAttempt;
} ?>
<p></p><br />
<a href="home.php">Try Again</a><br />
<a href="logout.php">Logout</a><br />
</div>
			
		</form>
	</main>
</body>
</html>

