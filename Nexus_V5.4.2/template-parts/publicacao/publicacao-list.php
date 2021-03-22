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



	<!-- Header -->
	<?php get_template_part ( 'template-parts/publicacao/publicacao', 'header' ); ?>


	<!-- Migalha -->
	<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>

<div class="row">
	<!-- Barra de menu lateral exclusiva -->
	<?php get_template_part ( 'template-parts/publicacao/sidebar' ); ?>

	<div class="col-md-8 col-md-offset-1">
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			global $post;
			$postid = get_the_ID();// Chama o ID do Post
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="publicacao">
					<div class="row">
						<div class="col-md-12 post-title titulo">
							<a href="#" data-toggle="modal" data-target="#<?php echo $postid ; ?>">
								<h1><?php the_title('<strong>', '</strong>'); ?></h1>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 font-P">
							<?php
								$_tp_autores = get_post_meta($post->ID, '_tp_autores', true );
								if ( ! empty( $_tp_autores ) ) {
								echo '<strong> Autores: </strong> ' . $_tp_autores;
							} ?>
						</div>
						<div class="col-md-4 font-P">
						<?php
							$posttags = get_the_tags($post->ID, 'posttags', true );
							if ($posttags) {
								echo "<strong>Keywords</strong>:  ";
								foreach($posttags as $tag) {
								echo $tag->name . ', ';
								}
							}
						?>
						</div>
					</div>
				</div>
			</article>
			<!-- Chama modal -->
			<?php include 'modal.php'; ?>
		<?php
		endwhile;
		else :
			get_template_part ( 'content', 'none' );
		endif;
		?>
	</div>
</div>