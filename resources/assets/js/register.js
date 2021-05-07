var elementsForm,contLogin;
$('.btnFormRegister').click(function () {
    $('#registerForm').submit();
});

var input_eye_pass_1=0,input_eye_pass_2=0;
$('#registerForm .input_eye_pass_1').click(function () {
    if(input_eye_pass_1 == 0){
        $('#passwordRegister').attr('type', 'text');
        input_eye_pass_1 = 1;
    }else{
        $('#passwordRegister').attr('type', 'password');
        input_eye_pass_1 = 0;
    }
});
$('#registerForm .input_eye_pass_2').click(function () {
    if(input_eye_pass_2 == 0){
        $('#passwordRegister_2').attr('type', 'text');
        input_eye_pass_2 = 1;
    }else{
        $('#passwordRegister_2').attr('type', 'password');
        input_eye_pass_2 = 0;
    }
});

$('#registerForm').on('submit',function (e) {
    e.preventDefault();
    elementsForm = [
        "typeRegister",
        "nameRegister",
        "lastNameRegister",
        "emailRegister",
        "passwordRegister",
        "passwordRegister_2"
    ];
    contLogin = validationForm(elementsForm,contLogin = 1);

    if(contLogin == 0)
    {
        swal({
            text: "Debes completar todos los datos",
            icon: imageURL,
            button: "OK!",
        });
        return false;
    }

    var str = $.trim($("#passwordRegister").val());
    var n = str.length;

    if(n<=5) {
        $('#passwordRegister').addClass('error');
        swal({
            text: "La contraseña debe tener minimo 6 caracteres",
            icon: imageURL,
            button: "OK!",
        });
        return false;
    }

    if($('#passwordRegister').val() != $('#passwordRegister_2').val()){
        $('#passwordRegister').addClass('error');
        $('#passwordRegister_2').addClass('error');
        swal({
            text: "La contraseña deben coincidir",
            icon: imageURL,
            button: "OK!",
        });
        return false;
    }

    if(!validarEmail($('#emailRegister').val())){
        swal({
            text: "Debes digitar un correo correcto",
            icon: imageURL,
            button: "OK!",
        });
        $('#emailRegister').addClass('error');
        return false;
    }

    if(!$("#termsRegister").is(':checked')){

        swal({
            text: "Debes aceptar la política de privacidad",
            icon: imageURL,
            button: "OK!",
        });
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
        url: https + "register",
        method: "POST",
        data: data,
        success: function (data) {
            if ($.trim(data) == "1") {
                $("#registerForm")[0].reset();
                swal.close();
                location.href = 'account';
            }else if($.trim(data) == "2"){
                swal({
                    text: "Correo Electrónico ya registrado",
                    icon: imageURL,
                    button: "OK!",
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

function validarEmail(valor) {
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (emailRegex.test(valor)){
        return true;
    } else {
        return false;
    }
}

$('#modalRegister .buttonChangeRegister').click(function () {
   $('#modalRegister .buttonChangeRegister').removeClass('active');
    $(this).addClass('active');
    $('#typeRegister').val(this.id);
});

$('.spanTerms').click(function () {
    window.open('/terms', '_self');
});
