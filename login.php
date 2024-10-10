<html>
<head>
<title> praveen</title>
<link rel="stylesheet" href="style01.css"> 
</head>
<body >
<div class="banner" >
	<div class="navbar">
	<img src="logo.png" class="logo">
	<ul>
		<li><a href="http://localhost/project/help.php">help </a></li>	
		<li><a href="http://localhost/project/index.php" class="reg"> registration </a></li>	
	</ul>
	</div>
	 <div class="container">
    <h2>Login</h2>
    <form action="loginco.php" method="POST">
      <label for="email" required>email:</label>
      <input type="text" id="email" name="email" required>
      
      <label for="password" required>Password:</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Login" name="login"><br>
<br>
     
 <label>
      to create an account click here
      <button style=" color: blue; "><a href="http://localhost/project/index.php" class="reg"> registration </a></button></h2>
   </label> 
   </form>
  </div>
</div>


</body>
</html>