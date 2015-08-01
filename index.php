<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="Desenvolvido por Lennon Santos.">
	<meta name="keywords" content="lennon santos">
	<meta name="author" content="Lennon Santos">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php wp_title('-', true, 'right'); bloginfo(); ?></title>
	<link rel="icon" href="favicon.png" type="image/png" sizes="32x32">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="header-superior">
			<div id="header-superior-content">
				<div id="header-paginas">
					header paginas
				</div>
				<div id="header-social">
					header social
				</div>
			</div>
		</div> <!-- #header-superior -->
		<div id="header-superior">
			<div class="logo">
				logo
			</div>
			<div id="login">
				login
			</div>
			<div id="search">
				search
			</div>
		</div> <!-- #header-content -->
		<nav>
			<div id="nav-content">
				barra de navegação
			</div>
		</nav>
	</header>
	<section id="container">
		<div id="content">

			<section id="destaque">
				destaque
			</section>

			<section id="tecnologia">
				tecnologia
			</section>

			<section id="entretenimento">
				entretenimento
			</section>

			<section id="esporte">
				esporte
			</section>
			
			<section id="saude">
				saude
			</section>

			<section id="politica">
				politica
			</section>

			<section id="games">
				games
			</section>

		</div> <!-- #content -->
	</section> <!-- #container -->
<?php wp_footer(); ?>
</body>
</html>