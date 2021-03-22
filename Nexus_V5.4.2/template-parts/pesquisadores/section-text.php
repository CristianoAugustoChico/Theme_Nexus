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


<div id="divulgacao">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div id="content" class="internas span9" >
			<section id="content-section">
				<!-- Título da página-->
				<?php query_posts('page_id=123'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<header>
						<?php the_title('<h1 class="title-seccao">', '</h1>'); ?>
					</header>
					<!-- Content -->
					<p><?php the_content(); ?></p>
				<?php endwhile; endif; wp_reset_query(); ?>
			</section>
		</div>
	</article>
</div>