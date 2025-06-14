<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BitBelajar Login</title>
    <link rel="stylesheet" href="assets/css/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="left-panel">
        <h1 class="logo">BitBelajar</h1>
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
          <form>
            <label>Username/Email</label>
            <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <label>Password</label>
            <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <button type="submit" class="btn">Sign In</button>
            <p class="signup">
              Don't have an account? <a href="1.php">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
