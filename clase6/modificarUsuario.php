<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";
$usuario = new Usuario();
$id = $_GET["id"];
$modificarUsuario = $usuario->updateUsuario($id);
$mensaje = "No se pudo modificar un usuario";
$modificarUsuario && $mensaje = "Usuario odificado con exito"
?>
<main>
    <h2><?= $mensaje ?></h2>
  
</main>
<?php
include_once "includes/footer.php";
?>