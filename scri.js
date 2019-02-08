function validar() {
	var estaTodoOK = true;

	if (document.getElementById("nombreyapellido").value.length<=3 ) {
		estaTodoOK = false;	
	}

	if (document.getElementById("nombreyapellido").value=="") {
		estaTodoOK = false;	
	}

	var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

	if (!expresion.test(document.getElementById("correo").value)) {
		estaTodoOK = false;	
	}

	if (!estaTodoOK) {
		alert("Algunos datos tienen errores ó estan Vacios, por favor corríjalos antes de volver a enviar");	
	}
	
	return estaTodoOK;
}