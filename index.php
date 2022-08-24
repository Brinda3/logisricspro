<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logistics</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <!-- Yea Boi -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img src="./src/Logistics_BG.jpeg" />
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="verifylogin.php">
        <div class="txt_field">
          <input type="text" required  name="id"/>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password"/>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <div class="login_btn">
        <input type="submit" value="login" >
        </div>
        <!-- <div class="login_btn">
          //Apple is mine
          <a href="index2.html">Login<input type="submit" value="Login" /></a>
        </div> -->

        <div class="signup_link">
          Not a member? <a href="signup.html">Signup</a>
        </div>
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
