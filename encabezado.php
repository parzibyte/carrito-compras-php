<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla inicial de Bulma CSS - By Parzibyte</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://parzibyte.me/blog">
                <img alt="" src="https://raw.githubusercontent.com/parzibyte/ejemplo-mern/master/src/img/parzibyte_logo.png" style="max-height: 80px" />
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="productos.php">Productos</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a target="_blank" rel="noreferrer" href="ver_carrito.php" class="button is-success">
                            <strong>Ver carrito&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a target="_blank" rel="noreferrer" href="https://parzibyte.me/l/fW8zGd" class="button is-primary">
                            <strong>Soporte y ayuda</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">