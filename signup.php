<?php 
require "app/config/database.php";
require "app/includes/function.php";

  if (isset($_POST["register"])) {
    if(registrasi($_POST) > 0 ) {
      echo "<script>
          alert('User baru berhasil ditambahkan');
      </script>";
    } else {
      echo mysqli_error($connect);
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BitBelajar - Sign Up</title>
  <!-- custom css -->
  <link rel="stylesheet" href="assets\css\signup.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Teko:wght@300..700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
  <div class="wrapper">
    <div class="signup-section">
      <div class="brand">
        <h2><a href="index.html">BitBelajar</a></h2>
        <p>Learn Together, Grow Together</p>
      </div>
      <div class="form-container">
        <h3>Sign Up</h3>
        <form action="" method="post">
          <input type="text" placeholder="Name" name="nama" required />
          <input type="text" placeholder="Username" name="username" required />
          <input type="email" placeholder="Email address" name="email" required />
          <input type="password" placeholder="Password" name="password" required />
          <input type="password" placeholder="Confirm Password" name="password2" required />
          <label class="terms">
            <input type="checkbox" required />
            Accept Terms and Conditions
          </label>
          <button type="submit" name="register">Register →</button>
        </form>
      </div>
    </div>
    <div class="info-section">
      <h2>Create Your Account!!!</h2>
      <img src="assets/img/signup-ilustration.png" alt="Illustration" />
      <p>Share Knowledge, Level Up Together</p>
    </div>
  </div>
</body>
</html>
