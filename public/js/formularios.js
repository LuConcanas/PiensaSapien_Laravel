window.addEventListener('load', function() {
    let registerForm =document.querySelector("#registerForm");
    let elementosDelForm = Array.from(registerForm.elements);
    /**
     * Si hacés un console.log() de los elementos del form se ve que en la primera posición
     * está el input hidden que se genera con el token de seguridad, y en la última posición,
     * el botón de enviar. No nos sirven, asi que los sacamos con métodos de JS.
    console.log(elementosDelForm);
     */
    // el método shift saca el primer elemento del array
    elementosDelForm.shift();
    // el método pop saca al último elemento del array
    elementosDelForm.pop();
    let regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$/;
    let objetoDeErrores = {};
    // recorremos el array, por cada vuelta tenemos un input
    elementosDelForm.forEach(function (input) {
        // a cada uno de los input le asignamos el evento blur y funcionalidad
        input.addEventListener('blur', function() {
            // por cada uno preguntamos si está vacío, y le mostramos el mensaje de que es obligatorio el campo - la palabra this hace referencia al elemento que está iterando en ese momento
            if(this.value.trim() === '') {
                /**
                 * en el html tenés una etiqueta <small> en donde mostrabas el mensaje de error.
                 * Con nextElementSibling hacemos referencia a ese elemento (al elemento hermano del que estás recorriendo actualmente, que es cada input)
                 * getAttribute() recibe como parámetro el nombre del atributo que querés obtener la info.
                 * A cada input del form le agregás el atributo data-nombre="nombreQueQuieras". Así el mensaje es dinámico, y va diciendo el nombre del campo que es obligatorio
                */
                this.nextElementSibling.innerHTML = 'El campo <b>' + this.getAttribute('name') + '</b> es obligatorio';
                // Si un campo tiene error, creamos una key con el nombre del campo y valor true
                objetoDeErrores[this.name] = true;
            } else {
                // si el campo NO está vacío
                // Borramos el mensaje de error que imprimimos en el HTML en la etiqueta <small>
                this.nextElementSibling.innerHTML = '';
                // Eliminamos la key que creamos para este campo
                delete objetoDeErrores[this.name]
                // y vamos preguntando por cada campo para hacer validación más específica
                // si el campo es el de nombre ....
                if(this.name === 'name') {
                    if(this.value.length < 2) {
                        this.nextElementSibling.innerHTML = 'El nombre debe tener más de 2 caracteres';
                        errorsObj[this.name] = true;
                    }
                }
                // si el campo es el de email ...
                if(this.name === 'email') {
                    if(!regexMail.test(this.value.trim())) {
                        this.nextElementSibling.innerHTML = 'El formato de email ingresado no es válido';
                        errorsObj[this.name] = true;
                    }
                }
                // si el campo es password
                if(this.name === 'password') {
                    if(this.value.length < 6) {
                        this.nextElementSibling.innerHTML =  "La contraseña debe tener al menos 6 caracteres";
                        errorsObj[this.name] = true;
                    }
                }
                // si el campo es password-confirm
                if(this.name === 'password_confirmation') {
                    if(this.value !==  elementosDelForm[2].value){
                        this.nextElementSibling.innerHTML = "Las contraseñas no coinciden";
                        errorsObj[this.name] = true;
                    }
                }
            }
        })
        if (input.name === 'avatar') {
            input.addEventListener('change', function () {
                // sacamos la extensión del archivo
                var fileExtension = this.value.split('.').pop();
                // Array de estensiones permitidas
                var acceptedExtensions = ['jpg', 'jpeg', 'png'];
                /*
                    Buscamos la extensión del archivo actual en nuestro array de extensiones permitidas
                    Si no se encuentra la extensión dentro de nuestro array retorna undefined
                */
                var extensionIsOk = acceptedExtensions.find(function (ext) {
                    return ext === fileExtension;
                });
                // Validamos la extensión
                if (extensionIsOk === undefined) {
                    // Si la extensión no es ninguna de la permitida
                    this.nextElementSibling.innerHTML = 'Formato inválido. Los formatos soportados son jpg, jpeg y png';
                    objetoDeErrores[this.name] = true;
                } else {
                    // si todo esá ok, borramos el mensaje de error del front
                    this.nextElementSibling.innerHTML = '';
                }
            });
        }
    })
   registerForm.addEventListener('submit', function() {
    if(input.avatar.value === null){
        // Si el campo está vacío creamos dentro del objeto de errores una key con el nombre de ese input con valor true
        objetoDeErrores[input.name] = true;
        // Mostramos el mensaje de error
        input.nextElementSibling.innerHTML = 'El campo <b>' + input.avatar + '</b> es obligatorio';
    }
    elementosDelForm.forEach(function (input) {
		if (input.value.trim() === '') {
			// Si el campo está vacío creamos dentro del objeto de errores una key con el nombre de ese input con valor true
			objetoDeErrores[input.name] = true;
			// Mostramos el mensaje de error
			input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('data-name') + '</b> es obligatorio';
        }
	});
	// Si el objeto que contiene los errores NO está vacío evitamos que se ENVIE el formulario
	if (Object.keys(objetoDeErrores).length > 0) {
		event.preventDefault();
	}
   })
})
