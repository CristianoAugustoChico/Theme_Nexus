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
	<div class="col-md-12">
		<section id="content-section">
			<!-- Loop -->
			<h1 class="title-seccao">Pesquisador responsável </h1>
			<article">

				<?php
				$args =  array( 'post_type' => 'equipe', 'cat_equipe' => 'coordenador', 'posts_per_page' => 1, 'orderby'=> 'title', 'order' => 'ASC' );
				$glossaryposts = get_posts( $args ); 
				// here comes The Loop!
				foreach( $glossaryposts as $post ) :	setup_postdata($post); ?>
						<div class="row">
							<div class="col-md-4" style=" margin-bottom:30px">
								<div class="container-equipe">
									<div <?php thumbnail_equipe ( 'full' ); ?> class="image"></div>
									<div class="overlay">
										<div class="text">
											<table class="table table-hover">
											<tbody>
												<tr>
													<td>
														<?php
															the_title();
														?>
													</td>
												</tr>
												<tr>
													<td>
														<?php
															$p_email = get_post_meta($post->ID, 'p_email', true );
															if ( ! empty( $p_email ) ) {
																echo "<a href='mailto:".$p_email."'>".$p_email."</a>";
															}
														?>
													</td>
												</tr>
												<tr>
													<td>
														<?php
															$p_institu = get_post_meta($post->ID, 'p_institu', true );
															if( ! empty( $p_institu )) {
																echo $p_institu;
															}
														?>
													</td>
												</tr>
												<tr>
													<td>
														<?php
															$p_lattes = get_post_meta($post->ID, 'p_lattes', true );
															if ( ! empty( $p_lattes ) ) {
																echo "<a href='".$p_lattes."' target='_blank'  onClick='ga('send', 'event', 'Equipe', 'Lattes','".get_the_title()."')>Lattes</a>";
															}
														?>
													</td>
												</tr>
											</tbody>
											</table>
										</div>
									</div>
							</div>
						</div>
						
				<?php endforeach; ?>

				</div>
			</article>
			<!-- Fim do loop -->
		</section>
	</div>
</div>


<!-- Pesquisadores -->
<div class="row">
	<!-- SideBar -->
	<?php //get_sidebar(); ?>

	<div class="col-md-12">
		<section id="content-section">
			<!-- Loop -->
			<h1 class="title-seccao">Pesquisadores Principais</h1>
			<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">

				<?php
				$args =  array( 'post_type' => 'equipe', 'cat_equipe' => 'pesquisador', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
				$glossaryposts = get_posts( $args );
				// here comes The Loop!
				foreach( $glossaryposts as $post ) :	setup_postdata($post); ?>
						<div class="row">
							<div class="col-md-4" style=" margin-bottom:30px">
								<div class="container-equipe">
									<div <?php thumbnail_equipe ( 'full' ); ?> class="image"></div>
									<div class="overlay">
										<div class="text">
											<table class="table table-hover">
											<tbody>
												<tr>
													<td>
														<?php the_title(); ?>
													</td>
												</tr>
												<tr>
													<td>
														<?php
															$p_email = get_post_meta($post->ID, 'p_email', true );
															if ( ! empty( $p_email ) ) {
																echo "<a href='mailto:".$p_email."'>".$p_email."</a>";
															}
														?>
													</td>
												</tr>
												<tr>
													<td>
														<?php
															$p_institu = get_post_meta($post->ID, 'p_institu', true );
															if( ! empty( $p_institu )) {
																echo $p_institu;
															}
														?>
													</td>
												</tr>
												<tr>
													<td>
														<?php
															$p_lattes = get_post_meta($post->ID, 'p_lattes', true );
															if ( ! empty( $p_lattes ) ) {
																echo "<a href='".$p_lattes."' target='_blank'  onClick='ga('send', 'event', 'Equipe', 'Lattes','".get_the_title()."')>Lattes</a>";
															}
														?>
													</td>
												</tr>
											</tbody>
											</table>
										</div>
									</div>
							</div>
						</div>
				<?php endforeach; ?>
				</div>
			</article>
			<!-- Fim do loop -->
		</section>
	</div>
</div>



<!-- Outros -->
<div class="row">
	<div class="col-md-12">
		<section id="content-section">
			<h1 class="title-seccao">Pesquisadores Associados, Bolsitas e Apoio Técnico</h1>
			<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
				<div class="row">
					<?php
					$args =  array( 'post_type' => 'equipe', 'cat_equipe' => 'outros', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
					$glossaryposts = get_posts( $args );
					// here comes The Loop!
					$cont = 1;
					foreach( $glossaryposts as $post ) :	setup_postdata($post);
						if ($cont % 3 == 0):
					?>
					<div class="row">
						<div class="col-md-4">
							<div class="container-equipe">
								<table class="table table-hover">
								<tbody>
									<tr>
										<td>
											<b>
											<?php the_title(); ?>
											</b>
										</td>
									</tr>
									<tr>
										<td>
											<?php
												$p_email = get_post_meta($post->ID, 'p_email', true );
												if ( ! empty( $p_email ) ) {
													echo "<a href='mailto:".$p_email."'>".$p_email."</a>";
												}
											?>
										</td>
									</tr>
									<tr>
										<td>
											<?php
												$p_institu = get_post_meta($post->ID, 'p_institu', true );
												if( ! empty( $p_institu )) {
													echo $p_institu;
												}
											?>
										</td>
									</tr>
									<tr>
										<td>
											<?php
												$p_lattes = get_post_meta($post->ID, 'p_lattes', true );
												if ( ! empty( $p_lattes ) ) {
													echo "<a href='".$p_lattes."' target='_blank'  onClick='ga('send', 'event', 'Equipe', 'Lattes','".get_the_title()."')>Lattes</a>";
												}
											?>
										</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<br><br>
					<?php
						endif;
						if($cont % 3 != 0):
					?>
					<div class="col-md-4">
							<div class="container-equipe">
								<table class="table table-hover">
								<tbody>
									<tr>
										<td>
											<b>
											<?php the_title(); ?>
											</b>
										</td>
									</tr>
									<tr>
										<td>
											<?php
												$p_email = get_post_meta($post->ID, 'p_email', true );
												if ( ! empty( $p_email ) ) {
													echo "<a href='mailto:".$p_email."'>".$p_email."</a>";
												}
											?>
										</td>
									</tr>
									<tr>
										<td>
											<?php
												$p_institu = get_post_meta($post->ID, 'p_institu', true );
												if( ! empty( $p_institu )) {
													echo $p_institu;
												}
											?>
										</td>
									</tr>
									<tr>
										<td>
											<?php
												$p_lattes = get_post_meta($post->ID, 'p_lattes', true );
												if ( ! empty( $p_lattes ) ) {
													echo "<a href='".$p_lattes."' target='_blank'  onClick='ga('send', 'event', 'Equipe', 'Lattes','".get_the_title()."')>Lattes</a>";
												}
											?>
										</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>
					<?php endif; $cont++; endforeach; ?>
				</div>
			</article>
		</section>
	</div>
</div>
