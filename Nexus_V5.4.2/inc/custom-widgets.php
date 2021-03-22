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


/* Função cria Widgets */

function load_sidebars(){
	// Menu SideBar
	register_sidebar(
		array(
			'name'				=>'Menu - SideBar (Lateral esquerda)',
			'id'				=>'menu-sidebar',
			'description'		=>'Menu da barra lateral esquerda do site',
			'before_widget'		=>'<div class="navegation-section">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="navegation-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu sidebar Page Contact
	register_sidebar(
		array(
			'name'				=>'Barra lateral - Contato',
			'id'				=>'menu-contato',
			'description'		=>'Barra lateral da página contato',
			'before_widget'		=>'<div class="navegation-section">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="navegation-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu sidebar Post type Estudantes
	register_sidebar(
		array(
			'name'				=>'Barra lateral - Estudantes',
			'id'				=>'menu-estudantes',
			'description'		=>'Barra lateral da seção Estudantes',
			'before_widget'		=>'<div class="navegation-section">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="navegation-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu sidebar Post type Pesquisadores
	register_sidebar(
		array(
			'name'				=>'Barra lateral - Pesquisadores',
			'id'				=>'menu-pesquisadores',
			'description'		=>'Barra lateral da seção Pesquisadores',
			'before_widget'		=>'<div class="navegation-section">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="navegation-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu sidebar Post type Gestores
	register_sidebar(
		array(
			'name'				=>'Barra lateral - Gestores',
			'id'				=>'menu-gestores',
			'description'		=>'Barra lateral da seção Gestores',
			'before_widget'		=>'<div class="navegation-section">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="navegation-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu sidebar Post type Equipe
	register_sidebar(
		array(
			'name'				=>'Barra lateral - Equipe',
			'id'				=>'menu-equipe',
			'description'		=>'Barra lateral da seção Estudantes',
			'before_widget'		=>'<div class="navegation-section">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="navegation-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu sidebar Post type Publicações
	register_sidebar(
		array(
			'name'				=>'Barra lateral - Publicações',
			'id'				=>'menu-publicacoes',
			'description'		=>'Barra lateral da seção Publicações',
			'before_widget'		=>'<div class="navegation-section">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="navegation-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu footer 01
	register_sidebar(
		array(
			'name'				=>'Menu - Footer 01',
			'id'				=>'footer-1',
			'description'		=>'Área de conteúdo no footer',
			'before_widget'		=>'<div class="div-footer">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="footer-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu footer 02
	register_sidebar(
		array(
			'name'				=>'Menu - Footer 02',
			'id'				=>'footer-2',
			'description'		=>'Área de conteúdo no footer',
			'before_widget'		=>'<div class="div-footer">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="footer-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu footer 03
	register_sidebar(
		array(
			'name'				=>'Menu - Footer 03',
			'id'				=>'footer-3',
			'description'		=>'Área de conteúdo no footer',
			'before_widget'		=>'<div class="div-footer">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="footer-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu footer 04
	register_sidebar(
		array(
			'name'				=>'Menu - Footer 04',
			'id'				=>'footer-4',
			'description'		=>'Área de conteúdo no footer',
			'before_widget'		=>'<div class="div-footer">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="footer-title">',
			'after_title'		=>'</h2>'
		)
	);

	// Menu footer 05
	register_sidebar(
		array(
			'name'				=>'Endereços no Footer',
			'id'				=>'footer-5',
			'description'		=>'Área de endereço',
			'before_widget'		=>'<div class="div-footer">',
			'after_widget'		=>'</div>',
			'before_title'		=>'<h2 class="footer-title">',
			'after_title'		=>'</h2>'
		)
	);
}

add_action( 'widgets_init', 'load_sidebars' );
