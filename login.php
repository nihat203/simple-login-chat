<?php include('server.php')?>
<!DOCTYPE html>
<html>
   <head>
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="header">
         <h2>Login</h2>
      </div>
      <form method="post" action="login.php">
         <?php echo $errors ?>
         <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" >
         </div>
         <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
         </div>
         <div class="input-group">
            <button type="submit" class="btn" name="login">Login</button>
         </div>
         <p><a href="register.php">Register</a>
         </p>
      </form>
   </body>
</html>
