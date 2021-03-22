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

<section>
	<div id="nav-menu" class="col-md-9 col-md-offset-1">
		<nav class="navbar-default" role="navigation" >
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" style="border:0;" href="<?php echo home_url(); ?>">
				   <i class="fas fa-home"></i>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!-- Menu -->
				<?php
					$args = array(
						'theme_location'	=> 'top-bar',
						'depth'				=> 3,
						'container'			=> false,
						'menu_class'		=> 'nav navbar-nav',
						'walker'			=> new Bootstrap_Walker_Nav_Menu()
					);
					wp_nav_menu($args);
				?>
				<!-- Fim menu -->
			</div>
		</nav>
	</div>
</section>