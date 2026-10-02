
function imprimirForm(){


    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let poblacion = document.getElementById("poblacion").value;
    let provincia = document.getElementById("provincia").value;

    // RECOGER EL RADIO QUE ESTE SELECCIONADO
    let edadSeleccionada = document.querySelector('input[name="edad"]:checked').value;

    // RECOGER EL CHECKBOX QUE ESTE SELECCIONADO

    let deDondeViene = document.getElementsByName("dedondeviene");
    let deDondeSeleccionados = "";

    for(let i = 0; i < deDondeViene.length; i++){

        if(deDondeViene[i].checked){
            deDondeSeleccionados += "\n" + deDondeViene[i].value ;
        }
    }

    
    let JSONresponse = "Nombre: " + nombre + "\n" +
                        "Apellidos: " + apellidos + "\n" +
                        "Email: " + email + "\n" +
                        "Poblacion : " + poblacion + "\n" +
                        "Provincia: " + provincia + "\n" +
                        "Edad: " + edadSeleccionada + "\n" +
                         "¿Como nos has conocido?: " + deDondeSeleccionados + "\n";
    
    alert("Objeto JSON" + JSONresponse);


}

function validarString(texto){
    
    let regEx = /"^[A-Za-z ]+"/;

    if(!regEx.test(texto)){
        throw new Error("El texto no puede estar vacio.")
    }
}

document.getElementById("enviar").addEventListener('click' , imprimirForm);
