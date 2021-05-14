<?php 
  function enc($input, $key)
  {
    $s="";
    $a=str_split($input);
    foreach($a as $ch)
    {
        if(!ctype_alpha($ch))
          $s.=$ch;
        else
        {
          if(ctype_upper($ch))
            $c=65;
          else
            $c=97;
          $s.=chr(fmod(((ord($ch) + $key) - $c), 26) + $c);
        }
    }
    return $s;
  }
  $error="";
  if(!isset($_SESSION)) 
    session_start();
  if (!isset($_SESSION['username']))
    header('location: login.php');
  if (isset($_GET['logout']))
  {
    session_destroy();
    unset($_SESSION['username']);
  	header("location: login.php");
  }
  if(isset($_POST['textdata']))
  {
    if(empty($_POST['textdata']))
      $error="Please, enter something.<br>";
    else
    {
      $data="<br>";
      $data.=$_SESSION['username'];
      $data.=": ";
      $data.=enc($_POST['textdata'],3);
      $data.="\n";
      $fp = fopen('data.txt', 'a');
      fwrite($fp, $data);
      fclose($fp);
    }
  }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
        user: 
        <?php echo $_SESSION['username']; ?>
        <br>
        <a href="index.php?logout=1">logout</a>

        <?php echo $error ?>
        <br>
        <iframe src='chat.php' style="display:block; border:none; height:100%; width:100%;"></iframe>
        <br>
        <form method="post">
        <input type="text" name="textdata">
        <br>
        <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>