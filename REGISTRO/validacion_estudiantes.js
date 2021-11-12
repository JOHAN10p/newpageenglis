
/* DEFINICION DE VARIABLES*/

const form = document.getElementById('form');
const nombre = document.getElementById('nombre');
const apellido = document.getElementById('apellido');
const usuario = document.getElementById('usuario');
const correo = document.getElementById('correo');
const password = document.getElementById('password');
const confirmpassword = document.getElementById('confirmpassword');

/* DEFINICION DE VARIABLES*/


/* FUNCIÓN CONFIRMAR INPUTS */

form.addEventListener('submit', e => {
	/*e.preventDefault();*/
	
	revImputs();
});


/* FUNCIÓN CONFIRMAR INPUTS */





/* FUNCIÓN CONFIRMAR INPUTS */

function revImputs() {

	const nombreValue = nombre.value.trim();
	const apellidoValue = apellido.value.trim();
	const usuarioValue = usuario.value.trim();
	const correovalue = correo.value.trim();
	const passwordValue = password.value.trim();
	const confirmpasswordValue = confirmpassword.value.trim();

    /* FUNCIÓN CONFIRMAR INPUTS */	


    /* VALIDAR NOMBRE */

	if(nombreValue === '') {

		setErrorFor(nombre, ' Hay espacios ');

	} else {

		setSuccessFor(nombre);

	}
	
    /* VALIDAR 	NOMBRE */


	
    /* VALIDAR APELLIDO */

	if(apellidoValue === '') {

		setErrorFor(apellido, ' Hay espacios ');

	} else {

		setSuccessFor(apellido);

	}
	
    /* VALIDAR APELLIDO */



    /* VALIDAR USUARIO */

	if(usuarioValue === '') {

		setErrorFor(usuario, ' Hay espacios ');

	} else {

		setSuccessFor(usuario);

	}
	
    /* VALIDAR USUARIO */


	
    
    
        /* VALIDAR CORREO */
    
    if(correovalue === '') {

		setErrorFor(correo, 'Hay espacios');

	} else if (!isEmail(correovalue)) {


		setErrorFor(correo, 'Correo invalido');

	} else {

		setSuccessFor(correo);
	}
	

    /* VALIDAR CORREO */






    /* VALIDAR CONTRASEÑA */

	if(passwordValue === '') {

		setErrorFor(password, 'Hay espacios');

	} else {

		setSuccessFor(password);
	}


    /* VALIDAR CONTRASEÑA */







    /* CONFIRMAR CONTRASEÑA */
	
	if(confirmpasswordValue === '') {
		setErrorFor(confirmpassword, 'Hay espacios');
	} else if(confirmpasswordValue !== passwordValue) {
		setErrorFor(confirmpassword, 'No coinciden');
	} else{
		setSuccessFor(confirmpassword);
	}
}

    /* CONFIRMAR CONTRASEÑA */
	



function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(correo) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(correo);
}

document.querySelector('.campo span').addEventListener('click', e => {
    const passwordInput = document.querySelector('#password');
    if (e.target.classList.contains('show')) {
        e.target.classList.remove('show');
        e.target.textContent = '🔐';
        passwordInput.type = 'text';
    } else {
        e.target.classList.add('show');
        e.target.textContent = '👁️';
        passwordInput.type = 'password';
    }
});
