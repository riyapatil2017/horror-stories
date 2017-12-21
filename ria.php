<?php
	$conn = new mysqli("localhost","root","","riya");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
		if(isset($_POST["submit"])){
		$Name1 = $_POST["Name1"];
		$Name2 = $_POST["Name2"];
		$Email = $_POST["Email"];
		$title = $_POST["title"];
		$category = $_POST["category"];
		$story = $_POST["story"];
		$Credit = $_POST["Credit"];
		$CreditLink = $_POST["CreditLink"];
		$newsletter =$_POST["newsletter"];
		$sql = "INSERT INTO form(Name1,Name2,Email,title,category,story,Credit,CreditLink,newsletter) VALUES('$Name1','$Name2','$Email','$title','$category','$story','$credit','$CreditLink','$newsletter')";
		if($conn->query($sql))
		echo "Successfull";
	else
		echo mysqli_error($conn);
		$conn->close();
?>