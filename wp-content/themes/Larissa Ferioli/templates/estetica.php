<?php
/**
 * Template Name: Odontologia Estética
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/estetica.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaEstetica">

	<!-- Conteúdo 1 -->
	<div class="conteudo_faceta" id="divFaceta">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_faceta'), 'h1') ?>

				<div class="clear"></div>
		
				<div class="listaAncoras">
					<div>
						<a href="#divFaceta"><span><?= get_field('titulo_faceta') ?></span></a>
					</div>

					<div>
						<a href="#divPorcelana"><span><?= get_field('titulo_porcelana') ?></span></a>
					</div>

					<div>
						<a href="#divOnlay"><span><?= get_field('titulo_onlay') ?></span></a>
					</div>

					<div>
						<a href="#divProtese"><span><?= get_field('titulo_protese') ?></span></a>
					</div>	
				</div>

				<div class="clear"></div>

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
                    <?php getImagemObj(get_field('imagem_faceta')['sizes'], '2048x2048') ?>
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
    <div class="indicacao">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_indicacao_faceta')?></span>
                </div>
            </div>

            <div class="col-sm-2"></div>

            <!-- Lista -->
            <div class="col-sm-8">
				
				<?php if( have_rows('lista_faceta') ): ?>
					<ul>
						<?php while( have_rows('lista_faceta') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_faceta'); ?></span>
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
	<div class="conteudo_porcelana" id="divPorcelana">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_porcelana'), 'h2') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_porcelana') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_porcelana')['sizes'], '2048x2048') ?>
                </figure>

			</div>

		</div>
	</div>
	<!-- /Conteúdo 3 -->
	
    <!-- Conteúdo 4 -->
    <div class="indicacao">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_indicacao_porcelana')?></span>
                </div>
            </div>

            <div class="col-sm-2"></div>

            <!-- Lista -->
            <div class="col-sm-8">
				
				<?php if( have_rows('lista_indicacao_porcelana') ): ?>
					<ul>
						<?php while( have_rows('lista_indicacao_porcelana') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_porcelana'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
    <!-- /Conteúdo 4 -->
	
    <!-- Conteúdo 5 -->
    <div class="conteudo_cuidado">
        <div class="container">

			<!-- Interno - Imagem -->
			<div class="col-sm-4">
				<figure>
					<?php getImagemObj(get_field('imagem_cuidado')['sizes'], '2048x2048') ?>
				</figure>
			</div>

            <!-- Interno - Texto -->
            <div class="col-sm-8 texto">

                <div class="textoBox">
                    <?= get_field('texto_cuidado') ?>
                </div>

            </div>

        </div>
    </div>
    <!-- /Conteúdo 5 -->
	
	<!-- Conteúdo 6 -->
	<div class="conteudo_onlay" id="divOnlay">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_onlay'), 'h2') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_onlay') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_onlay')['sizes'], '2048x2048') ?>
                </figure>

			</div>

		</div>
	</div>
	<!-- /Conteúdo 6 -->
		
	<!-- Conteúdo 7 -->
	<div class="conteudo_protese" id="divProtese">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_protese'), 'h2') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_protese') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_protese')['sizes'], '2048x2048') ?>
                </figure>

			</div>

		</div>
	</div>
	<!-- /Conteúdo 7 -->

    <!-- Conteúdo 8 -->
    <div class="conteudo_vantagens">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_vantagens')?></span>
                </div>
            </div>

            <div class="col-sm-2"></div>

            <!-- Lista -->
            <div class="col-sm-8">
				
				<?php if( have_rows('lista_vantagens') ): ?>
					<ul>
						<?php while( have_rows('lista_vantagens') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_vantagens'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
    <!-- /Conteúdo 8 -->
	
    <!-- Conteúdo 9 -->
    <div class="conteudo_limitacoes">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_limitacoes')?></span>
                </div>
            </div>

            <div class="col-sm-2"></div>

            <!-- Lista -->
            <div class="col-sm-8">
				
				<?php if( have_rows('lista_limitacoes') ): ?>
					<ul>
						<?php while( have_rows('lista_limitacoes') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_limitacoes'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
    <!-- /Conteúdo 9 -->
		
    <!-- Conteúdo 10 -->
    <div class="conteudo_baixo">
        <div class="container">

            <!-- Interno - Texto -->
            <div class="col-sm-12 texto">

                <div class="textoBox">
                    <?= get_field('texto_danger') ?>
                </div>

            </div>

        </div>
    </div>
    <!-- /Conteúdo 10 -->

	<!-- Contato -->
	<?php include('contents/contato.php') ?>

</section>


<?php get_footer() ?>