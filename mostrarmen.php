<?php
 include("bd.php");
 $usuarios = "SELECT * FROM usuarios";
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="tabla.css">
  <link rel="stylesheet" href="incolor.css">
  <link rel="stylesheet" href="butones.css">
  
  <title>Mensajes</title>
</head>
<body>
   <table width="100%">
<tr>
  <td colspan="4">
    <section class="a">
      <form action="productos.php" method="post">
        <input type="submit" value="Productos">
      </form>
    </section>
  </td>
  <td colspan="4">
    <section class="b">
      <form action="Tiendas.php" method="post">
        <input type="submit" value="Tiendas">
      </form>
    </section>
  </td>
  <td colspan="4">
    <section class="c">
      <form action="Contactenos.php" method="post">
        <input type="submit" value="Contactenos">
      </form>
    </section>
  </td>
  </td>
</tr>
</table>
  
    <br><br><br><br>
    <div class="container-table">
    <div class="table__title">Mensajes Usuarios</div>
    <div class="table__header">Nombre</div>
    <div class="table__header">Telefono</div>
    <div class="table__header">Correo</div>
    <div class="table__header">Mensaje</div>
     <div class="table__header">Eliminar</div>
    <?php $resultado = mysqli_query($conectar, $usuarios);
    while($row=mysqli_fetch_assoc($resultado)) { ?>
    <div class="table__item"><?php echo $row["nombre"];?></div>
    <div class="table__item"><?php echo $row["numero"];?></div>
    <div class="table__item"><?php echo $row["correo"];?></div>
    <div class="table__item"><?php echo $row["mensaje"];?></div>
   <div class="table__item"><a align="center" href="eliminate.php?id=<?php echo $row['ID']?>"><img src="img/borrar.jpg" width="20%"></a> </div>
   
    <?php } ?>
  </div>
  <a href="fpd.php"><button id="pdf"><img src="img/pdf.png" width="100px"></button></a>
  

</body>
</html>