window.addEventListener('load', function() {
    var preguntasJson= document.getElementById('preguntaX').innerHTML

    var preguntasBeta = JSON.parse(preguntasJson)
    console.log(preguntasBeta)

    var respuestasJson= document.getElementById('respuestasX').innerHTML

    var respuestasBeta = JSON.parse(respuestasJson)
    console.log(respuestasBeta)



    //Hay un array para las preguntas y otro para las respuestas
     var preguntas = preguntasBeta

     var respuestas = respuestasBeta
     var indicePregunta = 0;
     var formuladas = 0;
     var acertadas = 0;
    var indiceRespuestaCorrecta;


    /*
    Se programa que al pulsarse el botón "Siguiente Pregunta" se compruebe si se ha acertado la pregunta, en cuyo caso, se incrementa en una unidad 'acertadas'.
    También se comprueba si ya se han realizado las 5 preguntas, en cuyo caso, se llama a 'muestraResultado()' que mostrará el resultado del juego y terminará el programa, de lo contrario, se formula una nueva pregunta.
    */
    //funcion para comenzar el juego
    function responderPregunta(){
        //En caso de tener las preguntas en un array y las respuestas en otro array, se hace esto asi la posicion de la pregunta en el array preguntas coincide con la posicion de las respuestas en el array repuestas.
        var respuestasPosibles =  respuestas[indicePregunta];

        var posiciones = [0, 1, 2, 3];
        var respuestasReordenadas = [];

        //La variable e sirve para que ingrese en el if una sola vez
        var e =false;

        for(i in respuestasPosibles){
            //Hago random de las respuestas posibles
            var posicionAleatoria = Math.floor(Math.random()*posiciones.length);
            if(posicionAleatoria === 0 && e === false){
                indiceRespuestaCorrecta = i;
                e = true;
            }
            respuestasReordenadas[i] = respuestasPosibles[posiciones[posicionAleatoria]];
            //Borro la posicion que ya paso para que no vuelva a repetirse
            posiciones.splice(posicionAleatoria, 1);
        }

        var textoDeRespuestas = [];
        for(i in respuestasReordenadas){
           textoDeRespuestas += '<div><input type="radio" name="r" value="'+i+'" ><label>'+respuestasReordenadas[i]+'</label></div>';
        }



        //Ingreso la pregunta y las posibles respuestas al hmtl
        document.getElementById("respuestas").innerHTML = textoDeRespuestas;
        document.getElementById("pregunta").innerHTML = preguntas[indicePregunta]
        indicePregunta++
        formuladas++;
         }

         responderPregunta();

         function mostrarResultado(){
            var resultado;      // para guardar el mensaje con el resultado

            switch(acertadas){
                case 0:
                    resultado = 'Perdiste :-/';
                    break;
                case 1:
                    resultado = 'Bueno, acertaste una sola :-)';
                    break;
                case 2:
                    resultado = 'Solo 2 preguntas acertadas de 5.';
                    break;
                case 3:
                    resultado = 'No está mal, 3/5 acertadas.';
                    break;
                case 4:
                    resultado = 'Muy bien, acertaste 4 preguntas :-)';
                    break;
                case 5:
                    resultado = '¡EXCELENTE, acertaste todas las preguntas! :-D';
                    break;
            }
            document.getElementById('resolucion').innerHTML = resultado;

     }
    document.getElementById('boton').addEventListener('click', function(){
    let respuesta = $("input[type=radio]:checked").val();


    if(respuesta === indiceRespuestaCorrecta){
        acertadas++;
    }

       if(formuladas < 5){			// Si aun no se han hecho 5 preguntas...
        responderPregunta();			// ... seguir preguntando
    }
    else{						// de lo contrario...
        mostrarResultado();		// ... finaliza juego mostrando el resultado
    }

    });
});
