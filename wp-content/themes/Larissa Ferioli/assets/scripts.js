
/*******************************
Slider Home - Desktop
********************************/

jQuery('#sliderHome ul').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	centerMode: false,
	arrows: true,
	infinite: true,
	prevArrow:'<i class="fa fa-arrow-circle-left"></i>',
	nextArrow:'<i class="fa fa-arrow-circle-right"></i>',
	autoplay: true,
	autoplaySpeed: 5000,
	responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false
			}
		},
		{
			breakpoint: 470,
			settings: {
				slidesToShow: 1,
				arrows: false
			}
		}
	]
});

/*******************************
Slider Home - Mobile
********************************/

jQuery('#sliderHomeMobile ul').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	centerMode: false,
	arrows: false,
	infinite: true,
	autoplay: true,
	autoplaySpeed: 5000,
	responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false
			}
		},
		{
			breakpoint: 470,
			settings: {
				slidesToShow: 1,
				arrows: false
			}
		}
	]
});

/*******************************
Slider Depoimentos
********************************/

jQuery('#sliderDepoimentos ul').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	centerMode: false,
	arrows: true,
	infinite: true,
	prevArrow:'<i class="fa fa-angle-left"></i>',
	nextArrow:'<i class="fa fa-angle-right"></i>',
	autoplay: true,
	autoplaySpeed: 5000,
	responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: true
			}
		},
		{
			breakpoint: 470,
			settings: {
				slidesToShow: 1,
				arrows: true
			}
		}
	]
});


/*******************************
Funções executadas quando a página fica pronta
********************************/

jQuery(document).ready(function() {
	
	/* Abre Menu */
	jQuery('#menuMobile').click(function(){
		jQuery('#menuPrincipal').addClass('active');
	});

	/* Fecha Menu */
	jQuery('#fechaMenuMobile').click(function(){
		jQuery('#menuPrincipal').removeClass('active');
	});

	/* Volta ao topo da página 
	jQuery('.botaoSubir').click(function(){
		jQuery('html, body').animate({scrollTop: 0},'slow');
	});
	*/

	/* Máscaras */
	if($(".telefone").length > 0){
		$(".telefone").mask("(00) 0000-00009");
	}

	jQuery('.telefone').blur(function(event) {
		if(jQuery(this).val().length == 15){
			jQuery('.telefone').mask('(00) 00000-0009');
		} else {
			jQuery('.telefone').mask('(00) 0000-00009');
		}
	});

})