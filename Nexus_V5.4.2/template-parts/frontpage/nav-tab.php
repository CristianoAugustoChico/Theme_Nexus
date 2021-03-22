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



<div style="margin-bottom: 80px; display: block;">
	<div class="row">
		<div id="thumb-tab-nav" class="col-md-3">
			<div id="A2" class="tabcontent2">
				Imagem do Estudantes
			</div>
			<div id="B2" class="tabcontent2">
				Imagem do Gestores
			</div>

			<div id="C2" class="tabcontent2">
				Imagem do Pesquisadores
			</div>

		</div>
		<div id="border-none" class="col-md-9">
			<!-- nav tab -->
			<div class="row">
				<div id="border-none" class="col-md-12">
					<button class="tablink" onclick="openCity('A','A2', this, '#fff')" id="defaultOpen">Estudantes</button>
					<button class="tablink" onclick="openCity('B','B2',  this, '#fff')">Gestores</button>
					<button class="tablink" onclick="openCity('C','C2',  this, '#fff')">Pesquisadores</button>
				</div>
			</div>

			<div class="row">
				<div id="border-none" class="col-md-12">
					<div id="A" class="tabcontent">
						<h1>Estudantes</h1>
						<p>Texto do Estudantes</p>
					</div>

					<div id="B" class="tabcontent">
						<h1>Gestores</h1>
						<p>Texto do Gestores</p> 
					</div>

					<div id="C" class="tabcontent">
						<h1>Pesquisadores</h1>
						<p>Texto do Pesquisadores</p>
					</div>

				</div>
			</div>
			<!-- fim da nav tab -->
		</div>
	</div>
</div>