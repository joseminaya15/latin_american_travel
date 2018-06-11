function ingresar() {
	// $(".abcRioButtonLightBlue").on("click", function () {
	// });
	// $(".abcRioButtonLightBlue").trigger("click");
	var usuario = $('#usuario').val();
	var password = $('#password').val();

	if (usuario == null || password == null) {
		return;
	}
	$.ajax({
		data: {
			user: usuario,
			pass: password
		},
		url: 'Login/ingresar',
		type: 'POST'
	}).done(function (data) {
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				location.href = 'Admin';
			} else {
				msj('error', 'Usuario o contraseña incorrectos');
			}
		} catch (err) {
			msj('error', err.message);
		}
	});

}

function onSignIn(googleUser) {
	// console.log('ID: '        + profile.getId()); // Do not send to your backend! Use an ID token instead.
	// console.log('Name: '      + profile.getGivenName());
	// console.log('Name: '      + profile.getFamilyName());
	// console.log('Image URL: ' + profile.getImageUrl());
	// console.log('Email: '     + profile.getEmail()); // This is null if the 'email' scope is not present.
	// var comentario = $('#tacomentario').val().trim();
	var profile = googleUser.getBasicProfile();
	$.ajax({
		data: {
			// comentario: comentario,
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