<?php
/**
* Template Name: Home
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


<?php get_header(); ?>

<!-- Slider com fecha e abre container -->
	 <?php get_template_part ( 'template-parts/frontpage/slider' ); ?>

	 <?php get_template_part ( 'template-parts/frontpage/page' ); ?>


	<!-- Notícias e Vídeos -->
	<div id="border-seccao">
		<div class="row">
			<div class="col-md-4">
				<h1 class="title-seccao">Notícias e vídeos</h1>
			</div>
		</div>
			<div class="row">
				<?php get_template_part ( 'template-parts/frontpage/news' ); ?>
			</div>
	</div>

		<!-- Divulgação científica -->
		 <?php //get_template_part ( 'template-parts/frontpage/divulgacao' ); ?>

		<!-- Apoiadores -->
		<?php get_template_part ( 'template-parts/footer/apoio' ); ?>

<?php get_footer(); ?>