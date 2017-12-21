<?php
$conn = new mysqli("localhost","root","","riya");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 	
?>
<html>
<head>
<title>AfterDark Stories|Story</title>
<link rel="icon" href="icon.png" type="image/png">
<link rel="stylesheet" href="cssstyle.css".jpg" type="text/css">
</head>
<body>
<center><img src="titlewt.png"></center>
<ul>
  <li><a href="Homepage.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    <div class="dropdown-content">
      <a href="Login.php">Login</a>
      <a href="Signup.php">Sign Up</a>
  <li><a href="Substory.php">Submit Your Story</a></li>
  <li><a href="faqs.php">FAQs</a></li>
  <li><a href="about.php">About Us</a></li>
    </div>
  </li>
</ul>
<h2 style="color:white; font-family:Arial">Featured Stories:</h2>
<?php
$sql = "SELECT * FROM form";
		$result = $conn->query($sql);
		while($row = mysqli_fetch_assoc($result)){
        $fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$title = $row['title'];
		$category = $row['category'];
		$story = $row['story'];
		$credit = $row['credit'];
		$creditlinks = $row['creditlinks'];	
		$newsletter = $row['newsletter'];
echo '<fieldset style="padding: 2em; border:5px solid green">';
    echo "<font size=6px>Title : $title</font> <br>";
	echo "BY &nbsp;&nbsp;<u>$fname  </u>";
	echo " <u>$lname </u><br>";
	echo "Category : $category <br>";
	echo "Story : $story <br>";
echo '</fieldset>';
}
?>
</body>
</html>