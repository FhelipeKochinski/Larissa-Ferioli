<?php
/**
 * Template Name: Home
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">

<section id="paginaInicial">

	<!-- Slide Principal -->
	<?php include( "contents/bannerPrincipal.php") ?>

	<!-- Conteúdo 1 -->
	<div class="conteudo_primario">
		<div class="container">

			<div class="col-sm-12">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_tratamentos'), 'h2') ?>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_tratamentos') ?>
				</div>

			</div>

			<!-- Interno -->
			<div class="col-sm-6 textoBaixo">
				
				<!-- Lista -->
				<?php if( have_rows('lista_tratamentos') ): ?>
					<ul>
						<?php while( have_rows('lista_tratamentos') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('interno_lista'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<!-- Link -->
				<div class="link">

					<?php if (get_field('link_tratamentos')) { ?>
						<a class="botaoGeral hoverZoom" href="<?= get_field('link_shorts') ?>">VEJA MAIS</a>
					<?php } ?>

				</div>
			
			</div>

			<!-- Img -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_tratamentos')['sizes'], '2048x2048', get_field('titulo_camisetas')) ?>
			</figure>

		</div>
	</div>
	<!-- /Conteúdo 1 -->

	<!-- Conteúdo 2 -->
	<div class="conteudo_secundario">
	
		<!-- Título -->
		<div class="tituloPrincipal">
			<div class="boxInterno center">
				<h2 class="titulo"><?= get_field('titulo_quem')?></h2>
				<div class="borda"></div>
			</div>
		</div>

		<div class="bgSecundario">

			<div class="bg"></div>

			<div class="container">

				<!-- Imagem -->
				<figure class="col-sm-6">
					<?php getImagemObj(get_field('imagem_quem')['sizes'], '2048x2048', get_field('titulo_quem')) ?>
				</figure>

				<!-- Interno -->
				<div class="col-sm-6 texto">

					<div>

						<!-- Texto -->
						<div class="textoBox">
							<?= get_field('texto_quem') ?>
						</div>

						<!-- Link -->
						<?php if (get_field('link_quem')) { ?>
							<a class="botaoGeral hoverZoom" href="<?= get_field('link_quem') ?>">VEJA MAIS</a>
						<?php } ?>

					</div>

				</div>
			
			</div>
		
		</div>

	</div>
	<!-- /Conteúdo 2 -->

    <!-- Conteúdo 3 -->
    <div class="conteudo_terciario">
        <div class="container">

			<div class="col-sm-7">

				<!-- Título -->
				<div class="tituloPrincipal">
					<div class="boxInterno">
						<h2 class="titulo"><?= get_field('titulo_depoimentos')?></h2>
						<div class="clear"></div>
						<div class="borda"></div>
					</div>
				</div>

				<!-- Loop -->
				<div class=" depoimento">

					<!-- Slide Depoimentos -->
					<?php include( "contents/depoimentos.php") ?>

				</div>
				
			</div>

			<!-- Img -->
			<figure class="col-sm-5">
				<?php getImagemObj(get_field('imagem_depoimentos')['sizes'], '2048x2048', get_field('titulo_depoimentos')) ?>
			</figure>

        </div>
    </div>
	<!-- /Conteúdo 3 -->

</section>

<?php get_footer() ?>