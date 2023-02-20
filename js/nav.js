var impr = new XMLHttpRequest();
        impr.open('POST', 'nav.html');
        impr.setRequestHeader('Content-Type', 'text/plain');
        impr.send();
        impr.onload = function (dt) {
            document.querySelector("nav").innerHTML = dt.currentTarget.response;
            //para más de una barra de navegación
            /*var navs = document.querySelectorAll("nav");
            for(var i=0; i<navs.length; i++) {
                navs[i].innerHTML = dt.currentTarget.response;
            }*/
            
};

const myButton = document.getElementById('myButton');

var nav = (document.layers) ? true : false;



function fuera(boton){
    if (!nav && boton) boton.style.backgroundColor="red" // Color cuando el raton no toca el boton
}




/*
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('marcarTodo').addEventListener('click', function(e) {
        e.preventDefault();
        //seleccionarTodo();
        checkAll();
    });
});*/