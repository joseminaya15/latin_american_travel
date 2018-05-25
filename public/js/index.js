$('#principal .owl-carousel').owlCarousel({
	lazyLoad : true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	autoplayTimeout : 5000
});
$('#experiencia .owl-carousel').owlCarousel({
	lazyLoad : true,
	responsive : {
		0 : {
			items : 1
		},
		600:{
			items : 2
		},
		1200:{
			items : 3
		}
	},
	navigation : false,
	nav : true,
	loop : false,
	dots: false,
	autoplay : false,
	autoplayTimeout : 5000,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
});
function enviarDatos(){
	var nombre = $('#nombre').val();
	var dni = $('#dni').val();
	var correo = $('#correo').val();
	var celular = $('#celular').val();
	var mensaje = $('#mensaje').val();
	if(nombre == null || nombre == ''){
		return;
	}
	if(dni == null || dni == ''){
		return;
	}
	if(correo == null || correo == ''){
		return;
	}
	if(celular == null || celular == ''){
		return;
	}
	$.ajax({
		data : {nombre  : nombre,
				correo  : correo,
				celular : celular,
				mensaje : mensaje,
				dni 	: dni},
		url  : 'Home/enviarDatos',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	$('#nombre').val("");
        	$('#dni').val("");
        	$('#correo').val("");
        	$('#celular').val("");
        	$('#mensaje').val("");
        }else {
			$('#usuario').parent().addClass('is-invalid');
			$('#password').parent().addClass('is-invalid');
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}
function comentar(){
	$( ".abcRioButtonLightBlue" ).on( "click", function() {
	});
	$( ".abcRioButtonLightBlue" ).trigger("click");
}