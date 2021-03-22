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


function load_scripts(){
	//primeiro temos que chamar o style.css
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	//chamar se tiver, outras folhas de estilo, com diretorio
	wp_enqueue_style( 'custom.css', get_theme_file_uri( '/assets/css/custom.css' ), array( 'style' ), '1.0' );

	//chamando Google Fonts Roboto
	wp_enqueue_style( 'font-roboto', 'http://fonts.googleapis.com/css?family=Roboto:100,300,400', 'all' );

	//chamando font awesome (icones)
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', 'all' );

}

//acao para chamar funcao acima, senao wordpress nao reconhece scripts
add_action( 'wp_enqueue_scripts', 'load_scripts' );



/* Habilita o campo resumo as páginas */
add_post_type_support( 'page', 'excerpt' );

/* Habilita thumbnails the theme */
add_theme_support( 'post-thumbnails' ); 

/* Habilita personalizar o logo do site */
add_theme_support( 'custom-logo' );

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'width'			=> 323,
		'height'		=> 117,
		'flex-width'	=> false,
		'flex-heght'	=> false,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );




/**
*	bootstrap itens dev.
************************************************************************************************/



/**
*	Register Customs BreadCrumbs
**/

function wp_custom_breadcrumbs() {

$showOnHome 	= 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
$delimiter 		= '&raquo;'; // delimiter between crumbs
$home 			= 'Home'; // text for the 'Home' link
$showCurrent 	= 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
$before 		= '<span class="pathway">'; // tag before the current crumb
$after 			= '</span>'; // tag after the current crumb

global $post;
$homeLink = get_bloginfo('url');

if (is_home() || is_front_page()) {

	if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';

} else {

	echo '<div id="crumbs"><a href="' . $homeLink . '" >' . $home . '</a> ' . $delimiter . ' ';

	if ( is_category() ) {
		$thisCat = get_category(get_query_var('cat'), false);
		if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
		echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;
 
	} elseif ( is_search() ) {
		echo $before . 'Resultados para "' . get_search_query() . '"' . $after;
 
	} elseif ( is_day() ) {
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
		echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
	echo $before . get_the_time('d') . $after;

	} elseif ( is_month() ) {
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
		echo $before . get_the_time('F') . $after;

	} elseif ( is_year() ) {
		echo $before . get_the_time('Y') . $after;

	} elseif ( is_single() && !is_attachment() ) {
		if ( get_post_type() != 'post' ) {
		$post_type = get_post_type_object(get_post_type());
		$slug = $post_type->rewrite;
		echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
		if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
		} else {
			$cat = get_the_category(); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
			echo $cats;
			if ($showCurrent == 1) echo $before . get_the_title() . $after;
		}

	} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		$post_type = get_post_type_object(get_post_type());
		echo $before . $post_type->labels->singular_name . $after;

	} elseif ( is_attachment() ) {
		$parent = get_post($post->post_parent);
		$cat = get_the_category($parent->ID); $cat = $cat[0];
		echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
		echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
		if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

	} elseif ( is_page() && !$post->post_parent ) {
		if ($showCurrent == 1) echo $before . get_the_title() . $after;

	} elseif ( is_page() && $post->post_parent ) {
		$parent_id  = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
			$parent_id  = $page->post_parent;
		}
		$breadcrumbs = array_reverse($breadcrumbs);
		for ($i = 0; $i < count($breadcrumbs); $i++) {
		echo $breadcrumbs[$i];
		if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
		}
	if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

	} elseif ( is_tag() ) {
		echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

	} elseif ( is_author() ) {
		global $author;
		$userdata = get_userdata($author);
	echo $before . 'Articles posted by ' . $userdata->display_name . $after;

	} elseif ( is_404() ) {
		echo $before . 'Error 404' . $after;
	}

	if ( get_query_var('paged') ) {
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
		echo __('Page') . ' ' . get_query_var('paged');
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
	}

	echo '</div>';

}
} // end Register Bootstrap breadcrumbs





/**
*	Register BootStrap Pagination
**/

