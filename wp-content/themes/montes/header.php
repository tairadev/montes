<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<link href="http://localhost/montes/wp-content/themes/montes/css/bootstrap.min.css?v=<?= rand(10,100) ?>" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="http://localhost/montes/wp-content/themes/montes/css/index.css?v=<?= rand(10,100) ?>">
		<link rel="stylesheet" href="http://localhost/montes/wp-content/themes/montes/css/owl.carousel.min.css?v=<?= rand(10,100) ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://localhost/montes/wp-content/themes/montes/materiais/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="http://localhost/montes/wp-content/themes/montes/materiais/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="http://localhost/montes/wp-content/themes/montes/materiais/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="http://localhost/montes/wp-content/themes/montes/materiais/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="http://localhost/montes/wp-content/themes/montes/materiais/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="http://localhost/montes/wp-content/themes/montes/materiais/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="http://localhost/montes/wp-content/themes/montes/materiais/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="http://localhost/montes/wp-content/themes/montes/materiais/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="http://localhost/montes/wp-content/themes/montes/materiais/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="http://localhost/montes/wp-content/themes/montes/materiais/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="http://localhost/montes/wp-content/themes/montes/materiais/mstile-310x310.png" />
		<script src="http://localhost/montes/wp-content/themes/montes/js/jquery.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://localhost/montes/wp-content/themes/montes/js/bootstrap.bundle.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://localhost/montes/wp-content/themes/montes/js/popper.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://localhost/montes/wp-content/themes/montes/js/bootstrap.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://localhost/montes/wp-content/themes/montes/js/owl.carousel.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="http://localhost/montes/wp-content/themes/montes/js/main.js?v=<?= rand(10,100) ?>"></script>
	</head>

	<body <?php body_class(); ?>>
		
		<nav class="d-lg-none" id="navMobile">
			<a href="#introducao">
				<img src="http://localhost/montes/wp-content/themes/montes/materiais/LOGO.png" onclick="$('html, body').animate({ scrollTop: $('#intro').offset().top }, 'fast');" alt="Update Consultoria">
			</a>
			<div class="toggle-menu" onclick="$('#navMobile').toggleClass('toggle'); $('#menu-mobile').toggleClass('hide');">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
		</nav>
		<div id="menu-mobile" class="hide d-lg-none">
			<ul>
				<li>
					<a href="#introducao">HOME</a>
				</li>
				<li>
					<a href="#visao">NOSSA VISÃO</a>
				</li>
				<li>
					<a href="#areas-atuacao">ÁREAS DE ATUAÇÃO</a>
				</li>
				<li>
					<a href="#equipe">NOSSA EQUIPE</a>
				</li>
				<li>
					<a href="#contato">CONTATO</a>
				</li>
			</ul>
		</div>
		<nav class="d-none d-lg-block menu-desktop">
			<div class="container">
				<a href="#introducao">
					<img src="http://localhost/montes/wp-content/themes/montes/materiais/LOGO.png" alt="">
				</a>
				<ul>
					<li>
						<a href="#introducao">HOME</a>
					</li>
					<li>
						<a href="#visao">NOSSA VISÃO</a>
					</li>
					<li>
						<a href="#areas-atuacao">ÁREAS DE ATUAÇÃO</a>
					</li>
					<li>
						<a href="#equipe">NOSSA EQUIPE</a>
					</li>
					<li>
						<a href="#contato">CONTATO</a>
					</li>
				</ul>
			</div>
		</nav>

		<?
