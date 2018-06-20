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
				$('.ofertas-insert').append(data.ofertas);
				$('.paquetes-insert').html('');
				$('.paquetes-insert').append(data.paquetes);
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
function goToOferta(id) {
	sessionStorage.setItem('BUTTON_OFERTA', id);
	$('.mdl-navigation__link').addClass('active');
	location.href = 'Offer';
}
function goToPaquete(id) {
	sessionStorage.setItem('BUTTON_PAQUETE', id);
	$('.mdl-navigation__link').addClass('active');
	location.href = 'Package';
}
function goToMenu(id) {
	var idLink = $('#' + id);
	var idSection = $('#section-' + id);
	$('.mdl-navigation__link').removeClass('active');
	$('.js-section--menu').addClass('animated fadeOut');
	idSection.removeClass('animated fadeOut');
	idSection.addClass('animated fadeIn');
	idLink.addClass('active');
}

var idOferta = null;
var card_oferta = null;
var idPaquete = null;
var card_paquete = null;
function resetDatos() {
	idOferta = null;
	card_oferta = null;
	idPaquete = null;
	card_paquete = null;
}

function modalEliminarOferta(element) {
	idOferta = $(element).parent().attr("data-oferta");
	card_oferta = $(element).parent().parent().parent().parent();
	$('#btnConfirmarEliminar').attr('onclick', 'eliminarCardOferta()');
	modal('ModalConfirmar');
}