function wp_bootstrap_pagination( $args = array() ) {

	$defaults = array(
		'range'           => 4,
		'custom_query'    => FALSE,
		'previous_string' => __( 'Previous', 'text-domain' ),
		'next_string'     => __( 'Next', 'text-domain' ),
		'before_output'   => '<div class="post-nav"><ul class="pager">',
		'after_output'    => '</ul></div>'
	);

	$args = wp_parse_args( 
		$args, 
		apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
	);

	$args['range'] = (int) $args['range'] - 1;
	if ( !$args['custom_query'] )
		$args['custom_query'] = @$GLOBALS['wp_query'];
	$count = (int) $args['custom_query']->max_num_pages;
	$page  = intval( get_query_var( 'paged' ) );
	$ceil  = ceil( $args['range'] / 2 );

	if ( $count <= 1 )
		return FALSE;

	if ( !$page )
		$page = 1;

	if ( $count > $args['range'] ) {
		if ( $page <= $args['range'] ) {
			$min = 1;
			$max = $args['range'] + 1;
		} elseif ( $page >= ($count - $ceil) ) {
			$min = $count - $args['range'];
			$max = $count;
		} elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
			$min = $page - $ceil;
			$max = $page + $ceil;
		}
	} else {
		$min = 1;
		$max = $count;
	}

	$echo = '';
	$previous = intval($page) - 1;
	$previous = esc_attr( get_pagenum_link($previous) );
	
	$firstpage = esc_attr( get_pagenum_link(1) );
	if ( $firstpage && (1 != $page) )
		//$echo .= '<li class="previous"><a href="' . $firstpage . '">' . __( '<<', 'text-domain' ) . '</a></li>';
	if ( $previous && (1 != $page) )
		$echo .= '<li><a href="' . $previous . '" title="' . __( '<', 'text-domain') . '"> <b> < </b> </a></li>';
	
	if ( !empty($min) && !empty($max) ) {
		for( $i = $min; $i <= $max; $i++ ) {
			if ($page == $i) {
				$echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 2, '0', STR_PAD_LEFT ) . '</span></li>';
			} else {
				$echo .= sprintf( '<li><a href="%s">%002d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
			}
		}
	}

	$next = intval($page) + 1;
	$next = esc_attr( get_pagenum_link($next) );
	if ($next && ($count != $page) )
		$echo .= '<li><a href="' . $next . '" title="' . __( '>', 'text-domain') . '"> <b> > </b> </a></li>';

	$lastpage = esc_attr( get_pagenum_link($count) );
	if ( $lastpage ) {
		//$echo .= '<li class="next"><a href="' . $lastpage . '">' . __( '>>', 'text-domain' ) . '</a></li>';
	}
	if ( isset($echo) )
		echo $args['before_output'] . $echo . $args['after_output'];
}
// End Register Bootstrap pagination






/**
*	Register Menu BootStrap
**/

add_action( 'after_setup_theme', 'bootstrap_setup' );
 
if ( ! function_exists( 'bootstrap_setup' ) ):
	function bootstrap_setup(){
		 add_action( 'init', 'register_menu' );
		function register_menu(){
		register_nav_menu( 'top-bar', 'Bootstrap Top Menu' );
	}

class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth ) {
		$indent = str_repeat( "\t", $depth );
		$output    .= "\n$indent<ul class=\"dropdown-menu\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$li_attributes = '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = ($args->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children)        ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		if ( !$element )
		return;
		$id_field = $this->db_fields['id'];
		//display this element
		if ( is_array( $args[0] ) )
		$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
			$cb_args = array_merge( array(&$output, $element, $depth), $args);
			call_user_func_array(array(&$this, 'start_el'), $cb_args);

		$id = $element->$id_field;

		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
		foreach( $children_elements[ $id ] as $child ){
			if ( !isset($newlevel) ) {
				$newlevel = true;
				//start the child delimiter
				$cb_args = array_merge( array(&$output, $depth), $args);
				call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
			}
			$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
		}
		unset( $children_elements[ $id ] );
		}

		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}

		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);
		}
	}
}
endif;
// End Register Bootstrap Menu




/**
*	Register Customs Thumbs
**/


if ( function_exists( 'add_theme_support' ) ) { 
	 add_theme_support( 'post-thumbnails' );
	 set_post_thumbnail_size('full'); // default Post Thumbnail dimensions (cropped)
}

/** Register thumbnails from the list news**/
function thumbnail_noticia ( $tamanho = 'thumbnail' ) {
	global $post;
	$get_post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $tamanho, false, '' );
	$get_thumb_padrao   =  "  style=\"widht:100%; height: 400px; background-size: 100% 100% !important; background: url('http://www.ccst.inpe.br/wp-content/uploads/2016/02/padrao.png' )\"  ";

	if ( has_post_thumbnail() ) {
		echo 'style="widht:100%; height: 400px; background-size: 100% 100% !important;  background: url('.$get_post_thumbnail[0].' )" ';
	}
	else {
		echo "$get_thumb_padrao";
	}
}


