window.addEventListener('load', function(){
    let registerForm =document.querySelector("#registerForm");
    let errorUserName = document.querySelector("#errorUserName");
    let inputUserName = document.querySelector('input[name="name"]');

    registerForm.addEventListener('submit', function(evento){
       evento.preventDefault();
       let arrayDeErrores = [];
       if(inputUserName.value.length < 2){
           arrayDeErrores['name'] = "El nombre de usuario debe tener mas caracteres.";
           errorUserName.innerText = arrayDeErrores['name'];
       }
       if(arrayDeErrores === 0){
           registerForm.submit();
       }
    })
})




//let chequeoMail = elInputMail.value.match("laExpresionregular");
//if(!chequeoMail.length) {

//}