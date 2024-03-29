<?php

/* Monta a página de configurações */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(
		array(
			'page_title' 	=> 'Configurações do Site',
			'menu_title'	=> 'Config. Site',
			'menu_slug' 	=> 'configuracoes-tema',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		)
	);
}

/* Retorna Telefone para link */
function linkTelefone($telefone) {
	$telefone = str_replace('(', '', $telefone);
	$telefone = str_replace(')', '', $telefone);
	$telefone = str_replace(' ', '', $telefone);
	$telefone = str_replace('-', '', $telefone);
	echo '0' . $telefone;
}

/* Limitador de Caracteres */
function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;
	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}

/* Retorna o Content pelo ID */
function retornaContent($post_id) {
	$page = get_page($post_id);
	echo apply_filters('the_content', $page->post_content);
}

/* Transforma o valor em float */
function corrigeValor($valor){
	$retorno = str_replace('.', '', $valor);
	$retorno = str_replace(',', '.', $retorno);
	$retorno = (float) $retorno;
	return $retorno;
}

/* Desabilita os Emoji's */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	
}
add_action( 'init', 'disable_emojis' );

/* Desabilita os Emoji's do Editor */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

// Verifica se não existe nenhuma função com o nome tp_count_post_views
if ( ! function_exists( 'tp_count_post_views' ) ) {
    function tp_count_post_views () {	
        if ( is_single() ) {
        
            global $post;
            
            if ( empty( $_SESSION[ 'tp_post_counter_' . $post->ID ] ) ) {
                
                $_SESSION[ 'tp_post_counter_' . $post->ID ] = true;
            
                $key = 'tp_post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                if ( empty( $key_value ) ) {
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                }
                
            }
            
        }
        
        return;
        
    }
    add_action( 'get_header', 'tp_count_post_views' );
}

// Retorna a imagem de objeto

function getImagemObj ($imagem, $tamanho = 'thumbnail', $alt = '', $qualidade = 100) {
	$result = '';
	$result .= '<img src="' . $imagem[$tamanho] . '" alt="' . $alt . '" width="' . $imagem[$tamanho . '-width'] . '" height="' . $imagem[$tamanho . '-height'] . '" />';
	echo $result;
}

// Retorna a imagem de URL

function getImagem ($imagem, $tamanho = 'thumbnail', $alt = '', $qualidade = 100) {
	$imagemObj = wp_get_attachment_image_src($imagem, $tamanho);
	$result = '';
	$result .= '<img src="' . $imagemObj[0] . '" alt="' . $alt . '" width="' . $imagemObj[1] . '" height="' . $imagemObj[2] . '" />';
	echo $result;
}

// Retorna o título Principal

function tituloPrincipal ($texto, $tag, $alinhamentoGeral = '', $alinhamentoInterno = '') {
	$html = '';
	$html .= '<div class="tituloPrincipal ' . $alinhamentoGeral . '">';
		$html .= '<div class="boxInterno ' . $alinhamentoInterno . '">';
			$html .= '<' . $tag . ' class="titulo">' . $texto . '</' . $tag . '>';
			$html .= '<div class="clear"></div>';
			$html .= '<div class="borda"></div>';
		$html .= '</div>';
	$html .= '</div>';
	echo $html;
}

?>