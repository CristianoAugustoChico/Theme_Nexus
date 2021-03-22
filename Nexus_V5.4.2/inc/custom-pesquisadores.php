<?php
/**
 * Custom implement publication section 
 *
 * Padrão Governo Federal - Basil functions and definitions
  * Author:Cristiano Augusto Cunha Silva <cristianoaugustocs@gmail.com>
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage CCST-GOV
 * @since 1.1
 * 
 * Esta custom adiciona a seção de Divulgação Científica na área administrativa do wordpress
 * 
 */



add_action('init', 'type_post_pesquisadores');
 
	function type_post_pesquisadores() {
		$labels = array(
			'name' 				 => _x('Seção Pesquisadores', 'post type general name'),
			'singular_name' 	 => _x('Seção Pesquisadores', 'post type singular name'),
			'add_new' 			 => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' 		 => __('Novo Item'),
			'edit_item' 		 => __('Editar Item'),
			'new_item' 			 => __('Novo Item'),
			'view_item' 		 => __('Ver Item'),
			'search_items'		 => __('Procurar Itens'),
			'not_found'			 => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon'  => '',
			'menu_name' 		 => 'Pesquisadores'
		);

		$args = array(
			'labels' 			 => $labels,
			'public' 			 => true,
			'public_queryable' 	 => true,
			'show_ui' 			 => true,
			'query_var' 		 => true,
			'rewrite' 			 => true,
			'capability_type' 	 => 'post',
			'has_archive' 		 => true,
			'hierarchical' 		 => true,
			'menu_position' 	 => 5,
			'menu_icon' 		 => 'dashicons-media-document',
			'show_in_rest'		 => true,
			'taxonomies' 		 => array(''),
			//'taxonomies' 		 => array('post_tag'),
			'supports' 			 => array('editor','title','excerpt','thumbnail')
		);

		register_post_type( 'pesquisadores' , $args );
		flush_rewrite_rules();
	}

register_taxonomy(
	"cat_pesquisadores",
	 "pesquisadores",
	 array(
		"label" 				 => "Categoria - Pesquisadores",
		"singular_label" 	 	 => "Categoria",
		"rewrite" 			 	 => true,
		"hierarchical" 		 	 => true,
		"show_in_rest"		 	 => true,
	)
);