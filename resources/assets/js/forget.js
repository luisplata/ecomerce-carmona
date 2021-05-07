$('.forgetPassword').on('click',function () {
    forgetPassword();
});

function forgetPassword() {
    var campo = $('#user').val();
    var type = $('#typeLogin').val();
    if(!validarEmail($('#user').val())){
        swal({
            text: "Debes digitar un correo correcto",
            icon: imageURL,
            button: "OK!",
        });
        $('#user').addClass('error');
        return false;
    }
    $('#user').removeClass('error');
    $.ajax({
        url: https + "forgetPassword",
        method: "POST",
        data: {
            data:campo,
            type:type,
            action:'forgetPassword'
        },
        success: function (data) {
            if ($.trim(data) == "1") {
                swal({
                    text: "Recibira una notificacion a su correo \n electrónico para recuperar su contraseña",
                    icon: imageURL,
                    button: "OK!",
                });
            }else if($.trim(data) == "2"){
                swal({
                    text: "Este usuario no se encuentra registrado",
                    icon: imageURL,
                    button: "OK!",
                });
            } else {
                swal({
                    text: "Error, hubo problemas",
                    icon: "warning",
                    button: "OK!",
                });
            }

        }
    });
}
function validarEmail(valor) {
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (emailRegex.test(valor)){
        return true;
    } else {
        return false;
    }
}
