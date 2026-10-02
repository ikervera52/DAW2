
// Crear la clase usuario a traves de una funcion
class Usuario{

    constructor (nickname, contrasena){
    this.nickname = nickname;
    this.contrasena = contrasena;
}
    
}

let usuarios = [
    new Usuario("IkerVera1", "12345678"),
    new Usuario("user1", "12345678")
];

function validarUsuario(usuario){
    alert(usuario)

    let regExp = /^[0-9A-Za-z]{4,10}$/;

    if (!regExp.test(usuario))
    {
             throw"El nombre de usuario no es valido";
    }

    alert("Nombre de usuario valido");
        
}

function validarContrasena(contrasena){

    let regExp = /^[0-9]{8,}$/;

    if(!regExp.test(contrasena)){
        throw new Error("La contraseña no es valida");
    }

    alert("La contraseña es valida");

}

function registrarUsuario(){
    try{
        let usuario = document.getElementById("usuario").value;
        alert(usuario);

        validarUsuario(usuario);

        let contrasena = document.getElementById("contrasena");
        validarContrasena(contrasena.value);

        let usuarioValido = new Usuario(usuario, contrasena);

        if(usuarios.find(usuario => usuario.nickname === usuarioValido.nickname &&
                                    usuario.contrasena === usuarioValido.contrasena
        )){
            alert("Benvendio, " + usuarioValido["nombre"]);
        }
        else{
            throw new Error("El usuario no existe");
        }

    }catch(err){
        alert("hola");
    }
}

document.getElementById("enviar").addEventListener('click', registrarUsuario);
