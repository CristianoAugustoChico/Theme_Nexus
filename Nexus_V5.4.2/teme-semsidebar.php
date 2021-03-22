<?php
/**
* Template Name: Sem Sidebar
*
* Thema Nexus - Centro de Ciência do Istema Terrestre - CCST / INPE
* Author: Ryan Douglas da Silva <ryandouglasdasilva@outlook.com>
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



	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'template-parts/page/page', 'semsidebar' );

	// End the loop.
	endwhile;
	?>

<?php get_footer(); ?>