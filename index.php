<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="login.css">
  <title>Login Page</title>
 
 
</head>

<body>
  <center>
    <br>
    <h1 class="headingstyle">Admin Login</h1>
  </center>
  <form id="adminform" action="dashboard.php" method="post">
    <div class="container">
      <br>
      <label>Username : </label>
      <input id="adminid" type="text" placeholder="Enter Username" name="username" required>
      <label>Password : </label>
      <input id="adminpass" type="password" placeholder="Enter Password" name="password" required>
      <input type="submit" class="button" value="Login">
    </div>
  </form>
</body>

</html>
