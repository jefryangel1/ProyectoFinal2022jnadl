<?php
include ("bd.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE ID = $id ";
    $resul = mysqli_query($conectar, $query);
    if(!$resul){
        die ("No se pudo eliminar");
    }
    header("location:mostrarmen.php");
}
?>