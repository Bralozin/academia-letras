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

					<article class="box page-content">

					<?php
					$sql = "SELECT * FROM historia ORDER BY idHis ";
					$historias = retornaDados($sql);

					foreach ($historias as $historia) { ?>
                        <section>
							    <h3><a href="<?= arquivo("modulos/modulos-site/historia/historia.php") ?>" class="button2">Quem somos?</a></h3>
								<p> <?=$historia['texto']?></p>
                        </section>

                    </article>
					<?php } ?>

						<!-- Features -->
						<section class="box features">
							<h2 class="major titulo-hover"><a href="<?= arquivo("modulos/modulos-site/obra/colecao.php") ?>"><span>Coleção</span></a></h2>
							<div>
								<div class="row">
									<?php
									$sql = "SELECT * FROM obra ORDER BY idObra DESC LIMIT 4";
									$obras = retornaDados($sql);

									foreach ($obras as $obra) { ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<a href="modulos/modulos-site/obra/visualizar.php?idObra=<?= $obra['idObra'] ?>" class="image featured">
													<img src="<?= arquivo('img/' . $obra['imagemObra']) ?>" alt="" />
												</a>

												<h3><a class="titulo-hover" href="modulos/modulos-site/obra/visualizar.php?idObra=<?= $obra['idObra'] ?>"><?= $obra['tituloObra'] ?></a></h3>

												<p>
													<?= substr($obra['sinopseObra'], 0, 200) ?>...
												</p>
											</section>
										</div>

									<?php } ?>

								</div>
							</div>
						</section>
					</div>
					<div class="col-12">
						<section class="box features">
							<h2 class="major titulo-hover"><a href="<?= arquivo("modulos/modulos-site/publicacao/publicacao.php") ?>"><span>Publicações</span></a></h2>
							<div>
								<div class="row">
									<?php
									$sql = "SELECT * FROM publicacoes ORDER BY idPub DESC LIMIT 4";
									$publicacoes = retornaDados($sql);

									foreach ($publicacoes as $publicacao) { ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<h3><a class="titulo-hover" href="#"><?= $publicacao['tituloPub'] ?></a></h3>

												<p>
													<?= substr($publicacao['textoPub'], 0, 200) ?>...
												</p>
											</section>
										</div>

									<?php } ?>

								</div>
							</div>
						</section>
					</div>
					<!-- Blog -->
					<div class="col-12">
						<section class="box blog">
							<h2 class="major titulo-hover"><a href="<?= arquivo("modulos/modulos-site/noticias/noticias.php") ?>"><span>Notícias</span></a></h2>
							<div>
								<div class="row">
									<?php
									$sql = "SELECT * FROM eventos ORDER BY idEve DESC LIMIT 1";
									$eventos = retornaDados($sql);

									foreach ($eventos as $evento) { ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<h3><a class="titulo-hover" href="#"><?= $evento['nomeEve'] ?></a></h3>
												<h3><?= $evento['localEve'] ?></h3>
												<h3><?= $evento['dataEve'] ?>/<?= $evento['horaEve'] ?></h3>
												<p>
													<?= substr($evento['descricaoEve'], 0, 200) ?>...
												</p>
											</section>
										</div>

									<?php } ?>
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


				
			</div>

		</div>
	</footer>

	</div>

	<?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>