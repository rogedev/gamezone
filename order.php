<?php
require_once('crud/product.php');
$product = new Product();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--metadata-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="RogelioRivas">
    <meta name="keywords"
        content="vieojuegos,teclados, pc, gaming, audifonos, mouse, ratones, juegos,gamerzone, gamer zone, gamer, zone, tienda">
    <meta name="description"
        content="Tienda de videojuegos 100% Mexicana dedicada a ofrecer la mayor calidad en gaming al menor precio . En Gamer Zone tenemos los mejores productos y regalos para ti. Compra fácil, rápido y seguro">
    <meta name=”robots” content=”index, follow”>

    <!--icon-->
    <link rel="icon" type="image/vnd.microsoft.icon" href="media/img/favicon.png">

    <!-- bootstrap4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--styles-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/fixed.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans" rel="stylesheet">

    <title>Your order</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand mx-auto" href="index.html">GameZone</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html#inicio">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html#about">Nosotros</a>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true">Productos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="market_pcgaming.html">PC Gaming</a>
                        <a class="dropdown-item" href="market_consoles.html">Consolas</a>
                        <a class="dropdown-item" href="market_accesories.html">Accesorios</a>
                    </div>
                </li>

            </ul>
        </div>
        <a class="carrito" href="order.html" target="_blank">
            <svg width="4em" height="2em" viewBox="0 0 16 16" class="bi bi-bag" fill="white"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
            </svg>
        </a>
    </nav>
    <main id="order">
        <div class="jumbotron">
            <div class="container-fluid">
                <img class="imgorder" src="media/img/favicon.png" alt="Game zone">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Tu carrito</span>
                        <span class="badge badge-secondary badge-pill">1</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $product->getName() ?></h6>
                                <small class="text-muted"><?php echo $product->getQuantity() ?></small>
                            </div>
                            <span class="text-muted"><?php echo $product->getTotalPrice() ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$12</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <form action="crud/control.php" method="post" class="needs-validation" novalidate>
                        <h3 class="mb-3">Tus datos</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nombre</label>
                                <input type="text" name="firstName" class="form-control" id="firstName" placeholder=""
                                    value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Apellido</label>
                                <input type="text" name="lastName" class="form-control" id="lastName" placeholder=""
                                    value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Direccion</label>
                            <input type="text" name="address" class="form-control" id="address"
                                placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="pagar">Pagar</button>
                    </form>
                    <!--end of the form-->
                </div>
            </div>
        </div>
    </main>


    <hr class="featurette-divider">
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 GameZone, Inc. &middot; <a href="#"
                target="_blank">Instagram</a> &middot; <a href="#"
                target="_blank">Twitter</a>&middot;</p>
    </footer>
    <script src="js/form-validation.js"></script>
</body>

</html>