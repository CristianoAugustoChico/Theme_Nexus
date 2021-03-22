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