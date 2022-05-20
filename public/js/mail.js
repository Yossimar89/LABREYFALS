/* Evento que nos permite recuperar la contraseña 
metiante un AJAX*/
$("#recuperarPass").click(function () {
    /*Primero enviamos un nuevo PIN a la BASE de DATOS*/
    var request = "send";
    var email = $("#email").val();
    $.ajax({
        url: "js/actualizarPin.php",
        type: "POST",
        data: {request: request,
                email: email},
        dataType: "html",
        success: function (data) {
        }
    });
    /** Creamos una funcion con el metodo setTimeout
     * para que luego de hacer click en recuperar
     * contraseña 1 segundo despues se ejecutará
    */
    setTimeout(function(){
        var datos = $("#formRecuperarPass").serialize();
        $.ajax({
            url: "js/phpMailer.php",
            type: "POST",
            data: datos,
            dataType: "html",
            success: function (data) {
                console.log(data),
                    console.log("sending...");
                if (data == 1) {
                    alert("Se le ha enviado un enlace a su correo para cambiar su contraseña.");
                    redirect();
                } else if(data == 2){
                    alert("Este correo no se encuentra en la Base de Datos.");
                    redirect();
                }else if(data == 3){
                    alert("Error de servidor.");
                    redirect();
                }else{
                    alert("Error al cambiar contraseña");
                    redirect();
                }
                function redirect() {
                    location.reload();
                }
            }
        });
    }, 1000);
    return false;
});

/** Validamos que el campo del PIN no esté vacío*/
function validar(){
    if($("#pin").val() == ""){
        alert ("Por favor debe escribir el PIN que fue enviado a su correo.");
        return false;
    }else{
        return true;
    }
}
/**Creamos el evento click y validamos que si la funcion validar = true
 * procederá con la ejecución del AJAX
 */
$("#cambiarPass").click(function () {
    if(validar() == true){
    var datos = $("#formCambiarPass").serialize();
    $.ajax({
        url: "js/cambiarPass.php",
        type: "POST",
        data: datos,
        dataType: "html",
        success: function (data) {
            console.log(data),
                console.log("sending...");
            if (data == 1) {
                alert("Contraseña cambiada éxitosamente.");
                location.href ="index.html";
            } else if (data == 2) {
                alert("Las contraseñas no coinciden.");
                redirect();
            } else if (data == 3) {
                alert("Este PIN no existe.");
                redirect();
            } else {
                alert("Error al cambiar contraseña.");
                redirect();
            }

            function redirect() {
                location.reload();
            }
        }
    });
    }
    return false;
});


