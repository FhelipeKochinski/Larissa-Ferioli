<?php
/**
 * Template Name: Clareamento
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/clareamento.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaClareamento">

	<!-- Conteúdo 1 -->
	<div class="conteudo_clareamento">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_clareamento'), 'h1') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_esquerdo') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_clareamento')['sizes'], '2048x2048') ?>
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

    <!-- Conteúdo 2 -->
    <div class="conteudo_indicacoes">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <h2 class="titulo"><?= get_field('titulo_indicacao')?></h2>
                </div>
            </div>

            <div class="col-sm-2"></div>

            <!-- Lista -->
            <div class="col-sm-8">
				
				<?php if( have_rows('lista_clareamento') ): ?>
					<ul>
						<?php while( have_rows('lista_clareamento') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_clareamento'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
    <!-- /Conteúdo 2 -->

    <!-- Conteúdo 3 -->
    <div class="conteudo_orientacao">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <h2 class="titulo"><?= get_field('titulo_orientacao')?></h2>
                </div>
            </div>

            <!-- Interno - Texto -->
            <div class="col-sm-12 texto">

                <div class="textoBox">
                    <?= get_field('texto_orientacao') ?>
                </div>

            </div>

        </div>
    </div>
    <!-- /Conteúdo 3 -->

	<!-- Contato -->
	<?php include('contents/contato.php') ?>

</section>


<?php get_footer() ?>