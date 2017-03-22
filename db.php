<?php
 $username = 'mgs_user';
 $password = 'pa55word';
 $conn = mysqli_connect('localhost', $username, $password, 'quizDB');
	if (!$conn)
	{
    	die("Database Connection Failed" . mysqli_connect_error());
	}

?>