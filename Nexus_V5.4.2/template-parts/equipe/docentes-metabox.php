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

<div class="metabox">
	<div class="span12 docentes-icons">

		<?php
			$p_lattes = get_post_meta($post->ID, 'p_lattes', true);

			if(!empty ( $p_lattes ) ){ ?>
				<a href="<?php echo $p_lattes; ?>" target="_blank" title="Currículo Lattes de <?php the_title(); ?>"> 
					<img src="<?php bloginfo('template_directory');?>/assets/img/lattes_azul.png" alt="Lattes">
				</a>
			<?php }
		?>

		<?php
			$p_facebook = get_post_meta($post->ID, 'p_facebook', true);

			if(!empty ( $p_facebook ) ){ ?>
				<a id="icon-media" href="<?php echo $p_facebook; ?>" target="_blank" title="Facebook de <?php the_title(); ?>"><i class="fab fa-facebook-f"></i></a>
			<?php }
		?>

		<?php 
			$p_linkedin = get_post_meta($post->ID, 'p_linkedin', true);

			if(!empty ( $p_linkedin ) ){ ?>
				<a id="icon-media" href="<?php echo $p_linkedin; ?>" target="_blank" title="Linkedin de  <?php the_title(); ?>"><i class="fab fa-linkedin-in"></i></a>
			<?php }
		?>

		<?php
			$p_twitter = get_post_meta($post->ID, 'p_twitter', true);

			if(!empty ( $p_twitter ) ){ ?>
				<a id="icon-media" href="<?php echo $p_twitter; ?>" target="_blank" title="Twitter de <?php the_title(); ?>"><i class="fab fa-twitter"></i></i></a>
			<?php }
		?>

	</div>

	<div class="title-docente">
		<strong><?php the_title(); ?></strong>
	</div>
	
	<div>
		<?php
			$p_email = get_post_meta($post->ID, 'p_email', true);
			if( ! empty ( $p_email ) ){ ?>
				<i class="fas fa-envelope-open"></i>
				<a href="mailto:<?php echo $p_email;?>" title="Entre em contato com <?php the_title(); ?>">
					<span id="info-docente"> <?php echo $p_email; ?> </span>
				</a>
			<?php } ?>
	</div>

	<div>
		<?php
			$p_telefone = get_post_meta($post->ID, 'p_telefone', true);
			if( ! empty ( $p_telefone ) ){ ?>
				<i class="fas fa-phone"></i>
				<span id="info-docente"><?php echo $p_telefone; ?></span> 
			<?php } 
		?>
	</div>

	<br>

	<div>
		<?php
			$p_linha_1 = get_post_meta($post->ID, 'p_linha_1', true);
			$p_linha_2 = get_post_meta($post->ID, 'p_linha_2', true);
			$p_linha_3 = get_post_meta($post->ID, 'p_linha_3', true);

			if( !empty ($p_linha_1) && !empty($p_linha_2)){ ?>
				<ul>
					<li><?php echo $p_linha_1; ?></li>
					<li><?php echo $p_linha_2; ?></li>
					<?php if(!empty($p_linha_3)){ ?>
						<li><?php echo $p_linha_3 ?></li>
					<?php } ?>
				</ul>
			<?php }
		?>
	</div>
</div>
