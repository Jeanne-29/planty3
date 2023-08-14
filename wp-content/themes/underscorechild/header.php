<?php
/*
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); //permet d'afficher les informations sur le site WordPress ?>">  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); //permet d'ajouter le contenu d’entête prévu par WP et les contenus que j'ai ajoutés ci dessous ?> 
</head>

<body class="Container">
<?php wp_body_open(); //fonction Body d'ouverture ?> 
<div id="page" class="site">
	<header >
		
	 <div class="HeaderContenaire">
	 	<div >	
			 <?php the_custom_logo(); //fonction permettant d'afficher le logo personnalisé lié à l'accueil ?> 
		</div>
			
		<nav class="menuNav">

			<?php
			wp_nav_menu( //fonction qui affiche le menu de navigation
				array(
					'theme_location' => 'menu-1',
					'container'      => 'false',
					'menu_class'     => 'header',
				)
			);
			?>
	 
		</nav>
		</div>
	</header>
