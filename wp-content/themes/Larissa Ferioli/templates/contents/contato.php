<!-- Conteúdo x -->
<div class="conteudo_contato">

    <div class="container">

        <!-- Interno -->
        <div class="col-sm-6 titulo">
        
            <!-- Título -->
            <div class="tituloPrincipal">
                <h2 class="titulo"><?= get_field('titulo_contato', 'option')?></h2>
                <div class="borda"></div>

                <!-- Link -->
                <div class="link">
                    <?php if (get_field('link_contato', 'option')) { ?>
                        <a class="botaoGeral hoverZoom" href="<?= get_field('link_contato', 'option') ?>">ENVIAR MENSAGEM</a>
                    <?php } ?>
                </div>
            </div>

        </div>

        <!-- Imagem -->
        <figure class="col-sm-6">
            <?php getImagemObj(get_field('imagem_contato', 'option')['sizes'], '2048x2048', get_field('titulo_contato')) ?>
        </figure>
    
    </div>

</div>
<!-- /Conteúdo X -->
