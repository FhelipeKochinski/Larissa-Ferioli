<?php
/**
 * Template Name: Implantes
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/implantes.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaEstetica">

	<!-- Conteúdo 1 -->
	<div class="conteudo_implante">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_implante'), 'h1') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_lado') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_implante')['sizes'], '2048x2048') ?>
                </figure>

			</div>

            <!-- Interno - Texto 2 -->
			<div class="textoBaixo">

                <div class="textoBox">
                    <?= get_field('texto_baixo') ?>
                </div>

            </div>

		</div>
	</div>
	<!-- /Conteúdo 1 -->

	<!-- Contato -->
	<?php include('contents/contato.php') ?>

</section>


<?php get_footer() ?>