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


<section>
	<div class="col-md-5">
		<div id="thumb-video">
			<?php
				$tpl = 1;
				$lastposts = get_posts('numberposts=4'); // Post e nome categoria
				foreach($lastposts as $post) :  setup_postdata($post);
				$domsxe = simplexml_load_string(get_the_post_thumbnail());
				$thumbnailsrc = $domsxe->attributes()->src;
				if($tpl == 1):
			?>
				<!-- Section destaque -->
				<!-- thumb -->
				<article>
					<div class="row">
						<div class="col-md-12">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php thumbnail_video('full'); ?> " align="responsive" class="img-responsive" alt="<?php the_title(); ?>">
							</a>
						</div>
					</div>
					<!-- title -->
					<div class="row">
						<div class="col-md-12 titulo">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title('<strong>', '</strong>'); ?></a></h1>
						</div>
					</div>
					<!-- content -->
					<div class="row">
						<div class="col-md-12">
							<p>
							<?php
							 	// Mostra os primeiros 500 caracteres
								$excerpt = substr( $post->post_excerpt, 0, 500 );
								// Imprime a variável
								echo $excerpt , '[...]';
							?>
						</p>
						</div>
					</div>
				</article>
			</div>
		<!-- Leia mais -->
	</div>
</section>
		<?php endif; if($tpl != 1): ?>
		
		<!-- Section menor -->
		<section>
			<div class="col-md-6 col-md-offset-1">
				<div id="noticias">
						<article>
							<div class="row news">
								<div id="border-none" class="col-md-4 hidden-xs">
									<a href="<?php the_permalink(); ?>"> 
										<img src="<?php thumbnail_video('full'); ?> " align="responsive" class="img-responsive" alt="<?php the_title(); ?>">
										</a>
									</a>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-12 titulo">
											<h1><a href="<?php the_permalink(); ?>"><?php the_title('<strong>', '</strong>'); ?></a></h1>
										</div>
									</div>
								</div>
							</div>
						</article>
					<!-- Leia mais -->
				</div>
			</div>
		</section>

	<?php endif; $tpl++; endforeach; ?> 

	<div class="row">
		<div id="leia-mais" class="col-md-12">
			<a href="category/noticias/"></a>
		</div>
	</div>

	</div>
</section>