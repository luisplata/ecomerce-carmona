var elementsForm,contLogin = 1;

function validationForm(elementsForm,contLogin)
{
    for(var i=0;i<elementsForm.length;i++){
        $('#'+elementsForm[i]).removeClass('error');
        if ( $.trim($("#"+elementsForm[i]).val()) == "" ) {
            contLogin = 0;
            $('#'+elementsForm[i]).addClass('error');
        }
    }
    return contLogin;
}

$('.btnFormContacto').click(function () {
    $('#formContact').submit();
});

$('#formContact').on('submit',function (e) {
    e.preventDefault();
    elementsForm = [
        "nameContact",
        "lastnameContact",
        "messagueContact",
        "mailContact",
    ];
    contLogin = validationForm(elementsForm,contLogin = 1);
    if(contLogin == 0)
    {
        swal({
            text: "Debes digitar todos los datos requeridos",
            icon: imageURL,
            button: "OK!",
        });
        return false;
    }
    if(!validarEmail($('#mailContact').val())){
        swal({
            text: "Debes digitar un correo correcto",
            icon: imageURL,
            button: "OK!",
        });
        $('#mailContact').addClass('error');
        return false;
    }
    var data = $(this).serialize();
    swal({
        text: "Espere un momento",
        icon: imageURL,
        button: false,
        closeOnClickOutside: false,
    });
    $.ajax({
        url: https + "contactGo",
        method: "POST",
        data: data,
        success: function (data) {
            if ($.trim(data) == "1") {
                $("#formContact")[0].reset();
                swal({
                    text: "Muchas gracias, pronto nos pondremos en contacto con usted",
                    icon: imageURL,
                    button: "OK!",
                });
            }else{
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
