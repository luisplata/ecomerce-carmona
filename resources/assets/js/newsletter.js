$('.btnNewsletter').on('click',function () {
    $('#formNewsletter').submit();
});

$("#formNewsletter").on('submit', function (e) {
    e.preventDefault();
    contLogin = 1;
    $('#emailNews').removeClass('error');
    if ( $.trim($("#emailNews").val()) == "" ) {
        contLogin = 0;
        $('#emailNews').addClass('error');
    }
    if(contLogin == 0)
    {
        swal({
            text: "Debe digitar todos los datos",
            icon: imageURL,
            button: "OK",
        });
        return false;
    }

    if(!validarEmail($('#emailNews').val())){
        swal({
            text: "Debes digitar un correo correcto",
            icon: imageURL,
            button: "OK!",
        });
        $('#emailNews').addClass('error');
        return false;
    }

    var data = $(this).serialize();
    swal({
        text: "Espere un momento",
        icon: imageURL,
        button: false,
    });
    $.ajax({
        url: https + "/newsletter",
        method: "POST",
        data: data,
        success: function (data) {
            if ($.trim(data) == "1") {
                swal({
                    text: "Gracias por suscribirte",
                    icon: "success",
                    button: "OK!",
                });
                $("#formNewsletter")[0].reset();

            }else if($.trim(data) == "2"){
                $('#emailNews').addClass('error');
                swal({
                    text: "Este correo electrónico ya \n se encuentra registrado",
                    icon: imageURL,
                    button: "OK",
                });
            }else {
                swal({
                    text: "Error, hubo problemas",
                    icon: imageURL,
                    button: "OK!",
                });
            }

        }

    });

});

function validarEmail(valor) {
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (emailRegex.test(valor)){
        return true;
    } else {
        return false;
    }
}
