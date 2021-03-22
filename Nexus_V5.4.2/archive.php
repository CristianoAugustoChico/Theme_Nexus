<?php
/**
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

<?php get_header(); ?>

<?php

// Get custom posts

if ( get_post_type() == 'equipe' ): // Se o post type for equipe
	include ( get_template_part ( 'template-parts/equipe/equipe', 'list' ));
endif;

if ( get_post_type() == 'publicacao' ): // se o post type for publicação
	include ( get_template_part ( 'template-parts/publicacao/publicacao', 'list' ));
endif;


/* Seção de Divulgação Científica */
if ( get_post_type() == 'estudantes' ): // se o post type for divulgação científica
	include ( get_template_part ( 'template-parts/estudantes/estudantes', 'list' ));
endif;

if ( get_post_type() == 'gestores' ): // se o post type for divulgação científica
	include ( get_template_part ( 'template-parts/gestores/gestores', 'list' ));
endif;

if ( get_post_type() == 'pesquisadores' ): // se o post type for divulgação científica
	include ( get_template_part ( 'template-parts/pesquisadores/pesquisadores', 'list' ));
endif;


// Get post standar wordpress
if ( get_post_type() == 'post' ): // Se o post type foi post ?>

	<div class="row">
		<header>
			<?php // Titulo
				$category = get_the_category(); 
				echo '<h1 class="title-seccao">', $category[0]->cat_name ,'</h1>';
			?>
		</header>
	</div>
	<div class="row">
		<div class="col-md-12 migalha">
			<!-- Migalha -->
			<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>
		</div>
	</div>

	<div class="row">
		<?php get_sidebar(); ?>

		<div id="content" class="col-md-8 col-md-offset-1">
			<section>
				<!-- Imprime o nome da categoria -->
				<?php if ( have_posts() ) : ?>
					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post', 'list' );
					// End the loop.
					endwhile;
					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'content', 'none' );
					endif;
				?>
			</section>
		</div>
	</div>
<?php endif; ?>

<div id="numerador" class="col-md-8 col-md-offset-4">
	<?php
		if ( function_exists('wp_bootstrap_pagination') )
		wp_bootstrap_pagination();
	?>
</div>

<?php get_footer(); ?>