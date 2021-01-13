<?php
/*

  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
____________________________________
/ Si necesitas ayuda, contáctame en \
\ https://parzibyte.me               /
 ------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
Creado por Parzibyte (https://parzibyte.me).
------------------------------------------------------------------------------------------------
Si el código es útil para ti, puedes agradecerme siguiéndome: https://parzibyte.me/blog/sigueme/
Y compartiendo mi blog con tus amigos
También tengo canal de YouTube: https://www.youtube.com/channel/UCroP4BTWjfM0CkGB6AFUoBg?sub_confirmation=1
------------------------------------------------------------------------------------------------
*/ ?>
<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Tienda</h2>
    </div>
</div>
<?php foreach ($productos as $producto) { ?>

    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $producto->nombre ?>
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php echo $producto->descripcion ?>
                    </div>
                    <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
                    <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                        <form action="eliminar_del_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                        </form>
                    <?php } else { ?>
                        <form action="agregar_al_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                            </button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php include_once "pie.php" ?>