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
		$sql = "INSERT INTO form(fname,lname,email,title,category,story,credit,creditlinks,newsletter) VALUES('$Name1','$Name2','$Email','$title','$category','$story','$Credit','$CreditLink','$newsletter')";
		if($conn->query($sql))
		echo "Successfull";
	else
		echo mysqli_error($conn);
		$conn->close();
		}
?>
<html>
<head>
<title>Submit Your Story</title>
<link rel="icon" href="icon.png" type="image/png">
<link rel="stylesheet" href="cssstyle.css".jpg" type="text/css">
<script type="text/javascript">

function validate()
{
  if (document.myForm.Name1.value == "" || document.myForm.Name2.value == "")
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
  if(document.myForm.title.value == "" )
  {
   alert ("Please provide a story title!");
   document.myForm.title.focus();
   return false;
  }
  if(document.myForm.story.value == "" )
  {
   alert("Please write your story!");
   document.myForm.story.focus();
   return false;
  }
  if(document.myForm.check.checked == false )
  {
   alert("Please agree to the Terms of Submission!");
   return false;
  }
else
  {
   return true;
  }
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
  <li><a href="#">Submit Your Story</a></li>
  <li><a href="faqs.php">FAQs</a></li>
  <li><a href="about.php">About Us</a></li>
    </div>
  </li>
</ul>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST" name=myForm>
<fieldset><legend><b><h1>Submission Form</h1></b></legend>
<b>Name</b><font color="Red"> * </font>: 
<br>
<pre><input type="text" name="Name1" style="background-color:#777; color:white">     <input type="text" name="Name2" style="background-color:#777; color:white"></pre>
<pre>       Fisrt Name                   Last Name</pre>
<br><b>E-Mail</b><font color="Red"> * </font>:  
<input type="text" name="Email" style="background-color:#777; color:white"><br><br>
<b>Story Title</b><font color="Red"> * </font>:  
<input type="text" name="title" style="background-color:#777; color:white"><br><br>
<b>Category</b><font color="Red"> * </font>:
<Select name="category" style="background-color:#777; color:white">
<Option value="Artifacts & Objects" style="color:white">Artifacts & Objects</option>
<Option value="Beings & Entities" style="color:white">Beings & Entities</option>
<Option value="Dreams & Madness" style="color:white">Dreams & Madness</option>
<Option value="Locations & Sites" style="color:white">Locations & Sites</option>
<Option value="Murders & deaths" style="color:white">Murders & Sites</option>
<Option value="Rites & Rituals" style="color:white">Rites & Rituals</option>
<Option value="Strange & Unknown" style="color:white">Strange & Unknown</option>
</Select><br><br>
<b>Enter Your Story</b><font color="Red"> * </font>: <br>
<textarea rows=15 cols=50 name="story" style="background-color:#777; color=white"> </textarea><br><br>
<b>Credit</b>  :  <br>
<input type="text" name="Credit" style="background-color:#777; color:white"><br><br>
<b>Credit Link</b>  :  <br>
<input type="text" name="CreditLink" style="background-color:#777; color:white"><br><br>
<b>Would you like to subscribe for our daily newsletter ?</b> <br>
<input type="Radio" name="newsletter" value="Yes"> Yes 
<input type="Radio" name="newsletter" value="No"> No <br><br>
<b>Click here to agree to Terms of Submission</b><font color="Red"> * </font>: 
<h5>
By submitting your story to us, you are giving us permission to post your story on this website. We do not claim any ownership or 
<br>responsibility for your story beyond that; you retain ownership of your work, you are free to do with it what you wish. Further, you 
<br>acknowledge and agree that you will not receive any compensation, monetary or otherwise, from us in exchange for posting your 
<br>story. You are not entitled to any profits that we may receive from advertising or donations. If, at any time, you wish for us to remove or 
<br>edit your published submission, you must let us know by replying to your submission email with your request - any other ways will be 
<br>ignored. Lastly, by submitting you are acknowledging that the work you have entered here is your own and not plagiarized or borrowed.
</h5><br>
<input type="Checkbox" name="check" value="I agree" checked> I agree
<br>
<br>
<input type="Submit" value="submit" name = "submit" onclick="return validate();"> <input type="Reset" value="Cancel">	
</fieldset>
</body>
</form>
</html>
