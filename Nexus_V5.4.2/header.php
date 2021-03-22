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


<!DOCTYPE html>

<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="" />
	<meta name="author" content="Cristiano Augusto Cunha Silva" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta charset="<?php bloginfo('charset') ?>">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/img/favicon.png" type="image/x-icon">

	<title><?php wp_title(''); ?></title>

	<?php wp_head(); ?>
</head>

<body>

<!-- Inicio do layout -->
<div class="container">
	<!-- row de cabeçalho/logo -->
	<header>
		<div class="row">
			<div class="col-md-12">
				<!-- Logo e área de respiro -->
				<div class="row">
					<?php get_template_part('template-parts/header/header', 'logo' ); // chama o logo ?>
					<?php get_template_part('template-parts/header/header', 'nav' ); // chama o mennu ?>
				</div>
			</div>
		</div>
	</header>