<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>
<body>
<header class="row">
	<div class="column medium-12 small-12 align-center top-bar">
				<address class="">
						<span class="phone">
							<i class="fa fa-mobile" aria-hidden="true"></i>
							+4915163906006
						</span>
						<span class="email">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							info@baosholz.de
						</span>
				</address>
				<a href="/immpressum/">Immpressum</a>
	</div>
	<div class="column medium-12 small-12">
		<div class="row">
			<div class="column large-3 medium-12 small-12 lg-bg">
				<a href="/" class="logo">Baos Holzhandel</a>
			</div>
			<div class="column medium-6 small-12 align-self-middle">
			<?php 
				wp_nav_menu(array(
				'theme_location' => 'primary', 
				'menu_class' => 'menu align-center',
				'walker' => new Foundationpress_Mobile_Walker()
				)
			); ?>
			</div>
			<div class="column large-3 medium-6 small-12 align-self-middle modal">
				<a href="" class="button expanded openModal">
					<i class="fa fa-handshake-o" aria-hidden="true"></i> Individuelles Angebot
				</a>
			</div>
			</div>
		</div>
</header>