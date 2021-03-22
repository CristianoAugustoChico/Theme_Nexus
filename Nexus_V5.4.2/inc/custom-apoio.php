<?php
/*
*
*Custom implement publication section
*
*Feito por: Larissa Georgina Crispim da Silva
*E-mail: larissa.gcrs@gmail.com
*
*Tema Dados Clima, desevolvido para o Centro de Ciências do Sistema Terrestre / INPE - BRASIL.
*
*Esta custom adiciona a seção de publicações na área administrativa do WordPress.
*
*/

add_action('init', 'type_post_apoio');

function type_post_apoio(){
	$labels = array(
		'name' 					=> _x( 'Apoio', 'post type general name' ),
		'singular_name' 		=> _x( 'Apoio', 'post type singular name' ),
		'add_new' 				=> _x( 'Adicionar Novo', 'Novo item' ),
		'add_new_item' 			=> __( 'Novo Apoiador' ),
		'edit_item' 			=> __( 'Editar Apoiador' ),
		'new_item' 				=> __( 'Novo Apoiador' ),
		'view_item' 			=> __( 'Ver Apoiador' ),
		'search_items' 			=> __( 'Procurar Apoiadores'),
		'not_found' 			=> __( 'Nenhum registro encontrado' ),
		'not_found_in_trash' 	=> __( 'Nenhum registro encontrado na lixeira' ),
		'parent_item_colon' 	=> '',
		'menu_name' 			=> 'Apoio'
	);

	$args = array(
		'labels' 				=> $labels,
		'public' 				=> true,
		'public_queryable' 		=> true,
		'show_ui' 				=> true,
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'capability_type' 		=> 'post',
		'has_archive' 			=> true,
		'hierarchical' 			=> false,
		'menu_position' 		=> 20,
		'menu_icon'				=> 'dashicons-groups',
		'register_meta_box_cb' 	=> 'apoio_meta_box',
		'supports' 				=> array( 'title','thumbnail' )
	);

	register_post_type( 'apoio' , $args );
	flush_rewrite_rules();
}

// incremento
register_taxonomy(
	"cat_apoio",
	"apoio",
		array(
			"label" 				 => "Categoria - Apoio",
			"singular_label" 		 => "Categoria",
			"rewrite" 				 => true,
			"hierarchical" 			 => true,
	)
);
// fim do incremento

function apoio_metabox() {
	// Tipos de post para a metabox
	$screens = array( 'apoio' );

	foreach ( $screens as $screen ) {
		add_meta_box(
			'apoio_meta_box',							// ID da Meta Box
			'Informação complementar ( Obrigatório )',	// Título
			'apoio_metabox_callback',					// Função de callback
			$screen,									// Local onde ela vai aparecer
			'normal',									// Contexto
			'high'										// Prioridade
		);
		
	} // foreach
} // Cria a meta_box

add_action( 'add_meta_boxes', 'apoio_metabox', 1 );


function apoio_metabox_callback( $post ) {

	// Adiciona um campo nonce para verificação posterior
	wp_nonce_field( 'apoio_custom_metabox', 'apoio_custom_metabox_nonce' );

	// Configura os campos
	$p_link_apoio=get_post_meta( $post->ID, 'p_link_apoio', true);

	echo '<strong>Link para o site do apoiador: Ex: http://www.ccst.inpe.br</strong><br>';
	echo '<textarea name="p_link_apoio" class="widefat" placeholder="Campo obrigatório">' . esc_html( $p_link_apoio ) . '</textarea>';
}

function apoio_save_custom_metabox_data( $post_id ) {

	// Verifica o campo nonce
	if ( ! isset( $_POST['apoio_custom_metabox_nonce'] ) ) {
		return;
	}

	// Verifica se o campo nonce é válido
	if ( ! wp_verify_nonce( $_POST['apoio_custom_metabox_nonce'], 'apoio_custom_metabox' ) ) {
		return;
	}

	// Se o formulário ainda não foi enviado (estiver fazendo autosave) 
	// não faremos nada
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Verifica as permissões do usuário (mínimo: editar post).
	if ( isset( $_POST['post_type'] ) && 'contato' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* Perfeito, agora vamos aos campos. */

	$p_link_apoio = isset( $_POST['p_link_apoio'] ) ? $_POST['p_link_apoio'] : null;
	

	// Atualiza os dados no BD
	
	update_post_meta( $post_id, 'p_link_apoio' , $p_link_apoio );
	
}
add_action( 'save_post', 'apoio_save_custom_metabox_data' );