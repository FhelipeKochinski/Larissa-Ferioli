<?php
/**
 * Template Name: Periodontia
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/periodontia.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaPeriodontia">

	<!-- Conteúdo 1 -->
	<div class="conteudo_periodontia">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_periodontia'), 'h1') ?>
                
				<div class="clear"></div>
		
                <div class="listaAncoras">

                    <div>
                        <a href="#divDiastema"><span><?= get_field('titulo_diastema') ?></span></a>
                    </div>

                    <div>
                        <a href="#divIdade"><span><?= get_field('titulo_idade') ?></span></a>
                    </div>

                    <div>
                        <a href="#divUti"><span><?= get_field('titulo_uti') ?></span></a>
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
                    <?php getImagemObj(get_field('imagem_periodontia')['sizes'], '2048x2048') ?>
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
                    <span class="titulo"><?= get_field('titulo_sintoma')?></span>
                </div>
            </div>

            <div class="col-sm-4"></div>

            <!-- Lista -->
            <div class="col-sm-4">
				
				<?php if( have_rows('lista_sintoma') ): ?>
					<ul>
						<?php while( have_rows('lista_sintoma') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_sintoma'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-4"></div>

        </div>
    </div>
    <!-- /Conteúdo 2 -->

	<!-- Conteúdo 3 -->
	<div class="conteudo_diastema" id="divDiastema">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_diastema'), 'h2') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_diastema') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_diastema')['sizes'], '2048x2048') ?>
                </figure>

			</div>

		</div>
	</div>
	<!-- /Conteúdo 3 -->
	
    <!-- Conteúdo 4 -->
    <div class="conteudo_causas">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_causa')?></span>
                    <p><?= get_field('texto_causa')?></p>
                </div>
            </div>

            <div class="col-sm-4"></div>

            <!-- Lista -->
            <div class="col-sm-4">
				
				<?php if( have_rows('lista_causa') ): ?>
					<ul>
						<?php while( have_rows('lista_causa') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_causa'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-4"></div>

        </div>
    </div>
    <!-- /Conteúdo 4 -->
	
    <!-- Conteúdo 5 -->
    <div class="conteudo_tratar">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_tratar')?></span>
                </div>
            </div>

			<div class="col-sm-2"></div>

            <!-- Interno - Texto -->
            <div class="col-sm-8 texto">

                <div class="textoBox">
                    <?= get_field('texto_tratar') ?>
                </div>

            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
    <!-- /Conteúdo 5 -->

	<!-- Conteúdo 6 -->
	<div class="conteudo_idade" id="divIdade">
		<div class="container">

            <!-- Título -->
			<?php tituloPrincipal(get_field('titulo_idade'), 'h2') ?>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('lado_idade') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_idade')['sizes'], '2048x2048') ?>
                </figure>

			</div>

            <!-- Interno - Texto 2 -->
			<div class="textoBaixo">

                <div class="textoBox">
                    <?= get_field('baixo_idade') ?>
                </div>

            </div>

		</div>
	</div>
	<!-- /Conteúdo 6 -->
	
    <!-- Conteúdo 7 -->
    <div class="conteudo_problemas">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_problema')?></span>
                </div>
            </div>

            <div class="col-sm-1"></div>

            <!-- Lista -->
            <div class="col-sm-10">
				
				<?php if( have_rows('lista_problema') ): ?>
					<ul>
						<?php while( have_rows('lista_problema') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_problema'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-1"></div>

        </div>
    </div>
    <!-- /Conteúdo 7 -->
   
	<!-- Conteúdo 8 -->
	<div class="conteudo_uti" id="divUti">
		<div class="container">

            <!-- Título -->
			<?php tituloPrincipal(get_field('titulo_uti'), 'h2') ?>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_uti') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_uti')['sizes'], '2048x2048') ?>
                </figure>

			</div>

		</div>
	</div>
	<!-- /Conteúdo 8 -->

	<!-- Contato -->
	<?php include('contents/contato.php') ?>

</section>


<?php get_footer() ?>