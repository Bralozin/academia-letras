<!DOCTYPE HTML>
<html>
<?php
	include 'config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
			<p> Academia Araçatubense de Letras</p>
		</div>
	</div>
</header>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<?php include_once path('template/template-site/navbar.php'); ?>



		<!-- Banner -->
		<!-- Main -->


		<section id="main">
			<div class="container">
				<div class="row gtr-200">
					<div class="col-12">

						<!-- Features -->
						<section class="box features">
							<h2 class="major"><span>Quem somos?</span></h2>

						</section>
						<section class="box features">
							<h2 class="major"><span>Coleção</span></h2>
							<div>
								<div class="row">
									<?php
										$sql = "SELECT * FROM obra ORDER BY idObra DESC LIMIT 4";
										$obras = retornaDados($sql);

										foreach($obras as $obra)
										{ ?>
											<div class="col-3 col-6-medium col-12-small">
												<!-- Feature -->
												<section class="box feature">
													<a href="#" class="image featured">
														<img src="<?= arquivo('img/' . $obra['imagemObra']) ?>" alt="" />
													</a>

													<h3><a href="#"><?= $obra['tituloObra'] ?></a></h3>

													<p>
														<?= substr($obra['sinopseObra'], 0, 200) ?>...
													</p>
												</section>
											</div>

										<?php } ?>

								</div>
							</div>
						</section>
						<center><a href="left-sidebar.html" class="button">Continue lendo</a></center>
					</div>
					<div class="col-12">
						<section class="box features">
							<h2 class="major"><span>Publicações</span></h2>
							<div>
								<div class="row">
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?= arquivo('img/img-site/Harry-Potter-4.jpg') ?>" alt=""></a>
											<h3><a href="#">harry potter e o calíce de fogo</a></h3>
											<p>
												Verão, Harry Potter, agora com 14 anos, sente sua cicatriz arder durante um sonho bastante real com Lord Voldemort, o qual não consegue esquecer;
											</p>
										</section>

									</div>
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?= ('img/img-site/johnny-bleas-novo-mundo.webp') ?>" alt=""></a>
											<h3><a href="#">Johnny Bleas: Um Novo Mundo</a></h3>
											<p>
												Órfão de pai e mãe, Johnny Bleas, tem uma vida confortável com seus tios, Os Case, em uma fazenda no interior do estado. Até que ao acordar certa manhã e depara-se com a horrível cena de assassinato dentro de sua própria casa, a sincronia da sua vida se desfez e seu mundo começa a girar em meio a inesperadas desventuras. O triste som da morte abre as portas para algo que Johnny nunca poderia imaginar.
											</p>
										</section>

									</div>
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?= arquivo('img/img-site/johnny-bleas-nucleo-montanha.webp') ?>" alt="" /></a>
											<h3><a href="#">Johnny Bleas: O Núcleo da Montanha</a></h3>
											<p>
												Batalhas, mistérios e muito mais magia...Após a morte do necromante, Johnny e seus amigos seguem para a segunda parte desta fascinante jornada em direção às ilhas Lunarium, um lugar cheio de aventuras e perigos para todos. Apesar das adversidades que enfrentam ao longo do caminho, continuam para as montanhas do norte a procura do segundo fragmento do coração de Asterium.
											</p>
										</section>

									</div>
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="<?= arquivo('img/img-site/johnny-bleas-herdeiro-asterium.webp') ?>" alt=""></a>
											<h3><a href="#">Johnny Bleas: O Herdeiro de Asterium</a></h3>
											<p>
												O começo, que introduziu o leitor ao novo mundo, a sequência no núcleo da montanha que estruturou a trama e finalmente o fim. A grande explosão de poder. A reviravolta que surpreendeu o mundo e mudou para sempre o destino de Asterium.
											</p>
										</section>

									</div>

								</div>
							</div>
						</section>
						<!-- Blog -->
						<section class="box blog">
							<h2 class="major"><span>Notícias</span></h2>
							<div>
								<div class="row">
									<div class="col-9 col-12-medium">
										<div class="content">

											<!-- Featured Post -->
											<article class="box post">
												<header>
													<h3><a href="#">Notícia aleatória que não tem nada a ver com o site</a></h3>
													<p>Volta de Hunter X Hunter</p>
													<ul class="meta">
														<li class="icon fa-clock">15 minutes ago</li>
														<li class="icon fa-comments"><a href="#">8</a></li>
													</ul>
												</header>
												<a href="#" class="image featured"><img src="<?= arquivo('img/img-site/noticia-pika.jpg') ?>" alt="" /></a>
												<p>
													24/05/2022 Dia Lendário em que Yoshihiro Togashi, mais conhecido como Togashi, teoricamente postou em um twitter criado no própio dia que estaria por vir mais 4 episódios, depois de um Hiato de mais de 4 anos
												</p>
												<a href="no-sidebar.html" class="button">Continue lendo</a>
											</article>

										</div>
									</div>
									<div class="col-3 col-12-medium">
										<div class="sidebar">

											<!-- Archives -->
											<ul class="divided">
												<li>
													<article class="box post-summary">
														<h3><a href="#">UM SUBTÍTULO</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">6 hours ago</li>
															<li class="icon fa-comments"><a href="#">34</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">OUTRO SUBTÍTULO</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">9 hours ago</li>
															<li class="icon fa-comments"><a href="#">27</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">E outro</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">Yesterday</li>
															<li class="icon fa-comments"><a href="#">184</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">E outro</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">2 days ago</li>
															<li class="fas fa-comments"><a href="#">286</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">E MAIS UM</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">3 days ago</li>
															<li class="icon fa-comments"><a href="#">8,086</a></li>
														</ul>
													</article>
												</li>
											</ul>
											<a href="no-sidebar.html" class="button alt">Archives</a>

										</div>
									</div>
								</div>
							</div>
						</section>

					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<div class="row gtr-200">


					<?php include_once path('template/template-site/contato.php'); ?>
					<div class="col-12">

						<!-- About -->
						<section>
							<h2 class="major"><span>Desenvolvedores</span></h2>
							<p>
								Gilvan Santos <br>
								Bruno Corrêa <br>
								Caique Pollachini <br>
								Kenjhon Leandro <br>
							</p>
						</section>
					</div>

				</div>

			</div>
		</footer>

	</div>

	<?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>