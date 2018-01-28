jQuery(function($) {
	//Initiat WOW JS
	new WOW().init();

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),
			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
		});
	});
	
	$(document).ready(function(){
		$("#cep").mask("99999-999");
		$("#celular").mask("(99)99999-9999");
		$("#cpf").mask("999.999.999-99");
		$("#cnpj").mask("99.999.999/9999-99");
		$("#data").mask("99/99/9999");
		$("#telefone").mask("(99)9999-9999");
		$("#ramal").mask("(99)9999-9999");
	});
	
	$(document).ready(function(){
		if($(window).width() > 980) {
			$('#access-md-lg').removeClass('hide');
			$('#access-xs-sm').addClass('hide');
		}
		
		if($(window).width() <= 980) {
			$('#access-md-lg').addClass('hide');
			$('#access-xs-sm').removeClass('hide');
		}
			
		$(window).resize(function() {
			if($(window).width() > 980) {
				$('#access-md-lg').removeClass('hide');
				$('#access-xs-sm').addClass('hide');
			}
			if($(window).width() <= 980) {
				$('#access-md-lg').addClass('hide');
				$('#access-xs-sm').removeClass('hide');
			}
		});
	});
	
			
    // Redimensiona a barra de menu
    /*$(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 10) {
            $('#menu').removeClass('navbar-max');
            $('#menu').addClass('navbar-min');
        }
        if (y < 10) {
            $('#menu').removeClass('navbar-min');
            $('#menu').addClass('navbar-max');
        }
    });*/

	
});