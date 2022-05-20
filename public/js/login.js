/*Funcion que permite validar los campos del formulario de registro
si alguno está vacío o no es valido esto arrojará un alerta*/
function validacion() {
    if ($('#cedula').val() == '') {
        alert("Registro incompleto, olvidó diligenciar el campo: Cedula");
        return false;
    } else if ($('#nombre').val() == '') {
        alert("Registro incompleto, olvidó diligenciar el campo: Nombre");
        return false;
    }  else if ($('#cargo').val() == '') {
        alert("Registro incompleto, olvidó diligenciar el campo: Cargo");
        return false;
    }else if ($('#correo').val() == '') {
        alert("Registro incompleto, olvidó diligenciar el campo: Correo electrónico");
        return false;
    } else if ($("#correo").val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1) {
        alert("email invalido");
        return false;
    } else if ($('#telefono').val() == '') {
        alert("Registro incompleto, olvidó diligenciar el campo: Télefono o celular");
        return false;
    } else if ($('#user').val() == '') {
        alert("Registro incompleto, olvidó diligenciar el campo: Usuario");
        return false;
    } else if ($('#pass').val() == '') {
        alert("Registro incompleto, olvidó diligenciar el campo: Contraseña");
        return false;
    } else {
        return true;
    }
}

//Validar solo letras
function validar(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla == 8) return true; // 3
    patron = /[A-Za-z\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
//validar solo numeros
window.addEventListener("load", function () {
    cedula = document.getElementById("cedula");
    telefono = document.getElementById("telefono");
    cedula.addEventListener("keypress", soloNumeros, false);
    telefono.addEventListener("keypress", soloNumeros, false);
});

//Solo permite introducir numeros.
function soloNumeros(e) {
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
        e.preventDefault();
    }
}

/* Evento para registrar un nuevo usuario con su respectiva validación
si la funcion es TRUE procederá al registrar al usuario*/
$('.registrar-user').click(function () {
    if (validacion() == true) {
        var datos = $('#formRegistrar').serialize();
        $.ajax({
            url: "js/registrar.php",
            type: "POST",
            data: datos,
            dataType: "html",
            success: function (data) {

                if (data == 1) {
                    alert("Usuario guardado éxitosamente");
                    reload();
                } else if (data == 2) {
                    alert("Hubo un problema al guardar este usuario");
                    reload();
                } else {
                    alert("Este usuario ya existe");
                    reload();
                }
                function reload() {
                    location.reload();
                }
            }
        });
    }
    return false;
});


/*evento que ocurre cuando se hace click en el botón REGISTRARME
su funcion es ocultar y mostrar la ventana de registro */
$(".btn-register").click(function () {
    $("#register-form-w").removeClass("dis-n");
    $("#login-form-w").addClass("dis-n");
});

/*evento que ocurre cuando se hace click en el botón SIGUIENTE
su funcion es ocultar el formulario de registro para proceder
a escribir su USUARIO y CONTRASEÑA */
$(".submit_next_one").click(function () {
    $(".data-user").addClass("dis-n");
    $(".submit_back_one").addClass("dis-n");
    $(".submit_next_one").addClass("dis-n");
    $(".login-form__fields_registrar").removeClass("dis-n");
})

/* Evente para regresar del formulario de USUARIO y CONTRASEÑA
al formulario de datos personales*/
$(".submit_back").click(function () {
    $(".data-user").removeClass("dis-n");
    $(".submit_back_one").removeClass("dis-n");
    $(".submit_next_one").removeClass("dis-n");
    $(".login-form__fields_registrar").addClass("dis-n");
})
/* Evento para ocultar el inicio de sesión y mostrar el formulario
para recuperar la contraseña */
$("#to-forgot-sw").click(function(){
    $("#forgot-pass").removeClass("dis-n");
    $("#login-form-w").addClass("dis-n");
});

/* Evento para regresar del formulario de USUARIO y CONTRASEÑA*/
$(".submit_back_one").click(function () {
    $("#login-form-w").removeClass("dis-n");
    $("#register-form-w").addClass("dis-n");
})

/*validar información del usuario al loguear */
var fullUrl = window.location.href;
var urlComponents = fullUrl.split("#");
var data = urlComponents[urlComponents.length - 1];

if (data == "false") {
  alert("Por favor verifique su información");
  location.href="index.html";
} else if (data == "NotFound") {
  alert("Este usuario no existe, por favor registrese");
  location.href="index.html";
}


/* Esta funcion sirve para cambiar el tipo del input para mostrar
// u ocultar la contraseña del usuario*/
function mostrarContrasena(){
    var tipo = document.getElementById("user-pass");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}
/*Aquí llamamos al evento click para ejecurtar la funcion mostrarContrasena()
 y luego cambiamos el icono cada vez que se haga click*/
$(".login-form__input--password-eye").click(function () {
    $("i", this).toggleClass("fa-eye fa-eye-slash");
    mostrarContrasena();
});
