

fetch('http://localhost/daw2/dws/monFab/ws/getElement.php') 
    .then(response => response.json())
    //.then(data => console.log(data));
    .then(data => {

        let crearTabla =
            function () {
            let tablita = "<tr><th>Acciones</th><th>Nombre</th><th>Descripcion</th><th>Numero</th><th>Estado</th><th>Prioridad</th></tr>";
            let i = 0;
            for (let prdct of data) {
                //i++;
                let row = '<tr id="$prdct.' + prdct.id + '"> <td>'
                row += "<input type='button' id='eliminar' onclick='elmo()' value='X'>";
                row += "<input type='button' id='btnEdit' onclick='mostrForml(this)' value='Editar'>";
                /** onclick='edititi()'*/
                row += "</td>"
                row += "<td>"
                row += prdct.nombre;
                row += "</td>"

                row += "<td>"
                row += prdct.descripcion;
                row += "</td>"

                row += "<td>"
                row += prdct.nserie;
                row += "</td>"

                row += "<td>"
                row += prdct.estado;
                row += "</td>"

                row += "<td>"
                row += prdct.prioridad;
                row += "</td>"

                row += "</tr>"
                tablita += row;

            }
            return tablita;


        };
        //esto escribe la tabla debido a que lleva .innerHtml
        document.getElementById("tablaDts").innerHTML = crearTabla(data);
        window.onload = crearTabla;
    console.log(data)
});



    function eliminarFila(){
        fetch(`./ws/deleteElement.php?id={$id}`)
        .then(response => response.json())
        .then(data => {
            function elim(){

                var i = document.getElementById("tablaDts");
                i.deleteRow(1)}
                
                document.getElementById("tablaDts").innerHTML = elim(data),
                window.onload = elim
            }    

                //eliminarFila();

        )
    } 

    // function eliminarFila() {
    //     document.getElementsByTagName("td").remove();
    // }
    
    
    let idF;
let url;


function mostrForml(boton){

    idF=boton.closest('tr').getAttribute('id');
    
    url = `http://localhost/daw2/dws/monFab/ws/modifyElements.php?id=${idF.substring(7)}`;

    document.querySelector('#contenedorForm').style.display = 'block';

}


function guardar(){ 

    console.log('guardar')

    const formData = new FormData(document.getElementById("contenedorForm"));

    const opciones = {
        method: 'POST',
        body: formData
    }

    fetch(url, opciones)
        .then(response => response.json())
        .then(data => {
            console.log('Datos actualizados:', data);
        })
        .catch(error => {
            console.error('Error al actualizar los datos:', error);
        });


}

function mostr(){
    const tablaCmp = document.getElementById('tablaDts');
    const palbrEnct = document.getElementById('buscar').value.toLowerCase();
    let total = 1;
    for (let i = 1; i < tablaCmp.rows.length; i++) {
        let fila = false;
        const cellsOfRow = tablaCmp.rows[i].getElementsByTagName('td');
        for (let j = 0; j < cellsOfRow.length && !fila; j++) {
            const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
            if (palbrEnct.length ==  2|| compareWith.indexOf(palbrEnct) > -1 ) {
                fila = true;
                total++;
            }

            if(tablaCmp.rows[i].classList.contains("noBuscar")) {
                total++;
            }
            if (fila) {
                tablaCmp.rows[i].style.display = '';
            } else {
                tablaCmp.rows[i].style.display = 'none';
            }
        }
    }
}









    const tablet = document.querySelector("#tablaDts");


    const btnLimpiar = document.querySelector("#btn-limp");

    function limpiar(){

    // Y en el click, limpiamos
        btnLimpiar.addEventListener("click", () => {

            let input = document.createprdctent("input");
            input.value = this.textContent;
    });
    }


