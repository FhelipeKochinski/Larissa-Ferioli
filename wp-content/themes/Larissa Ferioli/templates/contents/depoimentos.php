<?php
$args = array('post_type' => 'depoimentos', 'posts_per_page' => 10);
$wp_query = new WP_Query( $args );
?>

<?php if ($wp_query->have_posts()) : ?>

	<!-- Depoimento Loop -->
	<section id="sliderDepoimentos">

		<ul>
	
			<?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<li>

					<div class="aspasDepoimentos">
						<figure>
							<img id="aspas" src="wp-content/uploads/2021/09/aspas.png" alt="Aspas Depoimentos" />
						</figure>
					</div>

                    <!-- Texto -->
                    <div class="textoBox">
                        <?= get_field('texto_depoimento') ?>
                    </div>

                    		
                    <!-- Nome do Paciente -->
                    <div class="nome">
                        <?= get_field('nome_do_paciente') ?>
                    </div>
					
				</li>
			
			<?php endwhile; ?>

		</ul>

	</section>
	<!-- /Depoimento Loop -->

<?php endif; ?>

<?php wp_reset_query(); ?>