<?php 
/*
*
*Feito por: Larissa Georgina Crispim da Silva
*E-mail: larissa.crispim@inpe.br
*
*Tema PGCST, desevolvido para o Centro de Ciências do Sistema Terrestre / INPE - BRASIL.
*
*/
add_action( 'init', 'type_post_equipe' );

function type_post_equipe() {
	$labels = array(
		'name'					=>  _x ( 'equipe', 'post type general name' ),
		'singular_name'			=>  _x ( 'equipe', 'post type singular name' ),
		'add_new'				=>  _x ( 'Adicionar Novo', 'Novo Funcionário' ),
		'add_new_item'			=>  __ ( 'Nome do Equipe' ),
		'edit_item'				=>  __ ( 'Editar Equipe' ),
		'new_item'				=>  __ ( 'Novo Equipe' ),
		'view_item'				=>  __ ( 'Ver Equipe' ),
		'search_items'			=>  __ ( 'Procurar equipe' ),
		'not_found'				=>  __ ( 'Nenhum registro encontrado' ),
		'not_found_in_trash'	=>  __ ( 'Nenhum registro encontrado na lixeira' ),
		'parent_item_colon'		=>  '',
		'menu_name'				=>  'Equipe'
	);

	$args = array (
		'labels'				=>  $labels,
		'public'				=>  true,
		'public_queryable'		=>  true,
		'show_ui'				=>  true,
		'query_var'				=>  true,
		'rewrite'				=>  true,
		'capability_type'		=>  'post',
		'has_archive'			=>  true,
		'hierarchical'			=>  false,
		'menu_position'			=>  5,
		'menu_icon'				=>  'dashicons-businessman',
		'taxonomies'			=>  array ( 'categorie' ),
		'supports'				=>  array ( 'title', 'thumbnail', 'tags' )
	);

	register_post_type ( 'equipe' , $args );
	flush_rewrite_rules ();
}

//adicionando opçao categoria dentro do type post publicacao
register_taxonomy( "cat_equipe", "equipe" ,
	array(
		"label"					=>  "Tipo Professor",
		"singular_label"		=>  "Tipo Professor",
		"rewrite"				=>  true,
		"hierarchical"			=>  true
	)
);


function equipe_metabox () {
	$screens = array ( 'equipe' );

	foreach ( $screens as $screen ) {
		add_meta_box (
			'equipe_meta_box',
			'Configuração Equipe (Obrigatório)',
			'equipe_metabox_callback',
			$screen,
			'normal',
			'high'
		);
	}
}
add_action ( 'add_meta_boxes', 'equipe_metabox', 1);


function equipe_metabox_callback ( $post ) {
	wp_nonce_field ( 'equipe_custom_metabox', 'equipe_custom_metabox_nonce' );


	$p_lattes   = get_post_meta		( $post->ID, 'p_lattes',		true );
	$p_email    = get_post_meta		( $post->ID, 'p_email',			true );
	$p_telefone = get_post_meta		( $post->ID, 'p_telefone',		true );
	$p_institu	= get_post_meta		( $post->ID, 'p_institu',		true );



	echo '<strong> Link do Currículo Lattes </strong><br>';
	echo '<textarea name="p_lattes" class="widefat" placeholder="Campo Obrigatório">' . esc_html ( $p_lattes ). '</textarea>';
	echo '<br><br>';
	echo '<strong> Email </strong><br>';
	echo '<textarea name="p_email" class="widefat" placeholder="Campo Obrigatório">' . esc_html ( $p_email ) . '</textarea>';
	echo '<br><br>';
	echo '<strong>Telefone</strong><br>';
	echo '<textarea name="p_telefone" class="widefat" placeholder="Campo Obrigatório">' . esc_html ( $p_telefone ) . '</textarea>';
	echo '<br><br>';
	echo '<strong>Instituição</strong><br>';
	echo '<textarea name="p_institu" class="widefat" placeholder="Campo Obrigatório">' . esc_html ( $p_institu ) . '</textarea>';
}


function equipe_save_custom_metabox_data ( $post_id ) {
	if ( ! isset ( $_POST[ 'equipe_custom_metabox_nonce' ] ) ){
		return;
	}

	if ( ! wp_verify_nonce ( $_POST[ 'equipe_custom_metabox_nonce' ], 'equipe_custom_metabox' ) ) {
		return;
	}

	if ( defined ( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) {
		return;
	}

	if ( isset ( $_POST[ 'post_type' ] ) && 'contato' == $_POST['post_type'] ) {
		if ( ! current_user_can ( 'edit_post', $post_id ) ) {
			return;
		}
	}

	$p_lattes       =   isset ( $_POST[ 'p_lattes'   ] )    ? $_POST[ 'p_lattes'    ]	: null;
	$p_email        =   isset ( $_POST[ 'p_email'    ] )    ? $_POST[ 'p_email'     ]	: null;
	$p_telefone     =   isset ( $_POST[ 'p_telefone' ] )    ? $_POST[ 'p_telefone'  ]	: null;
	$p_institu		=	isset ( $_POST[ 'p_institu' ])	? $_POST[ 'p_institu'	]	: null;

	update_post_meta ( $post_id, 'p_lattes',    $p_lattes   );
	update_post_meta ( $post_id, 'p_email',     $p_email    );
	update_post_meta ( $post_id, 'p_telefone',  $p_telefone );
	update_post_meta ( $post_id, 'p_institu',   $p_institu  );
}
add_action ( 'save_post', 'equipe_save_custom_metabox_data' );

