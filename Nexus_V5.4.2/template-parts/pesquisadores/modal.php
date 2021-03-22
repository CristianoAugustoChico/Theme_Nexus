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


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="<?php echo $postid ; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" id="myModalLabel"><?php the_title(); ?></h2>
			</div>
			<div class="modal-body">
			<!-- corpo -->
				<article>
					<div class="row">
						<div class="col-md-12 font-P">
							<?php
								$_tp_autores = get_post_meta($post->ID, '_tp_autores', true );
								if ( ! empty( $_tp_autores ) ) {
								echo '<strong> Autores: </strong> <br />' . $_tp_autores;
							} ?>
						</div>
						<div class="col-md-12 font-P">
							<?php
								$_tp_revista = get_post_meta($post->ID, '_tp_revista', true );
								if ( ! empty( $_tp_revista ) ) {
								echo '<strong> Revista: </strong> <br />' . $_tp_revista; 
								}
							?>
						</div>
						<div class="col-md-12 font-P">
							<?php
								$_tp_edicao = get_post_meta($post->ID, '_tp_edicao', true );
								if ( ! empty( $_tp_edicao ) ) {
								echo '<strong> Edição: </strong> <br />' . $_tp_edicao; 
								}
							?>
						</div>
						<div class="col-md-5 font-P">
							<?php
								$_tp_doi = get_post_meta($post->ID, '_tp_doi', true );
								if ( ! empty( $_tp_doi ) ) {
								echo '<strong> DOI: </strong> <br />' . $_tp_doi; 
								}
							?>
						</div>
						<div class="col-md-6 col-md-offset-1 font-P">
							<?php
								$posttags = get_the_tags($post->ID, 'posttags', true );
								if ($posttags) {
									echo "<strong>Keywords</strong>: <br /> ";
									foreach($posttags as $tag) {
									echo $tag->name . ', ';
									}
								}
							?>
						</div>
						<div class="col-md-12 font-P">
							<hr>
							<?php the_content(); ?>
						</div>
						<div class="col-md-12">	
							<div class="space"></div>
							<!-- botão link DOI -->
							<?php
								$_tp_link = get_post_meta($post->ID, '_tp_link', true );
								if ( ! empty( $_tp_link ) ) {
							?>
									<a href=" <?php echo $_tp_link; ?> " target="_blank"  onClick="ga('send', 'event', 'Publicação', '<?php echo $nome_taxonomy; ?>', '<?php the_title(); ?>');">
										<button type="button" class="col-md-12 col-xs-12 btn btn-lg btn-success" > DOWNLOAD </button>
									</a>
							<?php } ?>
							<!-- botão download de arquivo -->
							<div class="text-right">
								<?php
									$upload_file = get_post_meta($post->ID, 'upload_file', true );
									if ( ! empty( $upload_file ) ) {
								?>
										<a href=" <?php echo $upload_file; ?> " target="_blank"  onClick="ga('send', 'event', 'Publicação', '<?php echo $nome_taxonomy; ?>', '<?php the_title(); ?>');">
											<button type="button" class="col-md-12 col-xs-12 btn btn-lg btn-success" > DOWNLOAD </button>
										</a>
										<div class="space"></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</article>
			<!-- fim do corpo -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div> <!-- fim do modal -->