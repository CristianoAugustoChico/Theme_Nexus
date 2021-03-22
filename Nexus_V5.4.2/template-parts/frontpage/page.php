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


</div> <!-- fecha container de seção anterior -->
<section>
	<div id="border-none" class="container-fluid" style="background-color: #f2f2f3">
		<div id="border-none" class="container">
			<!-- Apresentação -->
			<div id="apresentacao" class="col-md-12">
				<div class="row">
					<?php query_posts('page_id=9'); // Abre o Loop
						if ( have_posts() ): while ( have_posts() ): the_post();?>
						<article>
							<!-- thumb-->
							<div id="logo-thumb" class="col-md-4 hidden-xs">
								<img src="<?php bloginfo('template_directory');?>/assets/img/logo_nexus.png" align="responsive" class="img-responsive">
							</div>
							<!-- content -->
							<div id="text-apresentacao" class="col-md-8">
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<?php the_excerpt(); ?>
							</div>
						</article>
						<div id="leia-mais" class="col-md-12">
							<a href=" <?php the_permalink(); ?>" title="<? the_title(); ?>"></a>
						</div>
					<?php endwhile; endif; wp_reset_query(); ?> <!-- Fecha o Loop -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- abre container de seção abeixo -->
<div class="container">