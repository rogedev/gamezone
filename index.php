<!DOCTYPE html>
<html lang="ES">

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
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<title> Gamer Zone | Home </title>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class="navbar-brand mx-auto" href="index.php">GameZone</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php#inicio">Inicio</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="index.php#about">Nosotros</a>
				</li>

				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true">Productos</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="market_pcgaming.php">PC Gaming</a>
						<a class="dropdown-item" href="market_consoles.php">Consolas</a>
						<a class="dropdown-item" href="market_accesories.php">Accesorios</a>
					</div>
				</li>

			</ul>
		</div>
		<a class="carrito" href="order.php" target="_blank">
			<svg width="4em" height="2em" viewBox="0 0 16 16" class="bi bi-bag" fill="white"
				xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd"
					d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
			</svg>
		</a>
	</nav>

	<div id="inicio" class="video-background">
		<div class="video-wrap">
			<div id="videobg">
				<video id="bg" autoplay loop muted playsinline>
					<source src="media/video/videobg.mp4" alt="Video de videojuegos">
				</video>
			</div>
		</div>
	</div>

	<div class="caption text-center bg-transparent">
		<h1>Bienvenido Gamer</h1>
		<h3>Encuentra los mejores productos para gaming de todo el mercado al mejor precio.
		</h3>
		<br>
		<a class="btn btn-outline-light btn-lg" href="#bannersection">Ver mas</a>
	</div>


	<section id="bannersection" class="about container-fluid">
		<hr class="featurette-divider">
		<div class="container-fluid" id="about">
			<div class="row">
				<div class="col-lg">
					<h1>¿Quienes somos?</h1>
					<p class="lead">
						Nosotros somos Gamer Zone, una empresa dedicada a la venta de consolas, videojuegos y PC Gamers,
						recién comenzamos en la industria y queremos innovarla, así como también mejorar la experiencia
						de
						nuestros clientes al comprar en nuestra tienda haciéndola más amena y divertida en una manera
						única.
						Nuestro objetivo es ser una empresa reconocida a nivel nacional para poder llegar a cualquier
						rincón
						del país sin ningún problema, buscamos mejorar el mercado con nuestros productos y brindar el
						mejor
						servicio a nuestros clientes en la comodidad de sus hogares y utilizando solo su Smartphone, a
						un
						clic de distancia.</p>
				</div>
			</div>
		</div>
		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading"> Contamos con las mejores <a href="market_pcgaming.php"
						target="_blank">PC Gaming</a> del mercado actual a los mejores precios </p>
				</h2>
				<p class="lead">Nuestras PC Gamer de catálogo son ensambles que hemos diseñado para cubrir diferentes
					necesidades y presupuestos. Puedes elegir de entre nuestra variedad de computadoras con una
					configuración hecha para gamers por gamers. Contamos con los mejores setups y los mejores
					componentes en cada una de nuestras computadoras, cada una pensada en ofrecer un alto rendimiento en
					gaming</p>

			</div>
			<div class="banner col-md-5">
				<img src="media/img/bannerpc.jpg" alt="PC Gaming" class="imgbanner img-fluid">
				<a class="btn btn-outline-light btn-lg" href="market_pcgaming.php" target="_blank">Ir a la tienda</a>
			</div>
		</div>
		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7 order-md-2">
				<h2 class="featurette-heading">Conoce la nueva generación de <a href="market_consoles.php"
						target="_blank">consolas de videojuegos</a> </h2>
				<p class="lead">¡Es el mejor momento para ser gamer!, no sólo porque la tecnología nos permite vivir
					cada uno de nuestros juegos favoritos de manera más inmersiva, también porque tenemos la oportunidad
					de revivir clásicos de la infancia de una forma que, en ese entonces, ¡resultaba inimaginable!
					Conoce ya un poco más sobre la nueva generación de consolas que traeremos para a finales de 2020
					para
					que vayas preparando tu setup. </p>
			</div>
			<div class="banner col-md-5 order-md-1">
				<img src="media/img/bannerconsolas.jpg" alt="consolas" class="imgbanner img-fluid">
				<a class="btn btn-outline-light btn-lg" href="market_consoles.php" target="_blank">Ir a la tienda</a>
			</div>
		</div>

		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Contamos con una seleccion de los mejores <a
						href="market_accesories.php">accesorios para gaming </a> del mercado</h2>
				<p class="lead">Encuentra variedad y calidad en nuestra seleccion de los mejores accesorios para gaming
					que ofrece la indusytria de gadgets de primer nivel, contamos con los mejores teclados mecanicos
					personalizables, tambien tenemos una seleccion de headsets de calidad y ratones gaming como los que
					usam los profesionales de primer nivel </p>
			</div>
			<div class="banner col-md-5">
				<img src="media/img/banneraccesories.jpeg" alt="accesorios" class="imgbanner img-fluid">
				<a class="btn btn-outline-light btn-lg" href="market_accesories.php target=" _blank">Ir a la tienda</a>
			</div>
		</div>
	</section>
	<hr class="featurette-divider">
	<footer class="container">
		<p class="float-right"><a href="#">Back to top</a></p>
		<p>&copy; 2020 GameZone, Inc. &middot; <a href="https://www.instagram.com/roge.dev/?hl=es-la"
				target="_blank">Instagram</a> &middot; <a href="https://twitter.com/rogedev"
				target="_blank">Twitter</a>&middot;</p>
	</footer>

	<!--scripts-->
</body>

</html>