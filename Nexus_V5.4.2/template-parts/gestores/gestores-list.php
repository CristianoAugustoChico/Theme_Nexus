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

<?php
include 'taxonomia.php'; // chama o identificador de taxonomia
//echo $current_slug; 
//echo $nome_genero;

get_template_part ( 'template-parts/gestores/topo' );
?>

<div class="row">
	<div class="col-md-12 migalha">
		<!-- Migalha -->
		<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>
	</div>
</div>

<div class="row">
	<!-- Barra de menu lateral exclusiva -->
	<?php get_template_part ( 'template-parts/gestores/sidebar' ); ?>

	<div class="col-md-8 col-md-offset-1">
		<?php if ( have_posts() ) : ?>
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
			?>
				<article>
					<a href="<?php the_permalink(); ?>">
						<div id="noticias">
							<div class="row">
								<div class="col-md-12 img-destaque">
									<div <?php thumbnail_noticia( 'full' ); ?> > </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1">
									<div class="date-post">
										<?php the_time('d') ?>
										<br />
										<?php the_time('M') ?>
									</div>
								</div>
								<div class="col-md-11">
									<div class="row">
										<div class="col-md-12 post-title">
											<?php the_title('<strong>', '</strong>'); ?>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 post-except">
											<?php // Mostra os primeiros 150 caracteres
											$excerpt = substr( $post->post_excerpt, 0, 300 );
											// Imprime a variável?>
											<?php  echo $excerpt , '...'; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</article>
			<?php
			// End the loop.
			endwhile;
			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
	</div>
</div>