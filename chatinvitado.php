<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <meta http-equiv="refresh" content="0;url=invitado.php">
    <title></title>
  </head>
  <body>
    
    <?php
      $invitado = $_REQUEST["mensaje"];
      $file = fopen("chats.txt","a");
      
      
      fwrite($file,"<br>"."invitado :"."<br>"."<code class='code'>".$invitado."</code>"."<br>");
        fclose($file);

?>
  </body>
</html>