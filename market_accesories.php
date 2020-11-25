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

	<title> Market | Accesories </title>
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
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" p
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
					<source src="media/video/videobgaccessories.mp4" alt="Video de videojuegos">
				</video>
			</div>
		</div>
	</div>

	<div class="caption text-center bg-transparent">
		<h1>Accesorios</h1>
		<h3>Aqui encontraras nuestra seleccion de los mejores accesorios del mercado para gaming como headsets de gran
			calidad, mouses gaming de primer nivel y teclados mecanicos de alta gama</h3>
		<br>
		<a class="btn btn-outline-light btn-lg" href="#accesorios">Ver mas</a>
	</div>

	<main id="accesorios">
		<div id="mainproducts">
			<ul id="myTab" class="nav nav-tabs nav-justified">
				<li class="nav-item">
					<a href="#teclados" class="nav-link active text-dark" data-toggle="tab">Teclados</a>
				</li>
				<li class="nav-item">
					<a href="#mouses" class="nav-link text-dark" data-toggle="tab">Mouses</a>
				</li>
				<li class="nav-item">
					<a href="#audifonos" class="nav-link text-dark" data-toggle="tab">Audifonos</a>
				</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane fade show active" id="teclados">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=r7o9aTTIXhU" target="_bank">
										<img class="card-img-top" src="media/img/teclados/duckyone.png"
											alt="Duck yOne 2 Pure White">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">Ducky One 2 Pure White</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$99</h5>
										</div>
									</div>
									<p class="card-text">RGB LED 60% Double Shot PBT Mechanical Keyboard</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=9G_Ec1Y_M8A" target="_blank">
										<img class="card-img-top" src="media/img/teclados/duckymecha2.png"
											alt="Ducky Mecha 2">
									</a>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">Ducky Mecha 2</h5>
										</div>
										<div class="col-md-3">
											<h5 class="card-title">$99</h5>
										</div>
									</div>
									<p class="card-text">RGB LED 60% Double Shot PBT Mechanical Keyboard</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=pYU6gdIrUBc" target="_blank">
										<img class="card-img-top" src="media/img/teclados/leopold.png"
											alt="leopold FC980M">
									</a>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">Leopold FC980M Two Tone White</h5>
										</div>
										<div class="col-md-3">
											<h5 class="card-title">$119</h5>
										</div>
									</div>
									<p class="card-text">PD Double Shot PBT Mechanical Keyboard</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
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
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=VwW0B1rd9xk" target="_blank">
										<img class="card-img-top" src="media/img/teclados/frozenllama.jpg	"
											alt="Frozen Llama">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">Ducky x MK Frozen Llama</h5>
										</div>
										<div class="col-md-3">
											<h5 class="card-title">$129</h5>
										</div>
									</div>
									<p class="card-text">RGB LED 60% Double Shot PBT Mechanical Keyboard</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=yn0coIQa5_Y" target="_blank">
										<img class="card-img-top" src="media/img/teclados/vortex.jpg"
											alt="vortex race 3">
									</a>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">Vortex race 3</h5>
										</div>
										<div class="col-md-3">
											<h5 class="card-title">$159</h5>
										</div>
									</div>
									<p class="card-text">RGB LED TKL Dye Sub PBT Mechanical Keyboard</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=9tGRHYr_Q3o" target="_blank">
										<img class="card-img-top" src="media/img/teclados/kbparadise.jpg"
											alt="KBParadise V60">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">KBParadise V60</h5>
										</div>
										<div class="col-md-3">
											<h5 class="card-title">$95</h5>
										</div>
									</div>
									<p class="card-text">Vintage 60% Mechanical Keyboard</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
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

				</div>
				<div class="tab-pane fade" id="mouses">

					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=8dmCa5KvjOw" target="_bank">
										<img class="card-img-top" src="media/img/mouses/g203.png" alt="Logitecg G203">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G203</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$25</h5>
										</div>
									</div>
									<p class="card-text">Mouse gaming LIGHTSYNC</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=l5YPwXuIxi4&t" target="_bank">
										<img class="card-img-top" src="media/img/mouses/g403.png" alt="Logitecg G403">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G403</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$60</h5>
										</div>
									</div>
									<p class="card-text">Mouse gaming HERO</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=JHqYAC4X4cA" target="_bank">
										<img class="card-img-top" src="media/img/mouses/g502.png" alt="Logitecg G502">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G502</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$140</h5>
										</div>
									</div>
									<p class="card-text">Mouse gaming inalambrico LIGHTSPEED</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
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
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=L-tDU524z1o" target="_bank">
										<img class="card-img-top" src="media/img/mouses/g604.png" alt="G604">
									</a>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G604</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$110</h5>
										</div>
									</div>
									<p class="card-text">Mouse gaming inalambrico LIGHTSPEED</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="https://www.youtube.com/watch?v=InX6le8s0kI" target="_bank">
										<img class="card-img-top" src="media/img/mouses/g703.png" alt="G703">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G703</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$110</h5>
										</div>
									</div>
									<p class="card-text">Mouse gaming inalambrico LIGHTSPEED HERO</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="" target="_bank">
										<img class="card-img-top" src="media/img/mouses/g903.png" alt="G903">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G903</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$175</h5>
										</div>
									</div>
									<p class="card-text">Mouse gaming inalambrico LIGHTSPEED HERO</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
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
				</div>
				<div class="tab-pane fade" id="audifonos">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="" target="_bank">
										<img class="card-img-top" src="media/img/audifonos/b3500.jpg"
											alt="Red Lemon B3500">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">B3500</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$80</h5>
										</div>
									</div>
									<p class="card-text">Audífonos Bluetooth Gamer Inalámbricos Plegables con Micrófono,
										Sonido Estéreo HD</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="" target="_bank">
										<img class="card-img-top" src="media/img/audifonos/g6000.jpg"
											alt="Red Lemon G6000">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G6000</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$75</h5>
										</div>
									</div>
									<p class="card-text">Audífonos Gamer Sonido High Definition con Micrófono, Control
										de Volumen y Luz LED, AUX 3.5mm</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="" target="_bank">
										<img class="card-img-top" src="media/img/audifonos/g9000.jpg"
											alt="Red Lemon G9000">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">G9000</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$80</h5>
										</div>
									</div>
									<p class="card-text">Audífonos Gamer Sonido HD Estéreo 360°, Micrófono de
										Cancelación de Ruido y Luz LED</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
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
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="" target="_bank">
										<img class="card-img-top" src="media/img/audifonos/overear.jpg"
											alt="Red Lemon Over Ear">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">RL Over Ear</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$40</h5>
										</div>
									</div>
									<p class="card-text">Audífonos tipo Diadema Over-Ear Plegables Sonido High
										Definition, Manos Libres, Cable Auxiliar 3.5mm</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="" target="_bank">
										<img class="card-img-top" src="media/img/audifonos/redlemonblue.jpg"
											alt="Red Lemon bluetooth">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">RL Bluetooth</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$50</h5>
										</div>
									</div>
									<p class="card-text">Audífonos Bluetooth Inalámbricos HD tipo Diadema, Manos Libres,
										Batería de Larga Duración, Aux 3.5mm</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
											<div class="input-group-append">
												<button class="btn btn-outline-danger" type="submit">Añadir al
													carrito</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow">
								<div class="inner">
									<a href="" target="_bank">
										<img class="card-img-top" src="media/img/audifonos/w1000.jpg"
											alt="Red Lemon W1000">
									</a>

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col">
											<h5 class="card-title">W1000</h5>
										</div>
										<div class="col-sm-3">
											<h5 class="card-title">$60</h5>
										</div>
									</div>
									<p class="card-text">Audífonos Bluetooth Inalámbricos HD, Plegables Tipo Diadema,
										Manos Libres, Batería Recargable</p>
									<form action="" method="post">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text"
													for="inputGroupSelect01">Cantidad</label>
											</div>
											<input class="input-group-addon" type="number" min="0" max="30">
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