<?php
/**
 * Template Name: Reabilitação Oral
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reabilitacao.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaReabilitacao">

	<!-- Conteúdo 1 -->
	<div class="conteudo_bocal">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_oral'), 'h1') ?>

				<div class="clear"></div>
		
				<div class="listaAncoras">
					<div>
						<a href="#divClinica"><span><?= get_field('titulo_clinica') ?></span></a>
					</div>

					<div>
						<a href="#divGestante"><span><?= get_field('titulo_gestante') ?></span></a>
					</div>

					<div>
						<a href="#divDiabete"><span><?= get_field('titulo_diabete') ?></span></a>
					</div>

					<div>
						<a href="#divTratamento"><span><?= get_field('titulo_tratamento') ?></span></a>
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
                    <?php getImagemObj(get_field('imagem_oral')['sizes'], '2048x2048') ?>
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
	<div class="conteudo_clinica" id="divClinica">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_clinica'), 'h2') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('texto_clinica') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_clinica')['sizes'], '2048x2048') ?>
                </figure>

			</div>

		</div>
	</div>
	<!-- /Conteúdo 2 -->
    
    <!-- Conteúdo 3 -->
    <div class="conteudo_listagem">
        <div class="container">

            <div class="col-sm-1"></div>

            <!-- Lista -->
            <div class="col-sm-10">
				
				<?php if( have_rows('lista_clinica') ): ?>
					<ul>
						<?php while( have_rows('lista_clinica') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_clinica'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-1"></div>

        </div>
    </div>
    <!-- /Conteúdo 3 --> 
    	
    <!-- Conteúdo 4 -->
    <div class="conteudo_quando">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_quando')?></span>
                </div>
            </div>

			<div class="col-sm-2"></div>

            <!-- Interno - Texto -->
            <div class="col-sm-8 texto">

                <div class="textoBox">
                    <?= get_field('texto_quando') ?>
                </div>

            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
    <!-- /Conteúdo 4 -->

	<!-- Conteúdo 5 -->
	<div class="conteudo_gestante" id="divGestante">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_gestante'), 'h2') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('lado_gestante') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_gestante')['sizes'], '2048x2048') ?>
                </figure>

			</div>

            <!-- Interno - Texto 2 -->
			<div class="textoBaixo">

                <div class="textoBox">
                    <?= get_field('baixo_gestante') ?>
                </div>

            </div>

		</div>
	</div>
	<!-- /Conteúdo 5 -->
    
	<!-- Conteúdo 6 -->
	<div class="conteudo_diabete" id="divDiabete">
		<div class="container">

            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_diabete'), 'h2') ?>

            </div>

			<!-- Interno - Texto 1 -->
			<div class="col-sm-6 texto">

				<div class="textoBox">
					<?= get_field('lado_diabete') ?>
				</div>

			</div>

			<!-- Interno - Imagem -->
			<div class="col-sm-6 imagem">

                <figure>
                    <?php getImagemObj(get_field('imagem_diabete')['sizes'], '2048x2048') ?>
                </figure>

			</div>

            <!-- Interno - Texto 2 -->
			<div class="textoBaixo">

                <div class="textoBox">
                    <?= get_field('baixo_diabete') ?>
                </div>

            </div>

		</div>
	</div>
	<!-- /Conteúdo 6 -->
        
	<!-- Conteúdo 7 -->
	<div class="conteudo_tipos">
		<div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_tipos')?></span>
                </div>
            </div>

			<div class="col-sm-1"></div>

			<!-- Interno - Texto -->
			<div class="col-sm-10 texto">

                <div>
                    <span><?= get_field('titulo_interno_um') ?></span>
                    <p><?= get_field('texto_interno_um') ?></p>
                </div>
              
                <div>
                    <span><?= get_field('titulo_interno_dois') ?></span>
                    <p><?= get_field('texto_interno_dois') ?></p>
                </div>

                <div>
                    <span><?= get_field('titulo_interno_tres') ?></span>
                    <p><?= get_field('texto_interno_tres') ?></p>
                </div>

			</div>

			<div class="col-sm-1"></div>

		</div>
	</div>
	<!-- /Conteúdo 7 -->
        	
    <!-- Conteúdo 8 -->
    <div class="conteudo_tratamento" id="divTratamento">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_tratamento')?></span>
                </div>
            </div>

            <!-- Interno - Texto -->
            <div class="col-sm-12 texto">

                <div class="textoBox">
                    <?= get_field('texto_tratamento') ?>
                </div>

            </div>

            
        </div>
    </div>
    <!-- /Conteúdo 8 -->

    <!-- Conteúdo 9 -->
    <div class="conteudo_beneficios">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_beneficios')?></span>
                    <p><?= get_field('texto_beneficios')?></p>
                </div>
            </div>

            <div class="col-sm-4"></div>

            <!-- Lista -->
            <div class="col-sm-4">
				
				<?php if( have_rows('lista_beneficios') ): ?>
					<ul>
						<?php while( have_rows('lista_beneficios') ): the_row(); ?>
							<li>
								<span><?php the_sub_field('topicos_beneficios'); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

            </div>

            <div class="col-sm-4"></div>

        </div>
    </div>
    <!-- /Conteúdo 9 -->
    		
    <!-- Conteúdo 10 -->
    <div class="conteudo_longevidade">
        <div class="container">

            <div class="col-sm-1"></div>

            <!-- Interno - Texto -->
            <div class="col-sm-10 texto">

                <div class="textoBox">
                    <?= get_field('texto_longevidade') ?>
                </div>

            </div>

            <div class="col-sm-1"></div>

        </div>
    </div>
    <!-- /Conteúdo 10 -->
           	
    <!-- Conteúdo 11 -->
    <div class="conteudo_contra">
        <div class="container">

            <!-- Título -->
            <div class="tituloPrincipal">
                <div class="boxInterno center">
                    <span class="titulo"><?= get_field('titulo_contra')?></span>
                </div>
            </div>

			<div class="col-sm-2"></div>

            <!-- Interno - Texto -->
            <div class="col-sm-8 texto">

                <div class="textoBox">
                    <?= get_field('texto_contra') ?>
                </div>

            </div>

            <div class="col-sm-2"></div>

        </div>
    </div>
    <!-- /Conteúdo 11 -->

	<!-- Contato -->
	<?php include('contents/contato.php') ?>

</section>


<?php get_footer() ?>