<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>Arisp</title>
	<!--Main Css Start-->
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<!--Main Css End-->
	<!-- favicon link -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<!-- favicon link End -->
</head>
<!-- Header End -->
<!-- Body Start -->

<body class="">
	<!--preloader start-->
	<div id="preloader">
		<div id="status"><img src="images/loading.gif" id="preloader_image" alt="loader">
		</div>
	</div>
	<!--preloader end-->
	<!--Head Section start-->
	<!-- color picker starts -->
	<!-- color picker ends-->
	<header>
		<div class>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div class="eco_logo">
					<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="">
					</a>
				</div>
			</div>

		</div>
	</header>
	<main>
		<!--Head Section End-->
		<!--Menu Start-->
		<div class="eco_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr">
						<nav class="navbar navbar-inverse" role="navigation">
							<div class="navbar-header">
								<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"><span class="eco_toggle_menu"><span class="glyphicon glyphicon-list"></span></span><span class="eco_toggle_text">MENU</span> <span class="sr-only">Toggle navigation</span> </button>
							</div>
							<!--navbar-header-->
							<div id="main-nav" class="collapse navbar-collapse padding_left font_menor">
								<ul class="nav navbar-nav my_menu ">
									<li class="eco_pos_rel " style="color: red !important;"><a href="index.php">HOME</a>
										<!--./sub-menu end-->
									</li>
									<li class="eco_pos_rel"><a href="sustentabilidade">Sustentabilidade</a>

									</li>
									<li class="eco_pos_rel"><a href="area">Áreas Preservada</a>

									</li>
									<li class="eco_pos_rel"><a href="atividades">Atividades</a>

									</li>
									<li class="eco_pos_rel"><a href="https://www.greenfarmco2free.com.br/eco-blog/" target="_blank">Eco Blog</a>

									</li>
									<li class="eco_pos_rel"><a href="media/relatorio.pdf" target="_blank">Relatório</a>

									</li>
									<li class="eco_pos_rel"><a href="http://arisp.com.br/" target="_blank">Contato</a>

									</li>
								</ul>
							</div>
							<!--navbar-collapse-->
						</nav>
					</div>
				</div>
				<!--navbar-->
			</div>
			<!--container-->
		</div>
		<!--header-->
		<!--second menu start-->
		<div class="pagenav fixedmenu">
			<div class="holder-fixedmenu">
				<div class="logo-fixedmenu">
					<a href="index.php"><img src="images/logo_menu2.png" alt="">
					</a>
				</div>
				<div class="menu-fixedmenu home  font_menor">
					<ul id="menu-home-page" class="menu my_menu" style="color: black !important;">
						<li class="eco_pos_rel"><a href="index.php">HOME</a>
							<!--./sub-menu end-->
						</li>
						<li class="eco_pos_rel"><a href="sustentabilidade">Sustentabilidade</a>

						</li>
						<li class="eco_pos_rel"><a href="area">Área Preservada</a>

						</li>
						<li class="eco_pos_rel"><a href="atividades">Atividades</a>

						</li>
						<li class="eco_pos_rel"><a href="https://www.greenfarmco2free.com.br/eco-blog/" target="_blank">Eco Blog</a>

						</li>
						<li class="eco_pos_rel"><a href="media/relatorio.pdf" target="_blank">Relatório</a>

						</li>
						<li class="eco_pos_rel"><a href="http://arisp.com.br/" target="_blank">Contato</a>

						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--second menu end-->

		<?php

		$id = 1;

		$pagina = "home";

		//verificar se o parametro esta sendo enviado
		if (isset($_GET["param"])) {

			$pagina = trim($_GET["param"]);
		}

		$pagina = "pages/" . $pagina . ".php";

		//verificar se o arquivo existe
		if (file_exists($pagina))
			include $pagina;
		else
			include "pages/erro.php";

		?>

	</main>
	<!--contact slider Section End-->
	<!--Footer Section Start-->
	<div class="eco_footer">
		
		<div class="container text-center">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="eco_footer_data">
					<a href="#" class="eco_footer_title"><img src="images/logo-fo.png" class="img-responsive" alt="">
					</a>

				</div>
			</div>

			<!--Footer Tag End-->
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="eco_footer_data">
					<h6 class="eco_footer_title"> Selos</h6>
					<a href="#" class=""><img src="images/Selo_GF.fw.png" class="selos text-center" alt="">
					</a>
				</div>
			</div>
			<!--Footer Categories Start-->
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div id="fb-root"></div>
				<div class="fb-page" data-href="https://www.facebook.com/GreenFarmCO2FREE" data-tabs="timeline" data-width="250" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/GreenFarmCO2FREE" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GreenFarmCO2FREE">Greenfarm - CO2 FREE</a></blockquote>
				</div>
			</div>
			
		</div>
		<div class="img-footer"></div>
		
	</div>
	
	</div>
	<footer>
		<div class="eco_copyight"> <a href="#" class="eco_color5"></a> Desenvolvido por Insights - Agência Web</div>
	</footer>
	<!--Footer Section End-->
	<!--go to top-->
	<div class="totop">
		<div class="gototop">
			<a href="#">
				<div class="arrowgototop"> </div>
			</a>
		</div>
	</div>
	<!--Script Start-->
	<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/plugins/prettyphoto/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/plugins/rainyday/rainyday.js" type="text/javascript"></script>
	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script src="js/scrollReveal.js" type="text/javascript"></script>
	<script src="js/circles.js" type="text/javascript"></script>
	<script src="js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
	<script src="js/plugins/countto/jquery.appear.js" type="text/javascript"></script>
	<script src="js/plugins/parallax/jquery.parallax-1.1.3.js" type="text/javascript"></script>
	<!--Revolution slider js start-->
	<script src="js/plugins/rev/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.extension.actions.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.extension.kenburn.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.extension.parallax.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.extension.slideanims.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.extension.video.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.extension.navigation.min.js" type="text/javascript"></script>
	<script src="js/plugins/rev/js/revolution.addon.typewriter.min.js" type="text/javascript"></script>
	<!--Revolution slider js end-->
	<script src="js/plugins/jquery-ui/jquery-ui.js" type="text/javascript"></script>
	<script src="js/plugins/smoothscroll/smoothScroll.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=&amp;sensor=false"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0">
	</script>
	<!--Script End-->
	<!--Body End-->
</body>

</html>