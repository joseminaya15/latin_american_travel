var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$("nav").addClass("navbarcolor");
	} else {
		$("nav").removeClass("navbarcolor");
	}
});
$('a.link[href^="#"]').click(function (e) {
	var target = $(this).attr('href');
	var strip = target.slice(1);
	var anchor = $("section[id='" + strip + "']");
	e.preventDefault();
	y = (anchor.offset() || {
		"top": NaN
	}).top;
	// if(isMobile.any()){
	// 	$('html, body').animate({
	// 		scrollTop : (y - 40)
	// 	}, 'slow');
	// }else{
	// 	$('html, body').animate({
	// 		scrollTop : (y - 120)
	// 	}, 'slow');
	// }
	$('html, body').animate({
		scrollTop: (y - 20)
	}, 'slow');
});
// $('#principal .owl-carousel').owlCarousel({
// 	lazyLoad : true,
// 	animateOut: 'fadeOut',
// 	animateIn: 'fadeIn',
// 	responsive : {
// 		0 : {
// 			items : 1
// 		}
// 	},
// 	navigation : false,
// 	nav : false,
// 	loop : true,
// 	autoplay : true,
// 	autoplayTimeout : 5000
// });
$('#experiencia .owl-carousel').owlCarousel({
	lazyLoad: true,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		}
	},
	navigation: false,
	nav: true,
	loop: false,
	dots: false,
	autoplay: false,
	autoplayTimeout: 5000,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
});
function enviarDatos() {
	var nombre = $('#nombre').val();
	var dni = $('#dni').val();
	var correo = $('#correo').val();
	var celular = $('#celular').val();
	var mensaje = $('#mensaje').val();
	if (nombre == null || nombre == '') {
		return;
	}
	if (dni == null || dni == '') {
		return;
	}
	if (correo == null || correo == '') {
		return;
	}
	if (celular == null || celular == '') {
		return;
	}
	$.ajax({
		data: {
			nombre: nombre,
			correo: correo,
			celular: celular,
			mensaje: mensaje,
			dni: dni
		},
		url: 'Home/enviarDatos',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#nombre').val("");
				$('#dni').val("");
				$('#correo').val("");
				$('#celular').val("");
				$('#mensaje').val("");
			} else {
				$('#usuario').parent().addClass('is-invalid');
				$('#password').parent().addClass('is-invalid');
				return;
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function comentar() {
	var comentario = $('#tacomentario').val().trim();
	if (comentario.length == 0) {
		return;
	}
	$(".abcRioButtonLightBlue").on("click", function () {
	});
	$(".abcRioButtonLightBlue").trigger("click");
}
function onSignIn(googleUser) {
	// console.log('ID: '        + profile.getId()); // Do not send to your backend! Use an ID token instead.
	// console.log('Name: '      + profile.getGivenName());
	// console.log('Name: '      + profile.getFamilyName());
	// console.log('Image URL: ' + profile.getImageUrl());
	// console.log('Email: '     + profile.getEmail()); // This is null if the 'email' scope is not present.
	var comentario = $('#tacomentario').val().trim();
	var profile = googleUser.getBasicProfile();
	$.ajax({
		data: {
			comentario: comentario,
			name: profile.getGivenName(),
			lastname: profile.getFamilyName(),
			imageUrl: profile.getImageUrl(),
			email: profile.getEmail()
		},
		url: 'Home/comentar',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#tacomentario').val("");
				$('.owl-stage').html('');
				$('.owl-stage').append(data.comentarios);
			} else {
				return;
			}
			signOut();
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function signOut() {
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function () {
		auth2.disconnect();
		gapi.auth2.getAuthInstance().currentUser.get().reloadAuthResponse();
	});
}
function buscarOferta() {
	var texto = $('#texto').val();
	$.ajax({
		data: { texto: texto },
		url: 'Home/buscarOferta',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#texto').val("");
				$('.ofertas-insert').html('');
				$('.ofertas-insert').append(data.html);
				$('.paquetes-insert').html('');
				$('.paquetes-insert').append(data.htmlPaq);
			} else {
				return;
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function verificarDatos(e) {
	if (e.keyCode === 13) {
		e.preventDefault();
		buscarOferta();
	}
}
function openModalOferta(id){
	var modal      = $('#ModalOferta');
	var idButton   = $('#'+id);
	var nameOferta = idButton.parents('.mdl-card__title').find('.js-paquete-name');
	var htmlModal  = idButton.parents('.mdl-ofertas').find('.modal-paquete');
    modal.find('.mdl-card__title').find('h2').text(nameOferta[0].innerText);
    modal.find('.mdl-card__supporting-text').html(htmlModal);
    modal.find('.mdl-card__supporting-text').find('.modal-paquete').css('display','block');
    modal.modal('show');
}
function openModalPaquete(id){
	var modal      = $('#ModalPaquete');
	var idButton   = $('#'+id);
	var nameOferta = idButton.parents('.mdl-card__title').find('.js-paquete-name');
	var htmlModal  = idButton.parents('.mdl-paquetes').find('.modal-oferta');
    modal.find('.mdl-card__title').find('h2').text(nameOferta[0].innerText);
    modal.find('.mdl-card__supporting-text').html(htmlModal);
    modal.find('.mdl-card__supporting-text').find('.modal-oferta').css('display','block');
    modal.modal('show');
}