<?php
	$pdo = new PDO('mysql:mysql:host=localhost; dbname=bootstrap_projeto; port=3307', 'root', '');
	$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
	$sobre->execute();
	$sobre = $sobre->fetch()['sobre'];
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Site-Empresas</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/Footer-Basic-icons.css">
	<link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
	<link rel="stylesheet" href="assets/css/Paralax-Hero-Banner.css">
	<link rel="stylesheet" href="assets/css/Paralax-Hero-Banner-Hero-Technology.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<header>
	<nav class="navbar navbar-expand-md fixed-top bg-dark py-3" data-bs-theme="dark">
		<div class="container">
			<a class="navbar-brand d-flex align-items-center" href="#">
				<span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-buildings-fill">
						<path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"></path>
					</svg>
				</span>
				<span>Site Empresarial</span>
			</a>
			<button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
				<span class="visually-hidden">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navcol-5">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contato</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<div class="box">
	<section class="banner" style="background: url(&quot;assets/img/pexels-photo-2182969.jpeg&quot;) center / cover no-repeat;position: relative;min-height: 600px;width: 100%;max-height: 1px;">
		<div class="overlay"></div>
		<div class="container-fluid chamada-banner">
			<div class="hero-technology jumbotron py-5 px-4">
				<h1 class="hero-title">Nome Fantasia</h1>
				<p class="hero-subtitle">Empresa voltada para o desenvolvimento de aplicações e sistemas!</p>
				<p>
					<a class="btn btn-primary btn-lg hero-button" role="button" href="#">Saiba Mais!</a>
				</p>
			</div>
		</div>
	</section>
	<section class="text-center text-light bg-dark cadastro-lead">
		<div class="container d-flex justify-content-center align-content-center">
			<div class="row d-flex justify-content-center align-items-center col-md-6">
				<div class="col d-flex justify-content-center">
					<h2 class="d-flex align-content-center">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star">
						<path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
					</svg>&nbsp;Entre na nossa lista!
					</h2>
				</div>
				<div class="col-md-6">
					<form class="d-flex justify-content-center justify-content-xxl-center" style="width: 100%;">
						<input class="form-control" type="text" name="nome" style="height: 40px;padding: 7px 12px;width: 90%;" placeholder="Seu Nome Completo:">
						<input class="btn btn-primary" type="submit" style="height: 40px;margin-left: 5px;">
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="text-center depoimento">
		<div class="container" style="font-size: 15px;">
			<div class="row">
				<div class="col-md-12">
					<h2 style="font-size: 20px;">Depoimento</h2>
					<figure>
						<blockquote class="blockquote">
							<p class="mb-0" style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
								id est laborum.</p>
						</blockquote>
						<figcaption class="blockquote-footer">Someone famous</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section class="text-center text-light bg-dark diferenciais">
		<h2>Conheça nossa empresa!</h2>
		<div class="container diferenciais-container">
			<div class="row" style="margin-top: 30px;">
				<!-- <div class="col-md-4">
					<h3>
						<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cup-hot-fill" style="color: var(--bs-primary);">
							<path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5"></path>
							<path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8"
							></path>
						</svg>
					</h3>
					<h2>Diferencial #1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-4">
					<h3>
						<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star-fill" style="color: var(--bs-primary);">
							<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
						</svg>
					</h3>
					<h2>Diferencial #2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-4">
					<h3>
						<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trophy-fill" style="color: var(--bs-primary);">
							<path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935"></path>
						</svg>
					</h3>
					<h2>Diferencial #3</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>  -->
				<?= $sobre ?>
			</div>
		</div>
	</section>
	<section class="text-center equipe">
		<h2>Equipe</h2>
		<div class="container equipe-container">
			<div class="row">
				<?php

				$selectMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
				$selectMembros -> execute();
				$membros = $selectMembros->fetchAll();

				for ($i = 0; $i < count($membros); $i++) {

				?>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-2">
								<div class="user-picture">
									<div class="user-child" style="background: url(&quot;assets/img/<?= $membros[$i]['nome'] ?>.jpg&quot;) center / cover no-repeat;"></div>
								</div>
							</div>
							<div class="col-md-10">
								<h3><?= $membros[$i]['nome'] ?></h3>
								<p style="text-align: justify;"><?= $membros[$i]['descricao'] ?></p>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>

			</div>
		</div>
	</section>
	<section class="final-site">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center d-flex flex-column justify-content-center align-items-center mb-5" style="padding-right: 30px;padding-left: 30px;">
					<h1 class="text-center mb-3">Nossos Planos:</h1>
					<div class="table-responsive border rounded w-100" style="max-width: 730px;">
						<table class="table">
							<thead>
							<tr>
								<th>Plano Semanal</th>
								<th>Plano Diário</th>
								<th>Plano Anual</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>R$ 399,99</td>
								<td>R$ 199,99</td>
								<td>R$ 4.099,99</td>
							</tr>
							<tr>
								<td>R$ 399,99</td>
								<td>R$ 199,99</td>
								<td>R$ 4.099,99</td>
							</tr>
							<tr>
								<td>R$ 399,99</td>
								<td>R$ 199,99</td>
								<td>R$ 4.099,99</td>
							</tr>
							<tr>
								<td>R$ 399,99</td>
								<td>R$ 199,99</td>
								<td>R$ 4.099,99</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-12" style="padding-right: 30px;padding-left: 30px;">
					<div class="card" style="padding: 0;border-style: none;">
						<div class="card-body" style="border-style: none;padding: 0;">
							<h2 class="text-center mb-4">Contate-nos!</h2>
							<form class="d-flex flex-column justify-content-center align-items-center" method="post">
								<div class="mb-3" style="width: 100%;">
									<input class="form-control w-100" type="text" id="name-2" name="name" placeholder="Nome" style="width: 100%;">
								</div>
								<div class="mb-3" style="width: 100%;">
									<input class="form-control w-100" type="email" id="email-2" name="email" placeholder="E-mail" style="width: 100%;">
								</div>
								<div class="mb-3" style="width: 100%;"><textarea class="form-control w-100" id="message-2" name="message" rows="6" placeholder="Mensagem" style="width: 100%;"></textarea></div>
								<div style="width: 100%;">
									<button class="btn btn-primary d-block w-100" type="submit" style="width: 100%;">Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<footer class="text-center bg-dark">
	<div class="container text-white py-4 py-lg-5">
		<ul class="list-inline">
			<li class="list-inline-item me-4">
				<a class="link-light" href="#">Web design</a>
			</li>
			<li class="list-inline-item me-4">
				<a class="link-light" href="#">Development</a>
			</li>
			<li class="list-inline-item">
				<a class="link-light" href="#">Hosting</a>
			</li>
		</ul>
		<ul class="list-inline">
			<li class="list-inline-item me-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
					<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
				</svg>
			</li>
			<li class="list-inline-item me-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
					<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"></path>
				</svg>
			</li>
			<li class="list-inline-item">
				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
					<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
					></path>
				</svg>
			</li>
		</ul>
		<p class="mb-0">Copyright © 2024</p>
	</div>
</footer>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Paralax-Hero-Banner-untitled.js"></script>
</body>

</html>