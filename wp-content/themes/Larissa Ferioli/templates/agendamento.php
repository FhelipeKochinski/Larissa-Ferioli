<?php
/**
 * Template Name: Agendamento
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/agendamento.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaAgendamento">

    <!-- Conteúdo 1 -->
    <div class="conteudo_agenda">
		<div class="container">

            <!-- Título -->     
            <?php tituloPrincipal(get_field('titulo_agenda'), 'h1') ?>
        
			<!-- Interno - Conteúdo -->
			<div class="col-sm-6 texto">

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_agenda') ?>
				</div>
                    		
                <!-- Imagem -->
                <figure class="whatsapp">
                    <?php getImagemObj(get_field('imagem_whats')['sizes'], '2048x2048') ?>
                </figure>
                       
			    <!-- Contatos -->
                <div class="item">

                    <!-- E-mail -->
                    <?php if (get_field('e-mail', 'options')) { ?>
                        <a href="mailto: <?= get_field('e-mail', 'options') ?>" id="emailRodape">
                            <i class="fa fa-envelope-o"></i>
                            <span><?= get_field('e-mail', 'options') ?></span>
                        </a>
                    <?php } ?>

                </div>

                <div class="item">

                    <!-- Telefone -->
                    <?php if (get_field('telefone', 'options')) { ?>
                        <div class="clear"></div>
                        <a href="tel: <?= linkTelefone(get_field('telefone', 'options')) ?>" id="telefoneRodape">
                            <i class="fa fa-phone"></i>
                            <span><?= get_field('telefone', 'options') ?></span>
                        </a>
                    <?php } ?>

                </div>
              
                <div class="item">

                    <!-- Whatspp -->
                    <?php if (get_field('whatsapp', 'options')) { ?>
                        <div class="clear"></div>
                        <a href="https://api.whatsapp.com/send?phone=55<?= linkTelefone(get_field('whatsapp', 'options')) ?>" id="whatsappRodape" target="_blank">
                            <i class="fa fa-whatsapp"></i>	
                            <span><?= get_field('whatsapp', 'options') ?></span>
                        </a>
                    <?php } ?>

                </div>

				
			</div>

            <!-- Interno - Imagem -->
            <figure class="col-sm-6 imagem">
                <?php getImagemObj(get_field('imagem_agenda')['sizes'], '2048x2048') ?>
            </figure>

        </div>
    </div>
	<!-- /Conteúdo 1 -->

</section>


<?php get_footer() ?>