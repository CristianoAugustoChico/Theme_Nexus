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



<!-- Ultimas publicações -->
<section>
	<div id="border-none" class="container-fluid hidden-xs">
		<div class="last-papers">
			<div id="border-none" class="container">
				<div class="col-md-7">
					<h1 class="text-left title-publicacoes">Últimas Publicações</h1>
					<!-- Montar Loop que apresentou problemas no PHP 7 -->
				</div>

				<div class="col-md-4 col-md-offset-1">
					<div class="row">
						<div class="col-md-12">
							<?php query_posts('page_id=157'); // Abre o Loop
							if ( have_posts() ): while ( have_posts() ): the_post();?>
							<article>
								<!-- thumb-->
								<h1 class="text-left title-publicacoes"><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</article>
							<?php endwhile; endif; wp_reset_query(); ?> <!-- Fecha o Loop -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<center>
								<a href="http://nexus.ccst.inpe.br/publicacao/">
									<div class="text-center tb-publicacao">
								 		Veja a lista completa<br>de publicações 
									</div>
								</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- abre container de seção abeixo -->

<div class="container">