<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '','webproject');

	// initialize variables
	$Name = "";
	$Email = "";
  $Course = "";
  $Campus = "";
  $Password = "";
	$StudentID = 0;
	$update = false;

	if (isset($_POST['Register']))
  {
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
    $Course= $_POST['Course'];
    $Campus = $_POST['Campus'];
    $Password = $_POST['Password'];
    $query = "INSERT INTO student (Name, Email, Course, Campus, Password) VALUES ('$Name', '$Email','$Course','$Campus','$Password')";
		mysqli_query($db, $query);
		$_SESSION['message'] = "Student Registered";
		header('location: register_student.php');
	}
?>
