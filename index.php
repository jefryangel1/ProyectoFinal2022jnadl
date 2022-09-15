<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOYOTA</title>
    <link rel="stylesheet" href="diseño.css">
    <script src="login.js"></script>
</head>
<body>
<div class="container">
    <div class="main">
      <img src="images/CATi.jpg">
      <form id="form_id" method="POST" name="myform">
        <label>Usuario</label>
        <input type="text" name="usuar" id="usuar" placeholder="Ingrese Su Usuario">
        <label>Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
        <input type="button" value="Login" id="sumit" onclick="validate()">
      </form>
    </div>
    <center><h6 style="text-align: center; color:aliceblue;">No tienes cuenta? Registrate</h6>
    <h5 style="text-align: center; color: aliceblue;"><a href="registro.php" style="text-decoration: none;">Registrarse</a></h5> </center>
  </div>
    <img class="logo" src="img/logo.png">
</body>
</html>