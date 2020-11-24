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


	<!-- bootstrap4-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!--styles&scripts-->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/fixed.css">


	<!--icon-->
	<link rel="icon" type="image/vnd.microsoft.icon" href="media/img/favicon.png">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<title> Market | PC </title>
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
					<source src="media/video/videobgpcgaming.mp4" alt="Video de videojuegos">
				</video>
			</div>
		</div>
	</div>
	<div class="caption text-center bg-transparent">
		<h1>Las Mejores PC gamig del mercado</h1>
		<h3>Nuestras PC contienen los mejores componentes para un mayor rendimiento
		</h3>
		<br>
		<a class="btn btn-outline-light btn-lg" href="#pcgaming">Ver mas</a>
	</div>

	<main id="pcgaming">
		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">PC Gamer Delios 60i</h2>
				<p class="lead">Una PC Gamer Delios 60i es un arma que aprovecharás en el campo de batalla, ya sea
					jugando títulos de última generación con muy buen nivel gráfico, o en escenarios competitivos de
					eSports a nivel profesional. Aniquila a tus rivales.
					<ul>
						<li>RTX 2060 Super 8GB</li>
						<li>Intel i5 9400F</li>
						<li>16GB DDR4</li>
						<li>HDD 1TB</li>
					</ul>
				</p>
			</div>
			<div class="banner col-md-5">
				<div class="card shadow">
					<div class="inner">
						<a href="https://spartangeek.com/pc/delios-60i" target="_bank">
							<img class="card-img-top" src="media/img/pc/delios60i.png" alt="PC Delios 60i">
						</a>
					</div>
					<div class="card-body">
						<h1 class="card-title">$1,500</h1>
						<form action="" method="get">
							<div class="input-group">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01">Cantidad</label>
								</div>
								<input class="input-group-addon" type="number" value="1" min="0" max="30">
								<div class="input-group-append">
									<button class="btn btn-outline-danger" type="submit">Añadir al
										carrito</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7 order-md-2">
				<h2 class="featurette-heading">PC Gamer Delios 70i</h2>
				<p class="lead">Una PC Gamer Delios 70i es un arma que aprovecharás en el campo de batalla, ya sea
					jugando títulos de última generación con muy buen nivel gráfico, o en escenarios competitivos de
					eSports a nivel profesional. Aniquila a tus rivales.
					<ul>
						<li>RTX 2070 8GB</li>
						<li>Intel i5 9400F</li>
						<li>16GB DDR4</li>
						<li>HDD 2TB</li>
						<li>SSD 480GB</li>
					</ul>

				</p>
			</div>
			<div class="banner col-md-5 order-md-1">
				<div class="card shadow">
					<div class="inner">
						<a href="https://spartangeek.com/pc/delios-70i" target="_bank">
							<img class="card-img-top" src="media/img/pc/delios70i.png" alt="PC Delios 70i">
						</a>
					</div>
					<div class="card-body">
						<h1 class="card-title">$1,800</h1>
						<form action="" method="get">
							<div class="input-group">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01">Cantidad</label>
								</div>
								<input class="input-group-addon" type="number" value="1" min="0" max="30">
								<div class="input-group-append">
									<button class="btn btn-outline-danger" type="submit">Añadir al
										carrito</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">PC Gamer Thanos 2080i</h2>
				<p class="lead">Una PC Gamer Thanos 2080i jamás te dejará limitado para realizar desafíos de alto
					desempeño. Una computadora creada para intimidar a tus rivales.
					<ul>
						<li>RTX 2080 8GB</li>
						<li>Intel i7 9700K</li>
						<li>16GB DDR4</li>
						<li>HDD 1TB</li>
					</ul>
				</p>
			</div>
			<div class="banner col-md-5">
				<div class="card shadow">
					<div class="inner">
						<a href="https://spartangeek.com/pc/thanos-2080i" target="_bank">
							<img class="card-img-top" src="media/img/pc/thanos.png" alt="Pc gamer Thanos">
						</a>
					</div>
					<div class="card-body">
						<h1 class="card-title">$3,500</h1>
						<form action="" method="get">
							<div class="input-group">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01">Cantidad</label>
								</div>
								<input class="input-group-addon" type="number" value="1" min="0" max="30">
								<div class="input-group-append">
									<button class="btn btn-outline-danger" type="submit">Añadir al
										carrito</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="container">
		<p class="float-right"><a href="#">Back to top</a></p>
		<p>&copy; 2020 GameZone, Inc. &middot; <a href="https://www.instagram.com/roge.dev/?hl=es-la"
				target="_blank">Instagram</a> &middot; <a href="https://twitter.com/rogedev"
				target="_blank">Twitter</a>&middot;</p>
	</footer>

</body>

</html>