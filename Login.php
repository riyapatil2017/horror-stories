<?php
$name="";
$pass="";
$conn = new mysqli("localhost","root","","riya");
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	if(isset($_POST["submit"])){
		$name = $_POST["name"];
		$pass = $_POST["pass"];
	$sql = "SELECT * FROM user WHERE name = '$name' AND pass = '$pass'";
	$result = $conn->query($sql);
	if($row = mysqli_fetch_assoc($result)) 
		echo "<script type='text/javascript'>alert(\"Login Successfull\");</script>";
	else
		echo "<script type='text/javascript'>alert(\"Invalid Details\");</script>";
	}
?>
<html>
<head>
<style>
.modal {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 100px;
}

.modal-content {
    background-color: #555;
    color:white;
    margin: 5px auto; /* 15% from the top and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

.close {
    /* Position it in the top right corner outside of the modal */
    position: absolute;
    right: 25px;
    top: 0; 
    color: #f1f1f1;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
input{
      background-color:#777;
      color:white;
     }

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
span {
    color:black;
     }
</style>
</head>
<body>
<center>
<div id="id01" class="modal">
  <a href="Homepage.php"><span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close">&times;</span></a>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" class="modal-content animate">
    <br><br>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>
      <br><br>
      <label><b>Password</b></label>
      <input type="password" name="pass" required>
      <br><br>
      <button type="submit" name = "submit">Login</button><br>
      <input type="checkbox" checked="checked"> Remember me
    </div>
    <br><br>
    <div class="container" style="background-color:#aaa">
      <a href="Login.php"><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></a>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div></center>
  </form>
</div>
</body>
</html>