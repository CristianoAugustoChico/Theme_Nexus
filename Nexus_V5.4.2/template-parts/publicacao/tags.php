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


<?php
$categoria = get_the_tags($post->id, true );
	if ( ! empty( $categoria ) ) {
		$categoria = get_the_tags($post->id);

		printf('<strong> Key words: <strong> ');
			foreach ($categoria as $category ) {
				printf( ' <a href="%1$s" rel="tag">%2$s</a>,',
					esc_url( get_category_link( $category->term_id ) ),
					esc_html( $category->name )
				);
			}
	}
?>