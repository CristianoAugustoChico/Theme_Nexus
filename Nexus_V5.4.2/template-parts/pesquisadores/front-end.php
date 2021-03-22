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



<style type="text/css">
	#numerador{
		display: none
	}
</style>


<?php
	include 'taxonomia.php'; // chama o identificador de taxonomia
	get_template_part ( 'template-parts/pesquisadores/topo' );
?>

<div class="row">
	<div class="col-md-12 migalha">
		<!-- Migalha -->
		<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>
	</div>
</div>

<div class="row">
	<!-- Barra de menu lateral exclusiva -->
	<?php get_template_part ( 'template-parts/pesquisadores/sidebar' ); ?>


	<div class="col-md-8 col-md-offset-1">
		<?php get_template_part ( 'template-parts/pesquisadores/section', 'text' ); ?>
	</div>
</div>

<!-- 2 colunas -->
<div id="border-seccao">
	<div class="row">
		<!-- bloco de vídeos -->
		<div class="col-md-4">
			<?php get_template_part ('template-parts/pesquisadores/last', 'video'); ?>
		</div>

		<!-- bloco de artigos -->
		<div class="col-md-7 col-md-offset-1">
			<?php get_template_part ( 'template-parts/pesquisadores/last', 'publicacao' ); ?>
		</div>
	</div>
</div>

<!-- bloco de notícias (categoria noticias e filho) -->
<div id="border-seccao">
	<?php get_template_part ( 'template-parts/pesquisadores/last', 'news' ); ?>
</div>