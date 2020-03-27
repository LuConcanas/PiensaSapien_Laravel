window.onload=function(){
  var categoriasPHP = JSON.parse(document.getElementById('cat').innerHTML)//todas las categorias de la base de datos
  console.log(categoriasPHP)
  var quizzesPHP = JSON.parse(document.getElementById('quiz').innerHTML)//todos los quizzes de la base de datos
  console.log(quizzesPHP)
  var categorias = document.querySelectorAll(".selectCategoria")//categorias(frontend) visibles en el menu
  var menuCategorias = document.getElementById('categoriasDisponibles');
  var menuQuizzes = document.getElementById('quizzesDisponibles');

  ocultarMenu(categorias,menuCategorias,menuQuizzes)

}

function ocultarMenu(a,b,c){
    for (var n of a) {
    n.addEventListener('click',function(){
        event.preventDefault()
        b.style.display='none';
        c.style.display='flex';
    })
 }
}
