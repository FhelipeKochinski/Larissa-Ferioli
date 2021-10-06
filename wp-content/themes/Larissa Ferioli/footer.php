<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">

<!-- Footer -->
<footer id="footer">

	<div class="linhaTopo"></div>

	<!-- Container -->
	<div class="container">
	
		<!-- Botão Subir -->
		<div class="botaoSubir">
			<a href="#header">
				<i class="fa fa-angle-up"></i>
			</a>
		</div>
		<!-- /Subir -->

		<!-- Logo -->
		<div class="col-sm-4 menu logo">
			<figure id="logoFooter">
				<?php getImagemObj(get_field('logo_footer', 'option')['sizes'], '2048x2048', 'Larissa Ferioi') ?>
			</figure>
			<span><?= get_field('cropr', 'options') ?></span>
		</div>
		<!-- /Logo -->

		<!-- Endereço -->
		<div class="col-sm-3 menu endereco">
			<span class="tituloFooter">Consultório</span>
			
			<!-- Endereço -->
			<div class="enderecoFooter">
				<i class="fa fa-map-marker"></i>
				<span><?= get_field('endereco', 'options') ?></span>
			</div>

			<!-- CEP -->
			<div class="cepFooter">
				<span><?= get_field('cep', 'options') ?></span>
			</div>

		</div>
		<!-- /Endereço -->

		<!-- Contatos -->
		<div class="col-sm-3 menu contatos">

			<span class="tituloFooter">Contato</span>

			<!-- E-mail -->
			<?php if (get_field('e-mail', 'options')) { ?>
				<a href="mailto: <?= get_field('e-mail', 'options') ?>" id="emailRodape">
					<i class="fa fa-envelope-o"></i>
					<span><?= get_field('e-mail', 'options') ?></span>
				</a>
			<?php } ?>

			<!-- Whatspp -->
			<?php if (get_field('whatsapp', 'options')) { ?>
				<div class="clear"></div>
				<a href="https://api.whatsapp.com/send?phone=55<?= linkTelefone(get_field('whatsapp', 'options')) ?>" id="whatsappRodape" target="_blank">
					<i class="fa fa-whatsapp"></i>	
					<span><?= get_field('whatsapp', 'options') ?></span>
				</a>
			<?php } ?>

			<!-- Telefone -->
			<?php if (get_field('telefone', 'options')) { ?>
				<div class="clear"></div>
				<a href="tel: <?= linkTelefone(get_field('telefone', 'options')) ?>" id="telefoneRodape">
					<i class="fa fa-phone"></i>
					<span><?= get_field('telefone', 'options') ?></span>
				</a>
			<?php } ?>

		</div>
		<!-- /Contatos -->

		<!-- MMD -->
		<div class="col-sm-2 menu linkMMD">

			<!-- Logo MMD -->
			<figure>
				<a href="https://muitomaisdigital.com.br/" target="_blank" title="Criação de Sites em Curitiba">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/09/logo-mmd.png" alt="Criação de Sites em Curitiba">
				</a>
			</figure>
			
		</div>
		<!-- /MMD -->


	</div>
	<!-- /Container -->

</footer>
<!-- /Footer -->

<script src="<?php echo get_template_directory_uri()?>/assets/scripts.js"></script>

<?php wp_footer(); ?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&family=Work+Sans&display=swap" rel="stylesheet">

</body>
</html>