function thumbnail_equipe ( $tamanho = 'thumbnail' ) {
	global $post;
	$get_post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $tamanho, false, '' );
	$get_thumb_padrao   =  "style=\"height: 400px; background-size: cover !important; background-position: center !important; background:#000 url('http://www.ccst.inpe.br/wp-content/uploads/2016/02/padrao.png' )\"  ";

	if ( has_post_thumbnail() ) {
		echo 'style="height: 400px; background-size: cover !important; background-position: center !important;  background:#000 url('.$get_post_thumbnail[0].' )"';
	}
	else {
		echo "$get_thumb_padrao";
		}
}


function thumbnail_apoio ( $tamanho = 'thumbnail' ) {
	global $post;
	$get_post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $tamanho, false, '' );
	echo 'style="height: 150px;  background-size: cover; background-position: center !important; background-repeat:no-repeat;  background: #fff url('.$get_post_thumbnail[0].')"';
}


function thumbnail_video ( $tamanho = 'thumbnail' ) {
	global $post;
	$get_post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $tamanho, false, '' );
	echo $get_post_thumbnail[0];
}




/**
*	Adiciona a meta box para upload do arquivo
*/

add_action( 'add_meta_boxes', 'my_meta_box' );

function my_meta_box()
{
	add_meta_box( 'my_meta_uploader', 'Upload de arquivo', 'my_meta_uploader_setup', '', 'normal', 'high' );
}

/*
 * Adiciona os campos para a meta box de upload
 */
function my_meta_uploader_setup()
{
	global $post;

	// Procura o valor da chave 'upload_file'
	$meta = get_post_meta( $post->ID, 'upload_file', true );
	?>

	<p>
		1- Clique no botão para fazer o upload de um documento. 2 - Clique no boão<b> URL do arquivo</b>. 3 - Após o término do upload, clique em <b>Inserir no post</b>.
	</p>

	<p>
		<input id="upload_file" type="text" size="80" name="upload_file" style="width: 85%;" value="<?php if( ! empty( $meta ) ) echo $meta; ?>" />
		<input id="upload_file_button" type="button" class="button" value="Fazer upload" />
	</p>

	<?php
}


/*
*	Salva os dados da nossa custom meta box
*/

add_action( 'save_post', 'my_meta_uploader_save' );

function my_meta_uploader_save( $post_id ) {

	if ( ! current_user_can( 'edit_post', $post_id ) ) return $post_id;

	// Recebe o valor que foi enviado pelo media uploader
	$arquivo = $_POST['upload_file'];

	// Adiciona a chave upload_file ou atualiza seu valor
	add_post_meta( $post_id, 'upload_file', $arquivo, true ) or update_post_meta( $post_id, 'upload_file', $arquivo );

	return $post_id;
}



/*
 * Adiciona o script que replica o uploader padrão do WordPress
 */
add_action( 'admin_head', 'my_meta_uploader_script' );

/*
 * O novo media uploader, baseado no post e nas discussões do site abaixo
 * http://www.webmaster-source.com/2010/01/08/using-the-wordpress-uploader-in-your-plugin-or-theme/
 */
function my_meta_uploader_script() { ?>
	<script type="text/javascript">
		jQuery(document).ready(function() {

			var formfield;
			var header_clicked = false;

			jQuery( '#upload_file_button' ).click( function() {
				formfield = jQuery( '#upload_file' ).attr( 'name' );
				tb_show( '', 'media-upload.php?TB_iframe=true' );
				header_clicked = true;

				return false;
			});

			// Guarda o uploader original
			window.original_send_to_editor = window.send_to_editor;

			// Sobrescreve a função nativa e preenche o campo com a URL
			window.send_to_editor = function( html ) {
				if ( header_clicked ) {
					fileurl = jQuery( html ).attr( 'href' );
					jQuery( '#upload_file' ).val( fileurl );
					header_clicked = false;
					tb_remove();
				}
				else
				{
					window.original_send_to_editor( html );
				}
			}
		});
	</script>
<?php
}





/**
*	Register Customs
**/


require get_parent_theme_file_path ( '/inc/custom-widgets.php' ); // Chama widgets

require get_parent_theme_file_path ( '/inc/custom-apoio.php' ); // Chama seção apoiadores

require get_parent_theme_file_path ( '/inc/custom-docentes.php' ); // Chama seção equipe

require get_parent_theme_file_path ( '/inc/custom-publicacao.php' ); // Chama seção de papers



require get_parent_theme_file_path ( '/inc/custom-estudantes.php' ); // Chama seção Estudantes

require get_parent_theme_file_path ( '/inc/custom-pesquisadores.php' ); // Chama seção Pesquisadores


require get_parent_theme_file_path ( '/inc/custom-gestores.php' ); // Chama seção Gestores

