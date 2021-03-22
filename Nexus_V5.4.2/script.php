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

<!-- script no navtab -->
<script>
function openCity(cityName,thumbName,elmnt,color) {
	var i, tabcontent, tabcontent2, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	tabcontent2 = document.getElementsByClassName("tabcontent2");
	for (i = 0; i < tabcontent2.length; i++) {
		tabcontent2[i].style.display = "none";
	}


		tablinks = document.getElementsByClassName("tablink");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].style.backgroundColor = "";
	}
	document.getElementById(cityName,).style.display = "block";
	elmnt.style.backgroundColor = color;

	document.getElementById(thumbName,).style.display = "block";
	elmnt.style.backgroundColor = color;
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<!-- chamando biblioteca jQuery, necessária para plugins de javascript do bootstrap, se necessario. --> 
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script> 

<!-- Inluindo todos plugins compilados abaixo, ou arquivos individuias se necessário. --> 
<script src= "<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js" ></script> 