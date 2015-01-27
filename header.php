<!doctype html>
<html <?php language_attributes(); ?> xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if (is_home()) { echo bloginfo('name'); }else{ wp_title(''); echo " » "; echo bloginfo('name'); } ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Diseño y desarrollo del sitio web por César Aquino Maximiliano (www.jovenred.com).">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/estilo.css">
	<link href='http://fonts.googleapis.com/css?family=Noto+Serif' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<header class="header">
			<div class="cont">
				<a href="<?php echo home_url(); ?>" class="logo">
					<img width="200" src="http://jovenred.com/wp-content/uploads/2011/07/logo.png" alt="">
				</a>
				<nav class="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'Principal' ) ); ?>
				</nav>
			</div>
		</header>
		<div class="bloque-rojo"></div>