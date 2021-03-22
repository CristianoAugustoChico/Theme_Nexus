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
 global $post;
	// Chama o genero
	$terms = get_the_terms($post->id, 'cat_gestores');
	$slug_genero = $terms[0]->slug;
	$nome_genero = $terms[0]->name;
	// Chama o ID do Post
	$postid = get_the_ID();
?>