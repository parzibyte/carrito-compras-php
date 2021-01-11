<?php include_once "encabezado.php" ?>
<div class="columns">
    <div class="column is-one-third">
        <h2 class="is-size-2">Nuevo producto</h2>
        <form action="guardar_producto.php" method="post">
            <div class="field">
                <label for="nombre">Nombre</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre">
                </div>
            </div>
            <div class="field">
                <label for="precio">Precio</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio">
                </div>
            </div>
            <div class="field">
                <div class="control">
                <button class="button is-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>