<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnderScore
 */

?>

	<footer>

			<?php
			wp_nav_menu ( //fonction qui affiche le menu de navigation
				array(
					'theme_location' => 'menu-2',
					'container'      => 'false',
					'menu_class'     => 'footer',
				)
			);
			?>

	</footer> 
</div> 
<?php wp_footer(); // fonction qui permet d'ajouter le contenu du footer prévu par WP et les contenus que j'ai ajoutés ci dessus ?> 
</body>
</html>