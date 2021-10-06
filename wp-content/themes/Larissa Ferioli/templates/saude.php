<?php
/**
 * Template Name: Dicas de Saúde
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/saude.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaSaude">

    <!-- Conteúdo 1 -->
    <div class="conteudo_saude">
        <div class="container">
   
            <!-- Título -->
            <div class="col-sm-12">
                				
				<?php tituloPrincipal(get_field('titulo_saude'), 'h1') ?>

            </div>

        </div>
    </div>
    <!-- /Conteúdo 1 -->

    <!-- Conteúdo 2 -->
    <div class="conteudo_dicas">
        <div class="container">

            <!-- Lista -->
            <div class="panel-group listaConteudos" id="accordion">

                <?php
                $cont = 1;
                $itens = get_field('lista_dicas');

                if($itens) :
                    foreach($itens as $item) :?>

                        <div class="card panel panel-default">

                            <div class="card-header" id="heading<?php echo $cont ?>">

                                <button type="button" data-toggle="collapse" data-target="#collapse<?php echo $cont ?>" aria-expanded="<?php if($cont === 1){ echo 'true'; } else { echo 'false'; } ?>" aria-controls="collapse<?php echo $cont ?>" class="<?php if($cont === 1){ echo ''; } else { echo 'collapsed'; } ?>">

                                    <h2><?= $item['titulo_saude_interno'] ?></h2>

                                    <span class="mais">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </span>

                                    <span class="menos">
                                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                    </span>

                                </button>

                            </div>

                            <div id="collapse<?php echo $cont; ?>" class="collapse boxConteudo <?php if($cont === 1){ echo 'in'; } ?>" aria-labelledby="heading<?php echo $cont; ?>" data-parent="#accordion">
                                <p><?= $item['texto_saude_interno'] ?></p>
                            </div>

                        </div>

                    <?php $cont++; endforeach;
                endif; 
                ?>

            </div>

        </div>
    </div>

    <!-- /Conteúdo 2 -->

</section>


<?php get_footer() ?>