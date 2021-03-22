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


<h1 class="title-seccao">Últimas Publicações/Papers</h1>
<?php // Exibe uma página inicial para a custom post estudantes
	$args = array( 'post_type' => 'publicacao', 'cat_publicacao' => 'gestores', 'posts_per_page' => 6);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		global $post;
		$postid = get_the_ID();// Chama o ID do Post
?>
	<!-- Pega o título de cada post da custom e lista -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-12 titulo" style="border-bottom: dotted 3px #f2f2f2; padding: 10px">
				<a href="#" data-toggle="modal" data-target="#<?php echo $postid ; ?>">
					<h1><?php the_title('<strong>', '</strong>'); ?></h1>
				</a>
			</div>
		</div>
	</article>
	<!-- Chama modal -->
<?php include 'modal.php'; ?>

<?php
	endwhile;
?>
<!-- Leia mais -->
<div class="row">
	<div id="leia-mais" class="col-md-12">
		<a href="/nexus/cat_publicacao/gestores/"></a>
	</div>
</div>