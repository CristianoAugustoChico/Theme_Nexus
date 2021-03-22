<?php 
/*
* Identifica a URL de taxonomia para exibir o themes category apropriado 
* caso nenhum IF correspondo a URL exibi e front-end.php da custom
*
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
//echo $current_slug; 


if ( $current_slug == 'cat_gestores/videos' ): // se a taxonomia for Vídeos
		get_template_part ( 'template-parts/gestores/category', 'videos' );

	elseif ( $current_slug == 'cat_gestores/outros'): // thems list padrão
		get_template_part ( 'template-parts/gestores/category', 'outros' );

	else: // lista todos o conteúdo da Custom Post
		// Chama o arquivo front-end.php para exibição do conteúdo geral inicial da seção
		get_template_part ( 'template-parts/gestores/front', 'end' );
endif;

?>