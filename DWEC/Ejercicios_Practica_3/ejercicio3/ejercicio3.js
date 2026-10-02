
class Usuario{

    constructor(nickname, psw, nombreCompleto){
        this.nickname = nickname;
        this.psw = psw;
        this.nombreCompleto = nombreCompleto;
    }

}


document.getElementById("bInicioSesion").addEventListener("click", inicarSesion);
document.getElementById("bAlta").addEventListener("click", darAlta)

function iniciarSesion(){
    
    let nickname = document.getElementById("usuario");
    let contrasena = document.getElementById("psw");

    let contenedor = document.getElementsByClassName("contenedor");

    try{

        if(nickname == "" | contrasena == ""){
            throw new Error("La contraseña y el nombre son requeridos.");
        }

        let i = 0;

        for(i = 0; i < localStorage.length | !localStorage[i].nickname == nickname && !licalStorage[i].psw == contrasena; x++){

        }

        if(i = localStorage.length){
            throw new Error("El usuario o la contraseña no son validos.");
        }

    }catch(err){
        // Se crea el elemento
        let pError = document.createElement("p");

        // Se le dan valores
        pError.textContent = err;
        pError.style.color = "red";


        // Lo añades donde quieras que este
        contenedor.appendChild(pError);
        
    }
    
}

function darAlta(){

    let contenedor = document.getElementsByClassName("contenedor");

    let lblNombreCompleto = document.createElement("label");
    lblNombreCompleto.textContent = "Nombre Completo:";

    let inputNombreCompelto = document.createElement("input");
    inputNombreCompelto.type = "text";
    inputNombreCompelto.id = "nombreCompleto";

    let bGuardar = document.createElement("input");
    bGuardar.type = "submit";
    bGuardar.value = "Guardar";
    bGuardar.id = "guardar";

    contenedor.appendChild(lblNombreCompleto);
    contenedor.appendChild(inputNombreCompelto);
    contenedor.appendChild(bGuardar);

    document.getElementById("guardar").addEventListener("click", guardarUsuario);

}

function guardarUsuario(){

    let nickname = document.getElementById("usuario");
    let contrasena = document.getElementById("psw");
    let nombreCompleto = document.getElementById("nombreCompleto");

    let nuevoUsuario = new Usuario(nickname, contrasena);

    localStorage.setItem(nombreCompleto, JSON.stringify(nuevoUsuario));
    
};


