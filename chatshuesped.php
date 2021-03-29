<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <meta http-equiv="refresh" content="0;url=huesped.php">
    <title></title>
  </head>
  <body>
    
    <?php
      $huesped = $_REQUEST["mensaje"];
      $file = fopen("chats.txt","a");
      
      
      fwrite($file,"<br>"."huesped :"."<br>"."<code class='code'>".$huesped."</code>"."<br>");
        fclose($file);

?>
  </body>
</html>