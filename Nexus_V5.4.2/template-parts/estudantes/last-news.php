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


<div class="row">
	<div class="col md-12">
		<h1 class="title-seccao">Notícias</h1>
	</div>
</div>
<div class="row">
	<?php // Exibe uma página inicial para a custom post estudantes
		$args = array( 'post_type' => 'estudantes', 'cat_estudantes' => 'outros', 'posts_per_page' => 4  );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); 
	?>
		<!-- Pega o título de cada post da custom e lista  -->
		<article id="thumb-destaque">
			<a href="<?php the_permalink(); ?>">
				<div id="post-<?php the_ID(); ?>" class="col-md-6" >
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
	<?php endwhile; ?>
</div>
<div class="row">
	<div class="col md-126">
		<!-- Leia mais -->
			<div id="leia-mais" class="col-md-12">
				<a href="/nexus/cat_estudantes/outros/"></a>
			</div>
	</div>
</div>