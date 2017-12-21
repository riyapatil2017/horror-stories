<?php
$conn = new mysqli("localhost","root","","riya");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
		if(isset($_POST["submit"])){
		$Name = $_POST["Name"];
		$radio = $_POST["radio"];
		$Email = $_POST["Email"];
		$p1 = $_POST["PW1"];
		$p2 = $_POST["PW2"];
		if($p1 == $p2){
		$sql = "INSERT INTO user(name,gender,email,pass) VALUES('$Name','$radio','$Email','$p1')";
		if($conn->query($sql))
		echo "Successfull";
	else
		echo mysqli_error($conn);
		}
		else
			echo "<script type='text/javascript'>alert(\"Passwords dont match\");</script>";
		}
?>
<html>
<head>
<title>Signup</title>
<link rel="icon" href="icon.png" type="image/png">
<link rel="stylesheet" href="cssstyle.css".jpg" type="text/css">
<script type="text/javascript">

function validate()
{
  if (document.myForm.Name.value == "" )
  {
   alert ("Please provide your name!");
   document.myForm.Name.focus();
   return false;
  }
  if (document.myForm.Email.value == "" )
  {
   alert ("Please provide your Email!");
   document.myForm.Email.focus();
   return false;
  }
  if (document.myForm.PW1.value != document.myForm.PW2.value) 
  {
   alert ("Passwords Do not match");
   document.getElementById("PW1").style.borderColor = "#E34234";
   document.getElementById("PW2").style.borderColor = "#E34234";
   document.myForm.PW1.focus();
   return false;
  }
  if(document.myForm.radio.checked == false )
  {
   alert("Please select your gender!");
   return false;
  }
return true;
}
</script>
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
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method = "POST" name=myForm onsubmit="return(validate());">
<fieldset><legend><b><h1>Sign Up</h1></b></legend>
<b>Name</b><font color="Red"> * </font>:
<input type="text" name="Name" style="background-color:#555; color:white"><br><br>
<b>Gender</b><font color="Red"> * </font>:
<input type="Radio" name="radio" value="Male"> Male
<input type="Radio" name="radio" value="Female"> Female
<input type="Radio" name="radio" value="Other"> Other <br><br>
<b>E-Mail</b><font color="Red"> * </font>:
<input type="text" name="Email" style="background-color:#555; color:white"><br><br>
<b>Create Password</b><font color="Red"> * </font>:
<input type="password" name="PW1" style="background-color:#555; color:white"><br><br>
<b>Re-Enter Password</b><font color="Red"> * </font>:
<input type="password" name="PW2" style="background-color:#555; color:white"><br><br>
<input type="Submit" value="Submit" name="submit">	<input type="Reset" value="Cancel">	
</fieldset>
</body>
</form>
</html>
