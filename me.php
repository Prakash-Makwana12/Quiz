<?php
session_start();
$id = $_SESSION['userid'] ;
$quizType = $_SESSION['quizType'];
$timeStamp = $_SESSION['time'];
require('db.php');
if(!isset($_SESSION['dbloaded']))
{		
	if($quizType == 01)
	{
		$query = "SELECT * FROM `question` ";
		$_SESSION['subject'] = "JAVA";	
	}
	else if($quizType == 02)
	{
		$query = "SELECT * FROM `quiz2` ";
		$_SESSION['subject'] = "PHP";
		
	}
	else
	{
		$query = "SELECT * FROM `question` ";
	}	
	$res = mysqli_query($conn, $query);		
	$row = mysqli_num_rows($res);
	
	while($rows = mysqli_fetch_assoc($res))
	{
			$questionIDArr[] = $rows["questionid"];
			$questionArr[] = $rows["name"];
			$choice1Arr[] = $rows["choice1"];
			$choice2Arr[] = $rows["choice2"];
			$choice3Arr[] = $rows["choice3"];
			$choice4Arr[] = $rows["choice4"];
	} 
	
	$last_index = $row - 1;
	$index = 0;
	$_SESSION['index']  = 0;
	$_SESSION['query'] = $query;
	$_SESSION['dbloaded'] = TRUE;	
}
else
{
	if($quizType == 01)
	{
		$query = "SELECT * FROM `question` ";
		$_SESSION['subject'] = "JAVA";		
	}
	else if($quizType == 02)
	{
		$query = "SELECT * FROM `quiz2` ";
		$_SESSION['subject'] = "PHP";
	}
	else
	{
		$query = "SELECT * FROM `question` ";
	}
	$res = mysqli_query($conn, $query);		
	$row = mysqli_num_rows($res);
	$last_index = $row - 1;
	$index =$_SESSION['index'] ;
	while($rows = mysqli_fetch_assoc($res))
	{
			$questionIDArr[] = $rows["questionid"];
			$questionArr[] = $rows["name"];
			$choice1Arr[] = $rows["choice1"];
			$choice2Arr[] = $rows["choice2"];
			$choice3Arr[] = $rows["choice3"];
			$choice4Arr[] = $rows["choice4"];
	} 
	if(!isset($_GET['action_id']))
	// if ($action_id == NULL || $action_id == FALSE ||  $action_id == '')
	 {
	    $action_id = 'None';
	}
	// if(!isset($_GET['action_id']))
	// {
		// $action_id = 'None';
	// }
	else 
	{	
		$action_id = $_GET['action_id'];
		if ($action_id == 'Next') 
		{
			if ($index <= 9) 
		 	{
		 		$queid = $questionIDArr[$index];
		 		$ans = filter_input(INPUT_GET, 'option');
				if($ans == null)
				{
		 			$ans = 105;
		 		}
				$sql = "INSERT INTO answers (userid, questionid, answergiven,testid) VALUES ($id, $queid, $ans,'$timeStamp')";
				mysqli_query($conn, $sql);
				$index++;
			 }
		if($index > 9)
		{	
			header("Location: result.php");
		
		}
	} 

	$_SESSION['index'] = $index;
	}
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<?php include 'header.html'; ?>
<body>
	
	<main>
	<form action='me.php' method="get">
		<fieldset>
		<legend><?php echo " Question : ". $index?></legend>
		<?php echo $questionArr[$index]; ?><br><br>
	
		<input type="radio" name="option" value="101"/>      <?php echo $choice1Arr[$index];?><br>
		<input type="radio" name="option" value="102"/>      <?php echo $choice2Arr[$index];?><br>
		<input type="radio" name="option" value="103"/>      <?php echo $choice3Arr[$index];?><br>
		<input type="radio" name="option" value="104"/>      <?php echo $choice4Arr[$index];?><br><br><br><br>

		<!-- <input type='submit' value='Submit' name='action_id'> -->
		<!-- <input type='submit' value='Prev' name='action_id'> -->
		<input type='submit' value='Next' name='action_id'>
		</fieldset>	
	</form>
	</main>
</body>
</html>

