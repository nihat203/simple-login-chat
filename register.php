<?php include('server.php') ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Register</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="header">
         <h2>Register</h2>
      </div>
      <form method="post" action="register.php">
         <?php echo $errors ?>
         <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
         </div>
         <div class="input-group">
            <label>Password</label>
            <input type="password" name="pass1">
         </div>
         <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="pass2">
         </div>
         <div class="input-group">
            <button type="submit" class="btn" name="reg">Register</button>
         </div>
         <p>
            <a href="login.php">Login</a>
         </p>
      </form>
   </body>
</html>