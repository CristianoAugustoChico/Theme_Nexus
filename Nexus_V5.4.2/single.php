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

<?php get_header(); ?>

<?php

if ( get_post_type() == 'estudantes' ): // verifica se o single pertence a custom e executa a condição
	include ( get_template_part ( 'template-parts/estudantes/category', 'condicion' ));
endif;

if ( get_post_type() == 'gestores' ): // verifica se o single pertence a custom e executa a condição
	include ( get_template_part ( 'template-parts/gestores/category', 'condicion' ));
endif;

if ( get_post_type() == 'pesquisadores' ): // verifica se o single pertence a custom e executa a condição
	include ( get_template_part ( 'template-parts/pesquisadores/category', 'condicion' ));
endif;



	// Get post standar wordpress
	if ( get_post_type() == 'post' ): // se type for post padrão do wordpress
		if ( have_posts() ):
			while ( have_posts() ) : the_post();
				get_template_part ( 'template-parts/post/post', 'content' ); 
			endwhile;
			else :
				get_template_parts( 'content', 'none' );
		endif;
	endif;
?>

<?php get_footer(); ?>