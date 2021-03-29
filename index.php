<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <title>MI SECURE CHAT - ORCHID APPS</title>
    <link rel="stylesheet" href="estilo1.css" type="text/css" media="all" />
  </head>

  <body>
      <div class="titulo">

    <p> vienvenido a mi secure chat</p>
  </div>
  <div class="pregunta">
    <p>hola quien eres?</p>
  </div>
  <div class="usuarios">
 
 
    
    <div class="huesped">
      <p>soy el huésped</p>
      
      <form action="huesped.php" method="post" accept-charset="utf-8">
        <input type="submit" name="huesped" id="huesped" value="entrar" />
      </form>
      <br>
      <p>deseas cambiar<br> tu nombre de <br>usuario</p>
    </div>
    
    
    
    
    <div class="invitado">
      <p>soy el invitado</p>
      <form action="invitado.php" method="post" accept-charset="utf-8">
        <input type="submit" name="invitado" id="invitado" value="entrar" />
      </form>
    </div>
  </div>
  </body>
</html>