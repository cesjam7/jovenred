<!doctype html>
<html <?php language_attributes(); ?> xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="ZW--dZI4J7uUqzw9tNP82oJ47mPzk9NOlSX602bUj20" />
	<title><?php if (is_home()) { echo bloginfo('name'); }else{ wp_title(''); echo " » "; echo bloginfo('name'); } ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Diseño y desarrollo del sitio web por César Aquino Maximiliano (www.jovenred.com).">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/estilo.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="<?php echo home_url(); ?>" class="logo">
						<img width="200" src="http://jovenred.com/wp-content/uploads/2011/07/logo.png" alt="">
					</a>
				</div>
				<div class="col-sm-9">
					<?php wp_nav_menu( array( 'theme_location' => 'Principal', 'container' => 'nav', 'container_class' => 'menu', 'container_id' => 'cssmenu' ) ); ?>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="bloque-rojo hidden-xs"></div>