<?php 
/*
*
*
*Feito por: Larissa Georgina Crispim da Silva
*E-mail: larissa.crispim@inpe.br // larissa.gcrs@gmail.com
*
*Tema Padrão Governo WordPress, desevolvido para o Centro de Ciências do Sistema Terrestre / INPE - BRASIL.
* 
*/
?>

<div class="row">
	<div class="col-md-12 migalha">
		<!-- Migalha -->
		<?php get_template_part ( 'template-parts/header/header', 'breadcrumbs' ); ?>
	</div>
</div>


<div class="row">
	<!-- SideBar -->
	<?php get_sidebar(); ?>

	<div class="col-md-9">
		<section id="content-section">

			<!-- Codigo da Larissa -->
			<section class="equipe">
			<?php 
				//COORDENADOR

				// set up a new query for each category, pulling in related posts.
				$services = new WP_Query(
					array(
						'post_type' => 'equipe',
						'showposts' => -1,
						'orderby' => 'title',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy'	=> 'equipe',
								'terms'		=> '10',
								'field'		=> '10'
							)
						)
					)
				);

				if($services->have_posts()):?>
					<h2>COORDENADOR</h2>
					
					<?php while ($services->have_posts()) : $services->the_post(); ?>
						<div class="row">
							<div  class="col-md-4 thumb-docente">
								<?php 
									$domsxe = simplexml_load_string(get_the_post_thumbnail());
									$thumbnailsrc = $domsxe->attributes()->src;
								?>

								<img src="<?php echo $thumbnailsrc;?>" alt="<?php the_title();?>">
							</div>
							<div class="col-md-7">
								<?php include 'docentes-metabox.php'; ?>
							</div>
							
						</div>
					<?php endwhile;
				endif;

				$services = null;
				wp_reset_postdata();
			?>

			<?php 
				//Pesquisador

				// set up a new query for each category, pulling in related posts.
				$services = new WP_Query(
					array(
						'post_type' => 'equipe',
						'showposts' => -1,
						'orderby' => 'title',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy'	=> 'equipe',
								'terms'		=> '11',
								'field'		=> '11'
							)
						)
					)
				);

				if($services->have_posts()):?>
					<h2>Pesquisadores</h2> 
					<hr>
					<?php while ($services->have_posts()) : $services->the_post(); ?>
						
						<div class="row">
							<div  class="col-md-4 thumb-docente">
								<?php 
									$domsxe = simplexml_load_string(get_the_post_thumbnail());
									$thumbnailsrc = $domsxe->attributes()->src;
								?>

								<img src="<?php echo $thumbnailsrc;?>" alt="<?php the_title();?>">
							</div>
							<div class="col-md-7">
								<?php include 'docentes-metabox.php'; ?>
							</div>
							<br>
						</div>

					<?php endwhile;
				endif;

				$services = null;
				wp_reset_postdata();
			?>

			<?php 
				//Equipe

				// set up a new query for each category, pulling in related posts.
				$services = new WP_Query(
					array(
						'post_type' => 'equipe',
						'showposts' => -1,
						'orderby' => 'title',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy'	=> 'equipe',
								'terms'		=> '12',
								'field'		=> '12'
							)
						)
					)
				);

				if($services->have_posts()):?>
					<h2>Equipe</h2>
					<hr>
					<div class="row"> <!-- Item modificado para não receber thumb -->
						<?php while ($services->have_posts()) : $services->the_post(); ?>

							<div class="col-md-6">
								<?php include 'docentes-metabox.php'; ?>
							</div>
					 <?php endwhile; ?>
					</div>
				<?php endif;

				$services = null;
				wp_reset_postdata();
			?>

				<style> .pager{display: none;}</style>

			</section>
			<!-- Fim do código da Larissa -->
		</section>
	</div>
	</div>
