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

<!-- Apoio -->
<div class="container">
<div class="row">
	<div class="col-md-12">
		<h1 class="text-center title-seccao">Instituições participantes</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<?php
		$args = array( 'post_type' =>  'apoio', 'cat_apoio' => 'apoio',  'posts_per_page' => 50 );
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
			//$excerpt = substr( $post->post_content, 0, 120 );?>
				<?php
					$p_link_apoio = get_post_meta($post->ID, 'p_link_apoio', true );
					if ( ! empty ($p_link_apoio) ){ ?>
						<a href=" <?php echo $p_link_apoio; ?> " target="_blank" title="<?php the_title(); ?>">
							<div class="col-md-3 col-xs-6 img-responsive" >
								<div <?php thumbnail_apoio( 'apoio-home' ); ?> ></div>
							</div>
						</a>
					<?php } ?>
		<?php endwhile; // End the loop. Whew. ?>
	</div>
</div>


<!-- Fomento -->
<br><br>
<div class="row">
	<div class="col-md-12">
		<h1 class="text-center title-seccao">Fomento</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<?php 
		$args = array( 'post_type' => 'apoio', 'cat_apoio' => 'fomento',  'posts_per_page' => 50 );
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
			//$excerpt = substr( $post->post_content, 0, 120 );?>
				<?php
					$p_link_apoio = get_post_meta($post->ID, 'p_link_apoio', true );
					if ( ! empty ($p_link_apoio) ){ ?>
						<a href=" <?php echo $p_link_apoio; ?> " target="_blank" title="<?php the_title(); ?>">
							<div class="col-md-3 col-xs-6 img-responsive" >
								<div <?php thumbnail_apoio( 'apoio-home' ); ?> ></div>
							</div>
						</a>
					<?php } ?>
		<?php endwhile; // End the loop. Whew. ?>
	</div>
</div>