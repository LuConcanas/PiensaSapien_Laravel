window.addEventListener('load', function() {
    //let contenido = document.querySelector('#contenido');

    let preguntas =[];
    let respuestas = [];
    
    //var url = new URL('http://localhost:8000/jugando/id');
    //var id = new URLSearchParams(url.search);

    fetch( '/jugando'+id,{
        method: 'get'
    }).then(function(response) {
        return response.json();
    }).then(function(data) {
        console.log(data);
       
    })/*.catch(function(error) {
        console.log(error);
    })*/
  
  
 /*for(let valor of data.preguntas){
            preguntas = valor.descripcion;
          console.log(preguntas);


        }*/

    //Hay un array para las preguntas y otro para las respuestas
/*var preguntas = [	
    
    [ '¿Cómo se perdió la mascota del Mundial de España de 1.982?'] ,
    [ '¿Cuánto es 3 ^ 3?'] , 														 
    [ '¿Qué color resulta al mezclar el azul con el amarillo?' ] ,                 
    [ '¿En qué deporte destacó Sabonis?'  ] , 								
    [ '¿Cuántos jugadores participan en un partido de fútbol?' ] ,
    [ '¿En qué país nació la música House?'  ] ,
    [ '¿Con qué popular periférico introducimos texto en un ordenador?' ] ,
    [ '(64 x 4) / 2 es igual a ...' ] ,
    [ '¿Cómo se llama nuestro planeta?' ] ,                                       
    [ '¿De qué color es el caballo blanco de Santiago?' ] 	
    ];
    
     var respuestas = [
        ['Naranjito' , 'Incorrecto','Incorrecto', 'Incorrecto' ] ,
        [ '27', 'Incorrecto', 'Incorrecto', 'Incorrecto' ],  
        ['verde' , 'Incorrecto', 'Incorrecto', 'Incorrecto' ],
        [ 'baloncesto', 'Incorrecto', 'Incorrecto', 'Incorrecto' ] ,
        [ '22', 'Incorrecto', 'Incorrecto', 'Incorrecto' ],
        [ 'Chicago', 'Incorrecto', 'Incorrecto', 'Incorrecto'],
        [ 'teclado' , 'Incorrecto', 'Incorrecto', 'Incorrecto'] , 
        [ '128' , 'Incorrecto', 'Incorrecto', 'Incorrecto' ] , 
        ['Tierra', 'Incorrecto', 'Incorrecto', 'Incorrecto' ] , 
        ['blanco', 'Incorrecto', 'Incorrecto', 'Incorrecto' ]
     ];

   */
     var formuladas = 0;
     var acertadas = 0;
    var indiceRespuestaCorrecta;
    
    
    /*
    Se programa que al pulsarse el botón "Siguiente Pregunta" se compruebe si se ha acertado la pregunta, en cuyo caso, se incrementa en una unidad 'acertadas'.
    También se comprueba si ya se han realizado las 5 preguntas, en cuyo caso, se llama a 'muestraResultado()' que mostrará el resultado del juego y terminará el programa, de lo contrario, se formula una nueva pregunta.
    */
    //funcion para comenzar el juego
    function responderPregunta(){
       
        //Saco un numero aleatorio para obtener una pregunta aleatoria
        var indiceAleatorio = Math.floor(Math.random()*preguntas.length);
        //En caso de tener las preguntas en un array y las respuestas en otro array, se hace esto asi la posicion de la pregunta en el array preguntas coincide con la posicion de las respuestas en el array repuestas.
        var respuestasPosibles =  respuestas[indiceAleatorio];
        
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
        document.getElementById("pregunta").innerHTML = preguntas[indiceAleatorio];
        formuladas++;
         }
    
         responderPregunta();
        
             function mostrarResultado(){
                var resultado;      // para guardar el mensaje con el resultado
                
                switch(acertadas){
                    case 0:
                        resultado = 'No has acertado una sola pregunta, toca estudiar :-/';
                        break;
                    case 1:
                        resultado = 'Bueno, al menos has acertado una pregunta :-)';
                        break;
                    case 2:
                        resultado = 'Solo 2 preguntas acertadas de 5. Toca mejorar.';
                        break;
                    case 3:
                        resultado = 'No está mal, 3/5 acertadas.';
                        break;
                    case 4:
                        resultado = 'Muy bien, has acertado 4 preguntas :-)';
                        break;
                    case 5:
                        resultado = '¡EXCELENTE, has acertado todas las preguntas! :-D';
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