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


<style type="text/css">
	#numerador{
		display: none
	}
</style>



<div class="row">
	<div class="col-md-12">
		<header>
			<!-- header da página -->
			<h1 class="title-seccao">Equipe</h1>
		</header>
	</div>
</div>

<div class="row">
	<div class="col-md-12 migalha">
		<!-- Migalha -->
		<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>
	</div>
</div>

<div class="row">
	<!-- Barra de menu lateral exclusiva -->
	<div class="col-md-3">
		<section>
			<div id="box">
				<?php dynamic_sidebar( 'menu-equipe' ); ?>
			</div>
		</section>
	</div>

	<div class="col-md-8 col-md-offset-1">
		<div id="divulgacao">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<div id="content" class="internas span9" >
					<section id="content-section">
						<!-- Título da página-->
						<?php query_posts('page_id=22033'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<header>
								<?php the_title('<h1 class="title-seccao">', '</h1>'); ?>
							</header>
							<!-- Content -->
							<p><?php the_content(); ?></p>

						<?php endwhile; endif; wp_reset_query(); ?>
					</section>
				</div>
			</article>
		</div>
	</div>
</div>

<!-- bloco de notícias (categoria noticias e filho) -->
<div id="border-seccao">
	<div class="row">
		<div class="col-md-12">
				<h1 class="title-seccao">Coordenador do Projeto</h1>
		</div>
	</div>
	<!-- Coordenador -->
	<div class="row">
		<?php // Exibe uma página inicial para a custom post estudantes
			$args = array( 'post_type' => 'equipe',  'cat_equipe' => 'coordenador' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>
			<!-- Pega o título de cada post da custom e lista  -->
			<article>
				<div id="post-<?php the_ID(); ?>">
					<div class="row"  >
						<div class="col-md-3" style="padding: 0px">
							<div <?php thumbnail_equipe( 'full' ); ?> ></div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12 titulo" style=" padding: 20px">
									<?php include 'docentes-metabox.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
	</div>


	<!-- Pesquisadores -->
	<div class="row">
		<div class="col-md-12">
			<h1 class="title-seccao">Pesquisadores do projeto</h1>
		</div>
	</div>
	<div class="row">
		<?php // Exibe uma página inicial para a custom post estudantes
			$args = array( 'post_type' => 'equipe',  'cat_equipe' => 'pesquisador' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
			<!-- Pega o título de cada post da custom e lista  -->
			<article>
				<div id="post-<?php the_ID(); ?>">
					<div class="row" style="background-color: #f2f2f2;" >
						<div class="col-md-6" style="padding: 0px">
							<div <?php thumbnail_equipe( 'full' ); ?> ></div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12 titulo" style=" padding: 20px">
									<?php include 'docentes-metabox.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
			<br><br>
		<?php endwhile; ?>
	</div>

	<!-- Outros -->
	<!-- Pesquisadores -->
	<div class="row">
		<div class="col-md-12">
			<h1 class="title-seccao">Outros</h1>
		</div>
	</div>
	<div class="row">
		<?php // Exibe uma página inicial para a custom post estudantes
			$args = array( 'post_type' => 'equipe',  'cat_equipe' => 'outros' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
			<!-- Pega o título de cada post da custom e lista -->
			<article>
				<div id="post-<?php the_ID(); ?>">
					<div class="col-md-6">
						<div class="col-md-12 titulo" style=" padding: 20px">
							<?php include 'docentes-metabox.php'; ?>
						</div>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</div>


	<!-- Apoiadores -->
	<?php get_template_part ( 'template-parts/footer/apoio' ); ?>
