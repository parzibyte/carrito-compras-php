<?php
if(!isset($_POST["nombre"]) || !isset($_POST["precio"])){
    exit("Faltan datos");
}
include_once "funciones.php";
guardarProducto($_POST["nombre"], $_POST["precio"]);
header("Location: productos.php");