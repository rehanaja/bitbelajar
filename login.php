<?php 
require "app/config/database.php";
require "app/includes/function.php";

if(isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1 ) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      header("Location: dashboard.php");
      exit;
    }
  }

  $error = true;
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BitBelajar - Login</title>

    <!-- login style css  -->
    <link rel="stylesheet" href="assets/css/login.css" />

    <!-- icon font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!-- font -->
     <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Teko:wght@300..700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="left-panel">
        <h1 class="logo"><a href="index.html">BitBelajar</a></h1>
        <p class="tagline">Learn Together, Grow Together</p>
        <img
          src="assets/img/login-ilustration.png"
          alt="Learning Illustration"
          class="illustration"
        />
      </div>
      <div class="right-panel">
        <div class="login-box">
          <h2>Login</h2>
          <form action="" method="post">
            <label for="username">Username/Email</label>
            <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" id="username" required />
            </div>

            <?php if(isset($error)) : ?>
               <p style="color: red; font-style: italic;">Username/Password salah</p>
              <?php endif; ?>

            <label for="password">Password</label>
            <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" required />
            </div>
            <button type="submit" name="login" class="btn">Login</button>
            <p class="signup">
              Don't have an account? <a href="signup.php">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
