<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/login_admin.css" />
    <title> Admin: Log In</title>
</head>
<body>
<div class="go-back">
  <a href="index.php" >Go back</a>
  </div>
  <div class="desktop">
    <div class="overlap-group-wrapper">
      <div class="overlap-group">
        <form method = "POST"> 
          <div class="text-wrapper">ADMIN LOGIN</div>
            <div class="overlap">
              <label>Username</label><br>
              <input type = "text" name = "admin-username" id = "admin-username">
            </div>
            <div class="overlap-2">
              <label>Password</label>
              <input type = "text" name = "admin-password" id = "admin-password">
            </div>
                <input type = "submit" name = "submit" id = "submit" value = "LOG IN">
          </form>
          <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['admin-username'];
  $password = $_POST['admin-password'];

  if (empty($username) && empty($password)) {
    echo '<div class="error-message">Error: Both username and password are empty.</div>';
  } else if (empty($username)) {
    echo '<div class="error-message">Error: Username is empty.</div>';
  } else if (empty($password)) {
    echo '<div class "error-message">Error: Password is empty.</div>';
  } else if ($username == "admin" && $password == "admin") {
    header("Location: dashboard.php");
  } else if ($username != "admin") {
    echo '<div class="error-message">Error: Incorrect username.</div>';
  } else {
    echo '<div class="error-message">Error: Incorrect password .</div>';
  }
}
?>




      </div>
    </div>
  </div>
</body>
</html>