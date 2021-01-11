<?php include_once "encabezado.php" ?>
<?php include_once "funciones.php";
$bd = obtenerConexion();
$sentencia = $bd->query("SELECT id, nombre, precio FROM productos");
$productos = $sentencia->fetchAll();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Productos existentes</h2>
        <a class="button is-success" href="agregar_producto.php">Nuevo&nbsp;<i class="fa fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Agregar al carrito</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto->nombre ?></td>
                        <td>$<?php echo number_format($producto->precio, 2) ?></td>
                        <td>
                            <form action="agregar_al_carrito.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="button is-primary">
                                    <i class="fa fa-cart-plus"></i>
                                </button>
                            </form>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>