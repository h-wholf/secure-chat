<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
     <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <title>MUY SECURE CHAT V1</title>
  </head>
  <link rel="stylesheet" href="estilo1.css" type="text/css" media="all" />
  <body>
    
    <div class="titulo">
     <p>secure chat  --- orchid apps</p>
    </div>
    <div class="">
      <p>entraste como el huésped</p>
    </div>
    <div class="escribir">
      
      <p class="escribir">escribir mensaje</p>
      
      <form action="chatshuesped.php" method="post" accept-charset="utf-8">
       <input type="text" name="mensaje" id="method" value="" placeholder="escribe tu mensaje"/> 
       <input type="submit" name="sumbit" id="enviar" value="enviar mensaje" />
      </form>
      
    </div>
        <div class="contenido" id='ocultar-y-mostrar'>
      <p> <?php
$ar = fopen("chats.txt","r") or die("INGRESA UNA NOTA PARA MOTRAR EL CONTENIDO");
while (!feof($ar)){
 $linea = fgets($ar);
 $lineasalto = nl2br($linea);
 echo $lineasalto;
}
fclose($ar);
?>
      </p>
    </div>
     <div class="eliminar">
      <form class="" action='elimina.php'method="post" accept-charset="utf-8">
        
        <input class="eliminar1" id="boton1" type="submit" name="eli" value="eliminar notas">

      </form>
  </body>
</html>