function eliminarCardOferta() {
	if (card_oferta == null || idOferta == null) {
		return
	}
	$.ajax({
		data: { idOferta: idOferta },
		url: 'Admin/eliminarCardOferta',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				card_oferta.remove();
				modal('ModalConfirmar');
				resetDatos();
			} else {
				return;
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function modalEliminarPaquete(element) {
	idPaquete = $(element).parent().attr("data-paquete");
	card_paquete = $(element).parent().parent().parent().parent();
	$('#btnConfirmarEliminar').attr('onclick', 'eliminarCardPaquete()');
	modal('ModalConfirmar');
}

function eliminarCardPaquete() {
	if (card_paquete == null || idPaquete == null) {
		return
	}
	$.ajax({
		data: { idPaquete: idPaquete },
		url: 'Admin/eliminarCardPaquete',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				card_paquete.remove();
				modal('ModalConfirmar');
				resetDatos();
			} else {
				return;
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
var arrayTableAtractivosOff = [];
function modalCrearOferta() {
	$('#titleOferta').html('Registrar oferta');
	limpiarModalOferta();
	modal('ModalCrearOferta');
}

function agregarAtractivoOff() {
	varLugar = $('#lugarAtractivoOff').val().trim();
	varDesc = $('#descripcionAtractivoOff').val().trim();
	if (varLugar.length == 0 || varDesc.length == 0) {
		return;
	}
	arrayTableAtractivosOff.push({ lugar: varLugar, desc: varDesc });
	cont_html = "";
	$.each(arrayTableAtractivosOff, function (index, value) {
		cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
			'<td><i class="mdi mdi-delete" onclick="deleteAtractivoOff(' + index + ')"></i></td></tr>';
	});
	$('#cont_tabla_ofertas').html(cont_html);
	$('#lugarAtractivoOff').val(null);
	$('#descripcionAtractivoOff').val(null);
}

function registrarOferta() {
	varTitulo = $('#tituloAtractivoOff').val().trim();
	varDias = $('#diasAtractivoOff').val().trim();
	varDesc = $('#descAtractivoOff').val().trim();
	if (varTitulo.length == 0 || varDias.length == 0 || varDesc.length == 0 || arrayTableAtractivosOff.length == 0) {
		return;
	}

	$.ajax({
		data: {
			titulo: varTitulo,
			dias: varDias,
			desc: varDesc,
			atractivos: arrayTableAtractivosOff
		},
		url: 'Admin/registrarOferta',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				arrayTableAtractivosOff = []
				$('#cont_ofertas').html(data.htmlOff);
				componentHandler.upgradeAllRegistered();
				modal('ModalCrearOferta');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function deleteAtractivoOff(index) {
	arrayTableAtractivosOff.splice(index, 1);
	cont_html = "";
	$.each(arrayTableAtractivosOff, function (index, value) {
		cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
			'<td><i class="mdi mdi-delete" onclick="deleteAtractivoOff(' + index + ')"></i></td></tr>';
	});
	$('#cont_tabla_ofertas').html(cont_html);
}

var arrayTableAtractivos = [];
function modalCrearPaquete() {
	flgRegistrarAtractivo = null;
	$('#titlePaquete').html('Registrar paquete');
	limpiarModalPaquete();
	$('#tituloAtractivo').removeAttr('onchange');
	$('#diasAtractivo').removeAttr('onchange');
	$('#btnConfirmarRegistrar').show();
	modal('ModalCrearPaquete');
}
var flgRegistrarAtractivo = null;//1 = insertar en bd - null agregar al array
function agregarAtractivo() {
	varLugar = $('#lugarAtractivo').val().trim();
	varDesc = $('#descripcionAtractivo').val().trim();
	if (varLugar.length == 0 || varDesc.length == 0) {
		return;
	}

	if(flgRegistrarAtractivo != null && idPaquete != null) {
		$.ajax({
			data: {
				lugar     : varLugar, 
				desc      :  varDesc,
				idPaquete : idPaquete
			},
			url: 'Admin/registrarAtractivo',
			type: 'POST'
		}).done(function (data) {
			try {
				data = JSON.parse(data);
				if (data.error == 0) {
					arrayTableAtractivos.push({ lugar: varLugar, desc: varDesc, id: data.id});
					cont_html = "";
					$.each(arrayTableAtractivos, function (index, value) {
						cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
							'<td><i class="mdi mdi-delete" onclick="deleteAtractivo(' + index + ', '+value.id+')"></i></td></tr>';
					});
					$('#cont_tabla_paquetes').html(cont_html);
					$('#lugarAtractivo').val(null);
					$('#descripcionAtractivo').val(null);
					msj('error', 'Se agregó correctamente.');
				}
			} catch (err) {
				msj('error', err.message);
			}
		});
	} else {
		arrayTableAtractivos.push({ lugar: varLugar, desc: varDesc, id: null});
		cont_html = "";
		$.each(arrayTableAtractivos, function (index, value) {
			cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
				'<td><i class="mdi mdi-delete" onclick="deleteAtractivo(' + index + ', '+value.id+')"></i></td></tr>';
		});
		$('#cont_tabla_paquetes').html(cont_html);
		$('#lugarAtractivo').val(null);
		$('#descripcionAtractivo').val(null);
	}
}

function registrarPaquete() {
	varTitulo = $('#tituloAtractivo').val().trim();
	varDias = $('#diasAtractivo').val().trim();
	if (varTitulo.length == 0 || varDias.length == 0 || arrayTableAtractivos.length == 0) {
		return;
	}

	$.ajax({
		data: {
			titulo: varTitulo,
			dias: varDias,
			atractivos: arrayTableAtractivos
		},
		url: 'Admin/registrarPaquete',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				arrayTableAtractivos = [];
				$('#cont_paquetes').html(data.htmlPaq);
				componentHandler.upgradeAllRegistered();
				modal('ModalCrearPaquete');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function deleteAtractivo(indice,id) {
	if(flgRegistrarAtractivo != null && idPaquete != null) {
		$.ajax({
			data: { id        : id, 
				    idPaquete : idPaquete},
			url: 'Admin/eliminarAtractivo',
			type: 'POST'
		}).done(function (data) {
			try {
				data = JSON.parse(data);
				if(data.error == 0){
					arrayTableAtractivos.splice(indice, 1);
					cont_html = "";
					$.each(arrayTableAtractivos, function (index, value) {
						cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
							'<td><i class="mdi mdi-delete" onclick="deleteAtractivo('+ index +','+value.id+')"></i></td></tr>';
					});
					$('#cont_tabla_paquetes').html(cont_html);
					msj('error', 'Se editó correctamente.');
				} else {
					msj('error', 'El paquete debe tener al menos un atractivo.');
				}
			} catch (err) {
				msj('error', err.message);
			}
		});
	} else {
		arrayTableAtractivos.splice(indice, 1);
		cont_html = "";
		$.each(arrayTableAtractivos, function (index, value) {
			cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
				'<td><i class="mdi mdi-delete" onclick="deleteAtractivo('+ index +','+value.id+')"></i></td></tr>';
		});
		$('#cont_tabla_paquetes').html(cont_html);
	}
}

function eliminarComentarios(id_comentario) {
	$.ajax({
		data: { id_comentario: id_comentario },
		url: 'Admin/eliminarComentarios',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#cont_tabla').html();
				$('#cont_tabla').append(data.html);
			} else {
				return;
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
$( window ).load(function(){
	setTimeout(function() {
		$('.mdl-layout__drawer-button i').empty();
		$('.mdl-layout__drawer-button i').removeClass('material-icons');
		$('.mdl-layout__drawer-button i').addClass('mdi mdi-menu');
	}, 250);
});

function cerrarSesion(){
	$.ajax({
		data: {},
		url: 'Admin/cerrarSesion',
		type: 'POST'
	}).done(function (data) {
		try {
			location.href = 'Login';
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function modalEditarPaquete(element){
	$('#titlePaquete').html('Editar paquete');
	
	idPaquete = $(element).parent().attr("data-paquete");
	card_paquete = $(element).parent().parent().parent().parent();
	limpiarModalPaquete();
	flgRegistrarAtractivo = 1;
	$.ajax({
		data: {idPaquete : idPaquete},
		url: 'Admin/modalEditarPaquete',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			$('#tituloAtractivo').val(data.titulo);
			$('#tituloAtractivo').parent().addClass('is-dirty');
			$('#tituloAtractivo').attr('onchange', 'editarTitulo()');
			
			$('#diasAtractivo').val(data.dias);
			$('#diasAtractivo').parent().addClass('is-dirty');
			$('#diasAtractivo').attr('onchange', 'editarDias()');
			cont_html = "";
			arrayTableAtractivos = data.array_lugares;
			$.each(arrayTableAtractivos, function (index, value) {
				cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
					'<td><i class="mdi mdi-delete" onclick="deleteAtractivo(' + index + ','+value.id+')"></i></td></tr>';
			});
			$('#cont_tabla_paquetes').html(cont_html);
			$('#btnConfirmarRegistrar').hide();
			modal('ModalCrearPaquete');
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function editarTitulo(){
	varTitulo = $('#tituloAtractivo').val().trim();
	if (varTitulo.length == 0) {
		return;
	}
	$.ajax({
		data: { titulo : varTitulo,
			 idPaquete : idPaquete },
		url: 'Admin/editarTitulo',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				msj('error', 'Se editó correctamente.');
				card_paquete.find('.js-paquete-name').html('<p>'+varTitulo+'</p>');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function editarDias(){
	varDias = $('#diasAtractivo').val().trim();
	if (varDias.length == 0) {
		return;
	}
	$.ajax({
		data: {  dias : varDias,
			idPaquete : idPaquete },
		url: 'Admin/editarDias',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				msj('error', 'Se editó correctamente.');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}


// function editarPaquete(){
// 	varTitulo = $('#tituloAtractivo').val().trim();
// 	varDias = $('#diasAtractivo').val().trim();
// 	if (varTitulo.length == 0 || varDias.length == 0 || arrayTableAtractivos.length == 0) {
// 		return;
// 	}
// 	$.ajax({
// 		data: { titulo: varTitulo,
// 				dias: varDias,
// 				atractivos: arrayTableAtractivos},
// 		url: 'Admin/editarPaquete',
// 		type: 'POST'
// 	}).done(function (data) {
// 		try {
// 			data = JSON.parse(data);
// 			arrayTableAtractivos = [];
// 			$('#btnConfirmarRegistrar').attr('onclick', '');
// 			modal('ModalCrearPaquete');
// 		} catch (err) {
// 			msj('error', err.message);
// 		}
// 	});
// }

function modalEditarOferta(){
	$('#titleOferta').html('Editar oferta');
	limpiarModalOferta();
	modal('ModalCrearOferta');
}

function limpiarModalOferta(){
	$('#tituloAtractivoOff').val(null);
	$('#diasAtractivoOff').val(null);
	$('#descAtractivoOff').val(null);
	$('#lugarAtractivoOff').val(null);
	$('#descripcionAtractivoOff').val(null);
	$('#cont_tabla_ofertas').html(null);
	arrayTableAtractivosOff = [];
}
function limpiarModalPaquete(){
	$('#tituloAtractivo').val(null);
	$('#diasAtractivo').val(null);
	$('#lugarAtractivo').val(null);
	$('#descripcionAtractivo').val(null);
	$('#cont_tabla_paquetes').html(null);
	arrayTableAtractivos = [];
}