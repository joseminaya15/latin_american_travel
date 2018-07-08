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
$('#principal .owl-carousel').owlCarousel({
	lazyLoad: true,
	responsive: {
		0: {
			items: 1
		}
	},
	navigation: false,
	nav: true,
	loop: false,
	dots: true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	autoplay: true,
	autoplayTimeout: 5000,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
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
$('.js-slider .owl-carousel').owlCarousel({
	lazyLoad: true,
	responsive: {
		0: {
			items: 1
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
				// $('.ofertas-insert').html('');
				// $('.ofertas-insert').append(data.ofertas);
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
	location.href = 'DetailOffer';
}
function goToPaquete(id) {
	sessionStorage.setItem('BUTTON_PAQUETE', id);
	$('.mdl-navigation__link').addClass('active');
	location.href = 'DetailPackage';
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
/////////////////////////////////////////////////////////////////////////////////////////////////////
var arrayTableAtractivosOff = [];
function modalCrearOferta() {
	flgRegistrarAtractivoOff = null;
	$('#titleOferta').html('Registrar oferta');
	$('#tituloAtractivoOff').removeAttr('onchange');
	$('#diasAtractivoOff').removeAttr('onchange');
	$('#descAtractivoOff').removeAttr('onchange');
	$('#btnSubirImagenOff').text('Subir imagen');
	$('#btnSubirImagenOff').css('background-color','rgba(158,158,158,.2)');
	$('#btnSubirImagenOff').css('color','#000');
	$('#btnConfirmarRegistrarOff').show();

	resetDatos();
	limpiarModalOferta();
	modal('ModalCrearOferta');
}

var arrayTableAtractivos = [];
function modalCrearPaquete() {
	flgRegistrarAtractivo = null;
	$('#titlePaquete').html('Registrar paquete');
	$('#tituloAtractivo').removeAttr('onchange');
	$('#diasAtractivo').removeAttr('onchange');
	$('#btnConfirmarRegistrar').show();
	
	resetDatos();
	limpiarModalPaquete();
	modal('ModalCrearPaquete');
}
////////////////////////////////////////////////////////////////////////////////////////////////////

function deleteAtractivo(indice,id) {
	if(flgRegistrarAtractivo != null && idPaquete != null) {
		$.ajax({
			data: { idAtractivo : id, 
					idEliminar  : idPaquete,
					flg         : 2 },
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
					msj('error', 'Debe tener al menos un atractivo.');
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

function deleteAtractivoOff(indice,id) {
	if(flgRegistrarAtractivoOff != null && idOferta != null) {
		$.ajax({
			data: { idAtractivo : id, 
				    idEliminar  : idOferta,
					flg         : 1 },
			url: 'Admin/eliminarAtractivo',
			type: 'POST'
		}).done(function (data) {
			try {
				data = JSON.parse(data);
				if(data.error == 0){
					arrayTableAtractivosOff.splice(indice, 1);
					cont_html = "";
					titulo = "";
					$.each(arrayTableAtractivosOff, function (index, value) {
						$text = (index == 0) ? "" : " - ";
						titulo+= $text+value.lugar;
						cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
							'<td><i class="mdi mdi-delete" onclick="deleteAtractivoOff(' + index + ','+value.id+')"></i></td></tr>';
					});
					card_oferta.find('.cont_lugares').html(titulo);
					$('#cont_tabla_ofertas').html(cont_html);
					msj('error', 'Se editó correctamente.');
				} else {
					msj('error', 'Debe tener al menos un atractivo.');
				}
			} catch (err) {
				msj('error', err.message);
			}
		});

					
	} else {
		arrayTableAtractivosOff.splice(indice, 1);
		cont_html = "";
		$.each(arrayTableAtractivosOff, function (index, value) {
			cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
				'<td><i class="mdi mdi-delete" onclick="deleteAtractivoOff(' + index + ','+value.id+')"></i></td></tr>';
		});
		$('#cont_tabla_ofertas').html(cont_html);
	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
var flgRegistrarAtractivo    = null;//1 = insertar en bd - null agregar al array
var flgRegistrarAtractivoOff = null;//1 = insertar en bd - null agregar al array
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
				desc      : varDesc,
				id        : idPaquete,
				flg       : 2
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

function agregarAtractivoOff() {
	varLugar = $('#lugarAtractivoOff').val().trim();
	varDesc = $('#descripcionAtractivoOff').val().trim();
	if (varLugar.length == 0 || varDesc.length == 0) {
		return;
	}
	if(flgRegistrarAtractivoOff != null && idOferta != null) {
		$.ajax({
			data: {
				lugar     : varLugar, 
				desc      : varDesc,
				id        : idOferta,
				flg       : 1
			},
			url: 'Admin/registrarAtractivo',
			type: 'POST'
		}).done(function (data) {
			try {
				data = JSON.parse(data);
				if (data.error == 0) {
					arrayTableAtractivosOff.push({ lugar: varLugar, desc: varDesc, id: data.id });
					cont_html = "";
					titulo = "";
					$.each(arrayTableAtractivosOff, function (index, value) {
						$text = (index == 0) ? "" : " - ";
						titulo+= $text+value.lugar;
						cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
							'<td><i class="mdi mdi-delete" onclick="deleteAtractivoOff(' + index + ','+value.id+')"></i></td></tr>';
					});
					card_oferta.find('.cont_lugares').html(titulo);
					$('#cont_tabla_ofertas').html(cont_html);
					$('#lugarAtractivoOff').val(null);
					$('#descripcionAtractivoOff').val(null);
				}
			} catch (err) {
				msj('error', err.message);
			}
		});
	} else {
		arrayTableAtractivosOff.push({ lugar: varLugar, desc: varDesc });
		cont_html = "";
		$.each(arrayTableAtractivosOff, function (index, value) {
			cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
				'<td><i class="mdi mdi-delete" onclick="deleteAtractivoOff(' + index + ','+value.id+')"></i></td></tr>';
		});
		$('#cont_tabla_ofertas').html(cont_html);
		$('#lugarAtractivoOff').val(null);
		$('#descripcionAtractivoOff').val(null);
	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function registrarPaquete() {
	varTitulo = $('#tituloAtractivo').val().trim();
	varDias = $('#diasAtractivo').val().trim();
	if (varTitulo.length == 0 || varDias.length == 0 || arrayTableAtractivos.length == 0) {
		return;
	}
	var img = cargarImagen();
	setTimeout(function(){
		if(nameImgPaquete == null){
			return;
		}
		$.ajax({
			data: {
				titulo: varTitulo,
				dias: varDias,
				atractivos: arrayTableAtractivos,
				img : nameImgPaquete
			},
			url: 'Admin/registrarPaquete',
			type: 'POST'
		}).done(function (data) {
			try {
				data = JSON.parse(data);
				if (data.error == 0) {
					arrayTableAtractivos = [];
					nameImgPaquete = null;
					$('#cont_paquetes').html(data.htmlPaq);
					componentHandler.upgradeAllRegistered();
					modal('ModalCrearPaquete');
				}
			} catch (err) {
				msj('error', err.message);
			}
		});
	}, 1000);
}
function registrarOferta() {
	varTitulo = $('#tituloAtractivoOff').val().trim();
	varDias = $('#diasAtractivoOff').val().trim();
	varDesc = $('#descAtractivoOff').val().trim();
	if (varTitulo.length == 0 || varDias.length == 0 || varDesc.length == 0 || arrayTableAtractivosOff.length == 0) {
		return;
	}

	var img = cargarImagenOff();
	setTimeout(function(){
		if(nameImgOferta == null){
			return;
		}
		$.ajax({
			data: {
				titulo: varTitulo,
				dias: varDias,
				desc: varDesc,
				atractivos: arrayTableAtractivosOff,
				img : nameImgOferta
			},
			url: 'Admin/registrarOferta',
			type: 'POST'
		}).done(function (data) {
			try {
				data = JSON.parse(data);
				if (data.error == 0) {
					arrayTableAtractivosOff = [];
					nameImgOferta = null;
					$('#cont_ofertas').html(data.htmlOff);
					componentHandler.upgradeAllRegistered();
					modal('ModalCrearOferta');
				}
			} catch (err) {
				msj('error', err.message);
			}
		});
	}, 1000);
}
////////////////////////////////////////////////////////////////////////////////////////////////////
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
////////////////////////////////////////////////////////////////////////////////////////////////////
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

			$('#btnSubirImagen').text('Cargado');
			$('#btnSubirImagen').css('background-color','#5CB85C');
			$('#btnSubirImagen').css('color','#FFFFFF');
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

function modalEditarOferta(element){
	$('#titleOferta').html('Editar oferta');
	idOferta = $(element).parent().attr("data-oferta");
	card_oferta = $(element).parent().parent().parent().parent();
	limpiarModalOferta();
	flgRegistrarAtractivoOff = 1;
	$.ajax({
		data: {idOferta : idOferta},
		url: 'Admin/modalEditarOferta',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			$('#tituloAtractivoOff').val(data.titulo);
			$('#tituloAtractivoOff').parent().addClass('is-dirty');
			$('#tituloAtractivoOff').attr('onchange', 'editarTituloOff()');
			
			$('#diasAtractivoOff').val(data.dias);
			$('#diasAtractivoOff').parent().addClass('is-dirty');
			$('#diasAtractivoOff').attr('onchange', 'editarDiasOff()');

			$('#descAtractivoOff').val(data.desc_general);
			$('#descAtractivoOff').parent().addClass('is-dirty');
			$('#descAtractivoOff').attr('onchange', 'editarDiasDescGeneral()');

			$('#btnSubirImagenOff').text('Cargado');
			$('#btnSubirImagenOff').css('background-color','#5CB85C');
			$('#btnSubirImagenOff').css('color','#FFFFFF');

			
			cont_html = "";
			arrayTableAtractivosOff = data.array_lugares;
			$.each(arrayTableAtractivosOff, function (index, value) {
				cont_html += '<tr><td>' + value.lugar + '</td><td>' + value.desc + '</td>' +
					'<td><i class="mdi mdi-delete" onclick="deleteAtractivoOff(' + index + ','+value.id+')"></i></td></tr>';
			});
			$('#cont_tabla_ofertas').html(cont_html);
			$('#btnConfirmarRegistrarOff').hide();
			modal('ModalCrearOferta');
		} catch (err) {
			msj('error', err.message);
		}
	});
}
//////////////////////////////////////////////////////////////////////
function editarTituloOff(){
	varTitulo = $('#tituloAtractivoOff').val().trim();
	if (varTitulo.length == 0) {
		return;
	}
	$.ajax({
		data: { titulo : varTitulo,
			idOferta : idOferta },
		url: 'Admin/editarTituloOff',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				msj('error', 'Se editó correctamente.');
				card_oferta.find('.js-paquete-name').html('<p>'+varTitulo+'</p>');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function editarDiasOff(){
	varDias = $('#diasAtractivoOff').val().trim();
	if (varDias.length == 0) {
		return;
	}
	$.ajax({
		data: {  dias : varDias,
			idOferta : idOferta },
		url: 'Admin/editarDiasOff',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				card_oferta.find('.cont_dias').html(varDias);
				msj('error', 'Se editó correctamente.');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function editarDiasDescGeneral(){
	varDesc = $('#descAtractivoOff').val().trim();
	if (varDesc.length == 0) {
		return;
	}
	$.ajax({
		data: {  desc : varDesc,
			idOferta : idOferta },
		url: 'Admin/editarDescGeneral',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				card_oferta.find('.js-contenido').html('<p>'+varDesc+'</p>');
				msj('error', 'Se editó correctamente.');
			}
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
				card_paquete.find('.js-paquete-name').html('<p>'+varTitulo+'</p>');
				msj('error', 'Se editó correctamente.');
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
//////////////////////////////////////////////////////////////////////////7
function limpiarModalOferta(){
	$('#tituloAtractivoOff').val(null);
	$('#diasAtractivoOff').val(null);
	$('#descAtractivoOff').val(null);
	$('#lugarAtractivoOff').val(null);
	$('#descripcionAtractivoOff').val(null);
	$('#cont_tabla_ofertas').html(null);

	$('#btnSubirImagen').text('Subir imagen');
	$('#btnSubirImagen').css('background-color','rgba(158,158,158,.2)');
	$('#btnSubirImagen').css('color','#000');
	$('#archivoOff').val(null);
	arrayTableAtractivosOff = [];
}
function limpiarModalPaquete(){
	$('#tituloAtractivo').val(null);
	$('#diasAtractivo').val(null);
	$('#lugarAtractivo').val(null);
	$('#descripcionAtractivo').val(null);
	$('#cont_tabla_paquetes').html(null);
	
	$('#btnSubirImagen').text('Subir imagen');
	$('#btnSubirImagen').css('background-color','rgba(158,158,158,.2)');
	$('#btnSubirImagen').css('color','#000');
	$('#archivo').val(null);
	arrayTableAtractivos = [];
}

function subirImagen(){
	$( "#archivo" ).trigger( "click" );
}

$( "#archivo" ).change(function() {
	if(flgRegistrarAtractivo == null){
		var datos = new FormData();
		imagen = $('#archivo')[0].files[0];
		if(imagen == undefined){
			msj('error', 'Seleccione una imagen');
			return;
		}
		datos.append('archivo',$('#archivo')[0].files[0]);
		$.ajax({
			type:"post",
			dataType:"json",
			url:"Admin/verificarImg",
			contentType:false,
			data:datos,
			processData:false,
		}).done(function(respuesta){
			if(respuesta.mensaje == null){
				$('#btnSubirImagen').text('Cargado');
				$('#btnSubirImagen').css('background-color','#5CB85C');
				$('#btnSubirImagen').css('color','#FFFFFF');
			} else {
				$('#btnSubirImagen').text('Subir imagen');
				$('#btnSubirImagen').css('background-color','rgba(158,158,158,.2)');
				$('#btnSubirImagen').css('color','#000');
				
				$('#archivo').val(null);
				msj('error', respuesta.mensaje);
			}
		});
	} else {
		cargarImagen();
	}
	
});
var nameImgPaquete = null;
function cargarImagen(){
	nameImgPaquete = null;
	var datos = new FormData();
	imagen = $('#archivo')[0].files[0];
	if(imagen == undefined){
		msj('error', 'Seleccione una imagen');
		return;
	}
	datos.append('archivo',$('#archivo')[0].files[0]);
	$.ajax({
		type:"post",
		dataType:"json",
		url:"Admin/cargarImagen",
		contentType:false,
		data:datos,
		processData:false,
	}).done(function(respuesta){
		nameImgPaquete = respuesta.name;
		msj('error', respuesta.mensaje);
		if(flgRegistrarAtractivo != null && card_paquete != null && respuesta.name != null){
			card_paquete.find('.fondo-paquete').css("background-image", "url("+respuesta.ruta+")");
			editImg(respuesta.name,idPaquete,2);
		}
		return respuesta.name;
	});
}

function editImg(name,idPaquete,flg){
	$.ajax({
		data: {idPaquete : idPaquete,
			   name : name,
				flg : flg},
		url: 'Admin/editImg',
		type: 'POST'
	}).done(function (data) {
		try {
		} catch (err) {
			msj('error', err.message);
		}
	});
}
////////////////////////////////////////////////////////////////////////////////////////////
var varFlg = null;
function modalConfigurarDiasPaq(element){
	varFlg = 2;
	idPaquete = $(element).parent().attr("data-paquete");
	card_paquete = $(element).parent().parent().parent().parent();
	$('#desc_dia').val(null);
	$('#titulo_dia').val(null);

	// OBTENER DIAS CONFIGURADOS DE BD
	$.ajax({
		data: {idGrupo : idPaquete,
				flg : varFlg},
		url: 'Admin/getDiasByGrupo',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			cont_html = "";
			count = 0;
			arrayDias = data.dias == null ? [] : data.dias;
			
			$.each(arrayDias, function (index, value) {
				count++;
				cont_html += '<tr><td>Día '+count+'</td><td>'+value.desc_lugar+'</td><td>' + value.desc_viaje + '</td>' +
					'<td><i class="mdi mdi-delete" onclick="quitarDia(' + index + ','+value.id+')"></i></td></tr>';
			});
			$('#cont_tabla_dias').html(cont_html);
			modal('ModalDias');
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function modalConfigurarDiasOff(element){
	varFlg = 1;
	idOferta = $(element).parent().attr("data-oferta");
	card_oferta = $(element).parent().parent().parent().parent();
	$('#desc_dia').val(null);
	$('#titulo_dia').val(null);

	// OBTENER DIAS CONFIGURADOS DE BD
	$.ajax({
		data: {idGrupo : idOferta,
				flg    : varFlg},
		url: 'Admin/getDiasByGrupo',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			cont_html = "";
			count = 0;
			arrayDias = data.dias == null ? [] : data.dias;
			
			$.each(arrayDias, function (index, value) {
				count++;
				cont_html += '<tr><td>Día '+count+'</td><td>'+value.desc_lugar+'</td><td>' + value.desc_viaje + '</td>' +
					'<td><i class="mdi mdi-delete" onclick="quitarDia(' + index + ','+value.id+')"></i></td></tr>';
			});
			$('#cont_tabla_dias').html(cont_html);
			modal('ModalDias');
		} catch (err) {
			msj('error', err.message);
		}
	});
}
////////////////////////////////////////////////////////////////////////////
var arrayDias = [];

function agregarDia(){
	var varDesc = $('#desc_dia').val().trim();
	if (varDesc.length == 0) {
		return;
	}
	var varTitulo = $('#titulo_dia').val().trim();
	if (varTitulo.length == 0) {
		return;
	}
	
	// INSERTART DIA EN BD   idPaquete   RETORNAR ID DEL DIA
	idGrupo = (varFlg == 1) ? idOferta : idPaquete;
	$.ajax({
		data: { idGrupo   : idGrupo,
				varTitulo : varTitulo,
				varDesc   : varDesc,
				flg       : varFlg
			},
		url: 'Admin/agregarDia',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			arrayDias.push({ desc_lugar: varTitulo , desc_viaje: varDesc, id : data.id});
			cont_html = "";
			count = 0;
			$.each(arrayDias, function (index, value) {
				count++;
				cont_html += '<tr><td>Día '+count+'</td><td>'+value.desc_lugar+'</td><td>' + value.desc_viaje + '</td>' +
					'<td><i class="mdi mdi-delete" onclick="quitarDia(' + index + ','+value.id+')"></i></td></tr>';
			});
			$('#cont_tabla_dias').html(cont_html);
			$('#desc_dia').val(null);
			$('#titulo_dia').val(null);
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function quitarDia(indice,id){
	// ELIMINAR DE BD EL DIA
	idGrupo = (varFlg == 1) ? idOferta : idPaquete;
	$.ajax({
		data: { idGrupo : idGrupo,
				id        : id},
		url: 'Admin/quitarDia',
		type: 'POST'
	}).done(function (data) {
		try {
			arrayDias.splice(indice, 1);
			cont_html = "";
			count = 0;
			$.each(arrayDias, function (index, value) {
				count++;
				cont_html += '<tr><td>Día '+count+'</td><td>'+value.desc_lugar+'</td><td>' + value.desc_viaje + '</td>' +
					'<td><i class="mdi mdi-delete" onclick="quitarDia(' + index + ','+value.id+')"></i></td></tr>';
			});
			$('#cont_tabla_dias').html(cont_html);
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function subirImagenOff(){
	$( "#archivoOff" ).trigger( "click" );
}

$( "#archivoOff" ).change(function() {
	if(flgRegistrarAtractivoOff == null){
		var datos = new FormData();
		imagen = $('#archivoOff')[0].files[0];
		if(imagen == undefined){
			msj('error', 'Seleccione una imagen');
			return;
		}
		datos.append('archivo',$('#archivoOff')[0].files[0]);
		$.ajax({
			type:"post",
			dataType:"json",
			url:"Admin/verificarImg",
			contentType:false,
			data:datos,
			processData:false,
		}).done(function(respuesta){
			if(respuesta.mensaje == null){
				$('#btnSubirImagenOff').text('Cargado');
				$('#btnSubirImagenOff').css('background-color','#5CB85C');
				$('#btnSubirImagenOff').css('color','#FFFFFF');
			} else {
				$('#btnSubirImagenOff').text('Subir imagen');
				$('#btnSubirImagenOff').css('background-color','rgba(158,158,158,.2)');
				$('#btnSubirImagenOff').css('color','#000');
				$('#archivoOff').val(null);
				msj('error', respuesta.mensaje);
			}
		});
	} else {
		cargarImagenOff();
	}
	
});
var nameImgOferta = null;
function cargarImagenOff(){
	nameImgOferta = null;
	var datos = new FormData();
	imagen = $('#archivoOff')[0].files[0];
	if(imagen == undefined){
		msj('error', 'Seleccione una imagen');
		return;
	}
	datos.append('archivo',$('#archivoOff')[0].files[0]);
	$.ajax({
		type:"post",
		dataType:"json",
		url:"Admin/cargarImagenOff",
		contentType:false,
		data:datos,
		processData:false,
	}).done(function(respuesta){
		nameImgOferta = respuesta.name;
		msj('error', respuesta.mensaje);
		if(flgRegistrarAtractivoOff != null && card_oferta != null && respuesta.name != null){
			// card_oferta.find('.img-card-oferta').attr("src",respuesta.ruta);
			card_paquete.find('.fondo-oferta').css("background-image", "url("+respuesta.ruta+")");
			editImg(respuesta.name,idOferta,1);
		}
		return respuesta.name;
	});
}

function getPaquetesByDestino(element){
	var txt = $(element).html();
	$.ajax({
		data: { txt: txt },
		url: 'Package/getPaquetesByDestino',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#cont_paquetes').html(data.paquetes);
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function getOfertasByDestino(element){
	var txt = $(element).html();
	$.ajax({
		data: { txt: txt },
		url: 'Offer/getOfertasByDestino',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#cont_ofertas').html(data.ofertas);
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
var flgEditar = null;
var idEditarPrecio = null;
function modalEditarPrecio(element,flg) {
	$('#eco_1').val(null);
	$('#eco_2').val(null);
	$('#sup_1').val(null);
	$('#sup_2').val(null);
	$('#luj_1').val(null);
	$('#luj_2').val(null);

	$('#desc_incluye').val(null);
	$('#desc_no_incluye').val(null);
	$('#cont_tabla_incluye').html(null);
	$('#cont_tabla_no_incluye').html(null);

	arrayIncluye = [];
	arrayNoIncluye = [];
	
	flgEditar = flg;
	if(flg == 1) {
		idOferta = $(element).parent().attr("data-oferta");
		idEditarPrecio = idOferta;
	}	 else if (flg == 2){
		idPaquete = $(element).parent().attr("data-paquete");
		idEditarPrecio = idPaquete;
	}
	$.ajax({
		data: { flg  : flgEditar,
				id 	 : idEditarPrecio
			},
		url: 'Admin/modalEditarPrecio',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				if(data.precio != null){
					$('#eco_1').val(data.precio[0]);
					$('#eco_1').parent().addClass('is-dirty');
					$('#eco_2').val(data.precio[1]);
					$('#eco_2').parent().addClass('is-dirty');
					$('#sup_1').val(data.precio[2]);
					$('#sup_1').parent().addClass('is-dirty');
					$('#sup_2').val(data.precio[3]);
					$('#sup_2').parent().addClass('is-dirty');
					$('#luj_1').val(data.precio[4]);
					$('#luj_1').parent().addClass('is-dirty');
					$('#luj_2').val(data.precio[5]);
					$('#luj_2').parent().addClass('is-dirty');
				}
				if(data.incluye != null){
					arrayIncluye = data.incluye;
					cont_html = "";
					$.each(arrayIncluye, function (index, value) {
						cont_html += '<tr><td>' + value + '</td>' +
							'<td><i class="mdi mdi-delete" onclick="quitarIncluye(' + index + ')"></i></td></tr>';
					});
					$('#cont_tabla_incluye').html(cont_html);
				}
				if(data.no_incluye != null){
					arrayNoIncluye = data.no_incluye;
					cont_html = "";
					$.each(arrayNoIncluye, function (index, value) {
						cont_html += '<tr><td>' + value + '</td>' +
							'<td><i class="mdi mdi-delete" onclick="quitarNoIncluye(' + index + ')"></i></td></tr>';
					});
					$('#cont_tabla_no_incluye').html(cont_html);
				}
				modal('ModalPrecio');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}

function editarPrecio(){
	var eco_1 = $('#eco_1').val();
	var eco_2 = $('#eco_2').val();
	var sup_1 = $('#sup_1').val();
	var sup_2 = $('#sup_2').val();
	var luj_1 = $('#luj_1').val();
	var luj_2 = $('#luj_2').val();

	var txt_precio = eco_1+'|'+eco_2+'|'+sup_1+'|'+sup_2+'|'+luj_1+'|'+luj_2;
	$.ajax({
		data: { txt            : txt_precio,
				flg            : flgEditar,
				id             : idEditarPrecio,
				arrayIncluye   : arrayIncluye,
				arrayNoIncluye : arrayNoIncluye
			},
		url: 'Admin/editarPrecio',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#eco_1').val(null);
				$('#eco_2').val(null);
				$('#sup_1').val(null);
				$('#sup_2').val(null);
				$('#luj_1').val(null);
				$('#luj_2').val(null);
				msj('error', 'Se editó correctamente.');
				modal('ModalPrecio');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});
}

var arrayIncluye = [];
var arrayNoIncluye = [];
function agregarIncluye(){
	valdesc = $('#desc_incluye').val().trim().replace(/[|]/gi, '');
	if(valdesc.length == 0){
		return;
	}
	$('#desc_incluye').val(null);
	arrayIncluye.push(valdesc);
	cont_html = "";
	count = 0;
	$.each(arrayIncluye, function (index, value) {
		count++;
		cont_html += '<tr><td>' + value + '</td>' +
			'<td><i class="mdi mdi-delete" onclick="quitarIncluye(' + index + ')"></i></td></tr>';
	});
	$('#cont_tabla_incluye').html(cont_html);
}

function agregarNoIncluye(){
	valdesc = $('#desc_no_incluye').val().trim().replace(/[|]/gi, '');
	if(valdesc.length == 0){
		return;
	}
	$('#desc_no_incluye').val(null);
	arrayNoIncluye.push(valdesc);
	cont_html = "";
	$.each(arrayNoIncluye, function (index, value) {
		cont_html += '<tr><td>' + value + '</td>' +
			'<td><i class="mdi mdi-delete" onclick="quitarNoIncluye(' + index + ')"></i></td></tr>';
	});
	$('#cont_tabla_no_incluye').html(cont_html);
}

function quitarIncluye(indice){
	arrayIncluye.splice(indice, 1);
	cont_html = "";
	$.each(arrayIncluye, function (index, value) {
		cont_html += '<tr><td>' + value + '</td>' +
			'<td><i class="mdi mdi-delete" onclick="quitarIncluye(' + index + ')"></i></td></tr>';
	});
	$('#cont_tabla_incluye').html(cont_html);
}

function quitarNoIncluye(indice){
	arrayNoIncluye.splice(indice, 1);
	cont_html = "";
	count = 0;
	$.each(arrayNoIncluye, function (index, value) {
		count++;
		cont_html += '<tr><td>' + value + '</td>' +
			'<td><i class="mdi mdi-delete" onclick="quitarNoIncluye(' + index + ')"></i></td></tr>';
	});
	$('#cont_tabla_no_incluye').html(cont_html);
}