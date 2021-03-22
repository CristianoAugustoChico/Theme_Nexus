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


<div class="row">
	<div class="col-md-12">
		<header>
			<?php
			// Chama a taxonomia da Custom
			$args = array( 'post_type' => 'publicacao');
			$loop = new WP_Query( $args );

			// chama a terms (subCategoria) do post exibido
			$terms = get_the_terms($post->id, 'cat_publicacao'); //cat_genero é a taxonomia da subCategoria da seção publicação
			$slug_genero = $terms[0]->slug;
			$nome_genero = $terms[0]->nome;

			// Titulo
			$category = get_the_category(); 
			echo '<h1 class="title-seccao"> Publicações </h1>';
			?>
		</header>
	</div>
</div>