<?php
/**
* List os Post da Taxonomia Noticias
*
* Thema Nexus - Centro de Ciência do Istema Terrestre - CCST / INPE
* Author:Cristiano Augusto Cunha Silva <cristianoaugustocs@gmail.com>
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package WordPress
* @subpackage Nexus
* @since 1.0
* 
*  Este thema foi desenvolvido para o Centro de Ciências do Sistema Terreste / INPE - BRASIL
* 
*/
?>



<?php
	include 'taxonomia.php'; // chama o identificador de taxonomia
	get_template_part ( 'template-parts/gestores/topo' );
?>

<div class="row">
	<div class="col-md-12 migalha">
		<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>
	</div>
</div>

<div class="row">
	<!-- Barra de menu lateral exclusiva -->
	<?php get_template_part ( 'template-parts/gestores/sidebar' ); ?>

	<div class="col-md-8 col-md-offset-1">
			<?php
				$args = array( 'post_type' => 'gestores', 'cat_gestores' => 'outros');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 

						get_template_part( 'template-parts/post/post', 'list' );
						echo '<br />';

				endwhile;
			?>
	</div>
</div>