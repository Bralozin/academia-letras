<!DOCTYPE html>
<html lang="en">
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> linha do tempo</p>
		</div>
	</div>
</header>

<body class="homepage is-preload">
    <div id="page-wrapper">
        <?php include_once path('template/template-site/navbar.php'); ?>
        <section id="main">
            <div class="container">
                <div class="row gtr-200">
                    <div class="col-12">
                        <div class="content">

                        </div>
                    </div>
                </div>
            </div>

        </section>
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

                <!-- Copyright -->
                <div id="copyright">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved</li>
                        <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>

            </div>
        </footer>

    </div>

    <?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>