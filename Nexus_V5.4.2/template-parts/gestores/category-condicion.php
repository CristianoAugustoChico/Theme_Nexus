<?php 
/*
* Condições para aplicar a  single post da Custom Estudantes 
* Identifica a taxonomi e aplica o single post themes
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



<?php
include 'taxonomia.php'; // chama o identificador de taxonomia

while ( have_posts() ) : the_post();
	//Identifica a taxonomia para aplicar a Single correta
	if ( $slug_genero == 'videos'): // se a taxonomia for Videos
			//Aplica theme Sigle Post personalizado, atualmente usa o Sigle padrão
			//echo 'categoria: ';
			get_template_part ( 'template-parts/gestores/content' );

		elseif ( $slug_genero == 'outros' ): // se a taxonomia for Outros
			//Aplica theme Sigle Post personalizado, atualmente usa o Sigle padrão
			//echo 'categoria: ';
			get_template_part ( 'template-parts/gestores/content' );

		else: // se a taxonomia não for nenhuma das condições acima
			//Aplica theme Sigle Post personalizado, atualmente usa o Sigle padrão
			//echo 'categoria: ';
			get_template_part ( 'template-parts/gestores/content' );
	endif;
endwhile;
?>