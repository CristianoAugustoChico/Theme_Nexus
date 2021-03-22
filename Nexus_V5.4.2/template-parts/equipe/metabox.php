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
	<div>
		<?php
			$p_email = get_post_meta($post->ID, 'p_email', true);
			if( ! empty ( $p_email ) ){ ?>
				<strong>Email: </strong>
				<a href="mailto:<?php echo $p_email;?>" title="Entre em contato com <?php the_title(); ?>">
					<?php echo $p_email; ?>
				</a>
			<?php } ?>
	</div>

	<div>
		<?php
			$p_telefone = get_post_meta($post->ID, 'p_telefone', true);
			if( ! empty ( $p_telefone ) ){ ?>
				<strong>Telefone: </strong>
				<?php echo $p_telefone;
			 }
		?>
	</div>

	<div>
		<?php
			$p_lattes = get_post_meta($post->ID, 'p_lattes', true);
			if( ! empty ( $p_lattes ) ){ ?>
				<a href="<?php echo $p_lattes; ?>" target="_blank" onClick="ga('send', 'event', 'Lattes', '<?php echo $nome_taxonomy; ?>', '<?php the_title(); ?>')">Lattes</a>
		<?php }
		?>
	</div>
</div>
<br>