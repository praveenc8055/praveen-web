
<html>
<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="style01.css">
</head>
<body >
<div  class="reg">
  <div class="navbar">
	<img src="logo.png" class="logo">
	<ul>
		<li><a href="http://localhost/project/service.php">service</a></li>
		<li><a href="http://localhost/project/help.php">help </a></li>
    <li><a href="http://localhost/project/login.php" >login </a></li>
	</ul>
	</div>
  <div class="container" >
    <h2>Registration Form</h2>
  
    <form class="" action="config.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>

      <label for="userid">userid</label>
      <input type="text" id="userid" name="userid"><br><br>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email"><br><br>

      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob"><br><br>
    
      <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
    
      <label for="cpassword">Confirm Password:</label>
      <input type="password" id="cpassword" name="cpassword"><br><br>
    
      <label for="number">phn number</label>
      <input type="text" id="number" name="number"><br><br>
    
      <label for="role">job role</label>
      <input type="text" id="role" name="role"><br><br>
    
      <label class="check">
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <p>Agree to terms and conditions</p><br>
      <input type="submit" value="register" name="register">
      <br>
      <br> 
    </form>
  </div>
</div>

</body>
</html>
