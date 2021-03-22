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


</div><!-- container -->

<?php wp_footer(); ?>

<footer>
	<div class="container">
		<div class="row">
			<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); // chama lista de widgets do footer ?>
		</div>
		<div class="row">
			<?php get_template_part( 'template-parts/footer/footer', 'end' ); // chama o endereço ?>
		</div>
	</div>
</footer>

<?php include 'script.php'; // chama os scripts e rastreio?>

</body>
</html>