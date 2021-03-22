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



<h1 class="title-seccao">Vídeos</h1>
<div id="thumb-video">
	<?php // Exibe uma página inicial para a custom post estudantes
		$args = array( 'post_type' => 'gestores', 'cat_gestores' => 'videos', 'posts_per_page' => 1 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); 
	?>
		<!-- Conteúdo -->
		<article>
			<a href="<?php the_permalink(); ?>">
				<div id="post-<?php the_ID(); ?>" class="col-md-12" >
					<div class="row" >
						<div class="col-md-12" style="padding: 0px">
							<img src="<?php thumbnail_video('full'); ?> " align="responsive" class="img-responsive" alt="<?php the_title(); ?>">
						</div>
					</div>
					<!-- title/content -->
					<div class="row">
						<div class="col-md-12 text-destaque titulo">
							<h1><?php the_title('<strong>', '</strong>'); ?></h1>
							<p>
							<?php
								// Mostra os primeiros 500 caracteres
								$excerpt = substr( $post->post_excerpt, 0, 300 );
								// Imprime a variável
								echo $excerpt , '[	...]';
							?>
							</p>
						</div>
					</div>
				</div>
			</a>
		</article>
		<!-- fim do conteúdo -->
	<?php endwhile; ?>
</div>
<!-- Leia mais -->
<div class="row">
	<div id="leia-mais" class="col-md-12">
		<a href="/nexus/cat_gestores/videos/"></a>
	</div>
</div>