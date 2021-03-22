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


<!-- area 01 -->
<div class="col-md-3 migalha">
	<a href="<?php echo home_url(); ?> ">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			echo '<img src="' . esc_url( $custom_logo_url ) . ' " width="120" align="responsive" class="img-responsive"> ';
		?>
	</a>
	
	<!--<a href="http://www.ccst.inpe.br" target="_blank">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/ccst.png">
	</a> 
	-->
	<!-- licenca -->
	<br><br>
	<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
		<img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" />
	</a>
	<br />
	Este obra está licenciado com uma Licença<br> <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Atribuição-NãoComercial<br> 4.0 Internacional</a>.
</div>

<!-- area 02 -->
<!-- <div class="col-md-2 col-xs-12">
	<?php //dynamic_sidebar ('footer-2'); ?>
</div>  -->

<!-- area 03 -->
<div class="col-md-2 col-md-offset-1 col-xs-6">
	<?php dynamic_sidebar ('footer-3'); ?>
</div>

<!-- area 04 -->
<div class="col-md-2 col-xs-6">
	<?php dynamic_sidebar ('footer-4'); ?>
</div>

<!-- area endereço -->
<div class="col-md-4 col-xs-12">
	<?php dynamic_sidebar ('footer-5'); ?>
</div>