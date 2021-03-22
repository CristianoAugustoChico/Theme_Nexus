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
	<div class="col-md-12">
		<header>
			<!-- header da página -->
			<?php get_template_part ( 'template-parts/page/page', 'header' ); ?>
		</header>
	</div>
</div>

<div class="row">
	<div class="col-md-12 migalha">
		<!-- Migalha -->
		<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>
	</div>
</div>


<div class="row">
	<!-- SideBar -->
	<?php get_sidebar(); ?>

	<div id="content" class="col-md-8 col-md-offset-1">
		<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
			<section id="content-section" class=" post-content">
			<!-- conteúdo da publicação -->
				<!-- Content -->
					<?php the_content(); ?>
			<!-- fim do conteúdo da prublicação -->
			</section>
		</article>
	</div>
</div>