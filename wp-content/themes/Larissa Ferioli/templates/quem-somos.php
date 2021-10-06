<?php
/**
 * Template Name: Quem Somos
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/quemSomos.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaQuemSomos">

    <!-- Conteúdo 1 -->
    <div class="conteudo_quemSomos">
		<div class="container">

			<!-- Interno -->
			<div class="col-sm-12 texto">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_somos'), 'h1') ?>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_somos') ?>
				</div>

			</div>


        </div>
    </div>
	<!-- /Conteúdo 1 -->
	
	<!-- Conteúdo 2 -->
	<div class="conteudo_colunas">
		<div class="container">

			<ul>

				<li>
					<!-- Interno - Coluna 1 -->
					<div class="col-sm-4 texto">

						<!-- Título -->
						<h2><?= get_field('titulo_primeiro') ?></h2>

						<!-- Texto -->
						<div class="textoBox">
							<?= get_field('texto_primmeiro') ?>
						</div>

					</div>
				</li>

				<li>
					<!-- Interno - Coluna 2 -->
					<div class="col-sm-4 texto">

						<!-- Título -->
						<h2><?= get_field('titulo_segundo') ?></h2>

						<!-- Texto -->
						<div class="textoBox">
							<?= get_field('texto_segundo') ?>
						</div>

					</div>
				</li>

				<li>
					<!-- Interno - Coluna 3 -->
					<div class="col-sm-4 texto">

						<!-- Título -->
						<h2><?= get_field('titulo_terceiro') ?></h2>

						<!-- Texto -->
						<div class="textoBox">
							<?= get_field('texto_terceiro') ?>
						</div>

					</div>
				</li>

			</ul>

		</div>
	</div>
	<!-- /Conteúdo 2 -->

	<!-- Conteúdo 3 -->
	<div class="conteudo_foto">

		<div class="container">
		
			<!-- Imagem -->
			<figure class="col-sm-9">
				<?php getImagemObj(get_field('imagem_imagem')['sizes'], '2048x2048') ?>
			</figure>

		</div>

	</div>
	<!-- /Conteúdo 3-->

	<!-- Contato -->
	<?php include('contents/contato.php') ?>

</section>

<?php get_footer() ?>