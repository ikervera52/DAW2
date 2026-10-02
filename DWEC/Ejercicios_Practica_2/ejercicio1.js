
// Crear la clase usuario a traves de una funcion
class Usuario{

    constructor (usuario, contrasena){
    this.usuario = usuario;
    this.contrasena = contrasena;
}
    
}


let usuarios = [
    new Usuario("IkerVera1", "12345678")
];

function validarUsuario(usuario){

        try{
            if(!usuario.match("^[0-9A-Za-z]{4,10}$")){
            throw new Error ("El nombre de usuario no es valido");
            }
            alert("Nombre de usuario valido");
        }
        catch(err){
            throw err;
        }
}

function validarContrasena(contrasena){
    try{
        if(!contrasena.match("^[0-9]{8,}$")){
            throw new Error("La contraseña no es valida");
        }
        alert("La contraseña es valida");
    }
    catch(err){
        throw err;
    }
}

function registrarUsuario(){
    try{
        let usuario = prompt("Nombre de usuario:");
        validarUsuario(usuario);

        let contrasena = prompt("Contraseña: ");
        validarContrasena(contrasena);

        alert("antes");
        let usuarioValido = new Usuario(usuario, contrasena);

        alert(usuarioValido);

        let contador = 1;

        for(let x = 0; x < usuarios.lenght || usuarios[x] === usuarioValido; x++){
            
            if(usuarios[x] === usuarioValido){
                alert("Benvendio, " + usuarioValido["nombre"]);
            }
            contador ++;
        }
        if(contador == usuarios.lenght){
            throw new Error("El usuario o la contraseña no son validos");
        }
    }catch(err){
        alert(err.name);
        alert(err.message);
        alert(err.stack);
    }
}

registrarUsuario();
