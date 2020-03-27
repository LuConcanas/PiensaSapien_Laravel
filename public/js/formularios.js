window.onload = function(){
    let registerForm =document.querySelector("#registerForm");
    let elemntosDelForm = registerForm.elements;
   
    let inputUserName = document.querySelector('input[name="name"]');
    let inputEmail = document.querySelector('input[name="email"]');
    let inputAvatar = document.querySelector('input[name="avatar"]');
    let inputPassword = document.querySelector('input[name="password"]');
    let inputRepassword = document.querySelector('input[name="password_confirmation"]');
    let errorUserName = document.querySelector("#errorUserName");
    let errorEmail = document.querySelector('#errorEmail');
    let errorAvatar = document.querySelector('#errorAvatar');
    let errorPassword = document.querySelector('#errorPassword');
    let errorRepassword =document.querySelector('#errorRepassword');
    let regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$/;
    let arrayDeErrores = [];

    inputUserName.onblur = function () {
        if(this.value.trim() === ""){
            arrayDeErrores['nombre'] = "Debe ingresar un nombre de usuario.";
            errorUserName.innerText = arrayDeErrores['nombre'];
        } else if(this.value.length < 2){
            arrayDeErrores['nombre1'] = "Ingrese un nombre de usuario con mas caracteres.";
            errorUserName.innerText = arrayDeErrores['nombre1'];
        }
    }
    
    inputPassword.onblur = function () {
        if (this.value.length === "") {
          arrayDeErrores['pass'] = "Debe ingresar una contraseña.";
          errorPassword.innerText = arrayDeErrores['pass'];
        } else if (this.value.length < 6) {
          arrayDeErrores['pass1'] = "Lan contraseña debe tener mas caracteres.";
          errorPassword.innerText = arrayDeErrores['pass1'];
        } 
    }
  inputRepassword.onblur = function () {
      if (this.value !== inputPassword.value) {
        arrayDeErrores['repass'] = "Las contraseñas no son iguales.";
        errorRepassword.innerText = arrayDeErrores['repass'];
      }
  }
  
    inputEmail.onblur = function () {
        if (this.value.trim() === '') {
            arrayDeErrores['email'] = "Debe ingresar un e-mail válido.";
            errorEmail.innerText = arrayDeErrores['email'];
        } else if(!regexMail.test(this.value)){
            arrayDeErrores['email1'] = "El e-mail ingresado no es válido.";
            errorEmail.innerText = arrayDeErrores['email1'];
        }
    }
   
    inputAvatar.onblur = function(){
       if(this.value.trim() === ''){
        arrayDeErrores['avat'] = "Debe ingresar una imagen.";
        errorAvatar.innerText = arrayDeErrores['avat'];
       } else if (!(/\.(jpg|png|gif)$/i).test(inputAvatar.value)) {
        arrayDeErrores['avat1'] = "La imagen debe ser de tipo jpg, png ó gif.";
        errorAvatar.innerText = arrayDeErrores['avat1'];
       }
   }
   registerForm.onsubmit = function (event) {
    if(arrayDeErrores === 0){
event.preventDefault(); 
    }
   }

  /*  registerForm.addEventListener('submit', function(evento){
       evento.preventDefault();
       let arrayDeErrores = [];
       if(inputUserName.value.length < 2){
           arrayDeErrores['name'] = "El nombre de usuario debe tener mas caracteres.";
           errorUserName.innerText = arrayDeErrores['name'];
       }
         if(inputPassword.value.length <6 ){
          arrayDeErrores['password']= 'La contraseña debe tener mas caracteres.';
          errorPassword.innerText = arrayDeErrores['password'];
       }
       if (inputPassword.value !== inputRepassword.value) {
        arrayDeErrores['repassword']= 'Las contraseñas ingresadas son diferentes.';
        errorPassword.innerText = arrayDeErrores['repassword'];
       }
       if (inputAvatar.value === null) {
           arrayDeErrores['imagen'] = 'Debe seleccionar una imagen';
           errorAvatar.innerText = arrayDeErrores['imagen'];
       }
 if(!(/\.(jpg|png|gif)$/i).test(inputAvatar.name)){
        arrayDeErrores['avatar']= "La imagen debe ser jpg, png ó gif";
        errorAvatar.innerText = arrayDeErrores['avatar'];   
      }*/
      
/*       if(arrayDeErrores === 0){
           registerForm.submit();
       }
       
    })
*/ }




//let chequeoMail = elInputMail.value.match("laExpresionregular");
//if(!chequeoMail.length) {

//}