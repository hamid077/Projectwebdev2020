<?php 

include 'config.php';
session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: welcome.php");
  } else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
  }
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="loginpage.css">
  
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jura:wght@300&family=Poiret+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Login Form Sinfo</title>
</head>
<body>

  <div class="container">
    <form action="" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
      <p class="login-register-text"> Go back to home? <a href="homepage.php">HOMEPAGE</a></p>
    </form>
  </div>
</body>
</html>