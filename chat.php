<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="1">
</head>
<body>
 <?php 
	function dec($input, $key)
  {
    $key=26-$key;
    $s="";
    $k=0;
    $c='';
    $a=str_split($input);
    foreach($a as $ch)
    {
      if($k==1)
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
      if($k==0)
        $s.=$ch;
      if($ch==':')
        $k=1;
    }
    return $s;
  }
    $f = file("data.txt");
    for ($i = max(0, count($f)-6); $i < count($f); $i++)
        echo dec($f[$i],3);
?>
</body>
</html>
