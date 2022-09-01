const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}


//inputs.forEach((input)=>{
//	input.addEventListener('keyup', () =>{
//		console.log('Tecla soltada'); 
//	});
//})

const validarForm = (e) => {
	switch(e.target.name){
		case "usuario":
			if (expresiones.usuario.test(e.target.value)){
				document.getElementById('_usuario').classList.remove('formulario_grupo-incorrecto');
				document.getElementById('_usuario').classList.add('formulario_grupo-correcto');
				document.querySelector('#_usuario i').classList.add('fa-circle-check');
				document.querySelector('#_usuario i').classList.remove('fa-circle-xmark');
				document.querySelector('#_usuario .formulario_error').classList.remove('formulario_error-uso');
			}else{
				document.getElementById('_usuario').classList.add('formulario_grupo-incorrecto');
				document.getElementById('_usuario').classList.remove('formulario_grupo-correcto');
				document.querySelector('#_usuario i').classList.add('fa-circle-xmark');
				document.querySelector('#_usuario i').classList.remove('fa-circle-check');
				document.querySelector('#_usuario .formulario_error	').classList.add('formulario_error-uso');
			}
		break;
		case "nombre":	
			if (expresiones.nombre.test(e.target.value)){
				document.getElementById('_nombre').classList.remove('formulario_grupo-incorrecto');
				document.getElementById('_nombre').classList.add('formulario_grupo-correcto');
				document.querySelector('#_nombre i').classList.add('fa-circle-check');
				document.querySelector('#_nombre i').classList.remove('fa-circle-xmark');
				document.querySelector('#_nombre .formulario_error').classList.remove('formulario_error-uso');
			}else{
				document.getElementById('_nombre').classList.add('formulario_grupo-incorrecto');
				document.getElementById('_nombre').classList.remove('formulario_grupo-correcto');
				document.querySelector('#_nombre i').classList.add('fa-circle-xmark');
				document.querySelector('#_nombre i').classList.remove('fa-circle-check');
				document.querySelector('#_nombre .formulario_error').classList.add('formulario_error-uso');
			}
		break;
		case "contraseña":
			if (expresiones.password.test(e.target.value)){
				document.getElementById('_contraseña').classList.remove('formulario_grupo-incorrecto');
				document.getElementById('_contraseña').classList.add('formulario_grupo-correcto');
				document.querySelector('#_contraseña i').classList.add('fa-circle-check');
				document.querySelector('#_contraseña i').classList.remove('fa-circle-xmark');
				document.querySelector('#_contraseña .formulario_error').classList.remove('formulario_error-uso');
			}else{
				document.getElementById('_contraseña').classList.add('formulario_grupo-incorrecto');
				document.getElementById('_contraseña').classList.remove('formulario_grupo-correcto');
				document.querySelector('#_contraseña i').classList.add('fa-circle-xmark');
				document.querySelector('#_contraseña i').classList.remove('fa-circle-check');
				document.querySelector('#_contraseña .formulario_error').classList.add('formulario_error-uso');
			}
		break;
		case "contraseña2":
			if (expresiones.password.test(e.target.value)){
				document.getElementById('_contraseña-con').classList.remove('formulario_grupo-incorrecto');
				document.getElementById('_contraseña-con').classList.add('formulario_grupo-correcto');
				document.querySelector('#_contraseña-con i').classList.add('fa-circle-check');
				document.querySelector('#_contraseña-con i').classList.remove('fa-circle-xmark');
				document.querySelector('#_contraseña-con .formulario_error').classList.remove('formulario_error-uso');
			}else{
				document.getElementById('_contraseña-con').classList.add('formulario_grupo-incorrecto');
				document.getElementById('_contraseña-con').classList.remove('formulario_grupo-correcto');
				document.querySelector('#_contraseña-con i').classList.add('fa-circle-xmark');
				document.querySelector('#_contraseña-con i').classList.remove('fa-circle-check');
				document.querySelector('#_contraseña-con .formulario_error').classList.add('formulario_error-uso');
			}
		break;
		case "correo":
			if (expresiones.correo.test(e.target.value)){
				document.getElementById('_correo').classList.remove('formulario_grupo-incorrecto');
				document.getElementById('_correo').classList.add('formulario_grupo-correcto');
				document.querySelector('#_correo i').classList.add('fa-circle-check');
				document.querySelector('#_correo i').classList.remove('fa-circle-xmark');
				document.querySelector('#_correo .formulario_error').classList.remove('formulario_error-uso');
			}else{
				document.getElementById('_correo').classList.add('formulario_grupo-incorrecto');
				document.getElementById('_correo').classList.remove('formulario_grupo-correcto');
				document.querySelector('#_correo i').classList.add('fa-circle-xmark');
				document.querySelector('#_correo i').classList.remove('fa-circle-check');
				document.querySelector('#_correo .formulario_error').classList.add('formulario_error-uso');
			}
		break;
		case "telefono":
			if (expresiones.telefono.test(e.target.value)){
				document.getElementById('_telefono').classList.remove('formulario_grupo-incorrecto');
				document.getElementById('_telefono').classList.add('formulario_grupo-correcto');
				document.querySelector('#_telefono i').classList.add('fa-circle-check');
				document.querySelector('#_telefono i').classList.remove('fa-circle-xmark');
				document.querySelector('#_telefono .formulario_error').classList.remove('formulario_error-uso');
			}else{
				document.getElementById('_telefono').classList.add('formulario_grupo-incorrecto');
				document.getElementById('_telefono').classList.remove('formulario_grupo-correcto');
				document.querySelector('#_telefono i').classList.add('fa-circle-xmark');
				document.querySelector('#_telefono i').classList.remove('fa-circle-check');
				document.querySelector('#_telefono .formulario_error').classList.add('formulario_error-uso');
			}
		break;
	}	
}
function comparar(){
	let password1 = document.getElementById('_contraseña');
	let password2 = document.getElementById('_contraseña-con');
	if(password1 == password2){
		alert("si");
	}

}



inputs.forEach((input)=>{
	input.addEventListener('keyup', validarForm);
	input.addEventListener('blur', validarForm);
})


