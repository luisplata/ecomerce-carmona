var elementsForm,contLogin;

$('.btnPasswordChangeForm').on('click',function () {
    $('#passwordChangeForm').submit();
});

$('#passwordChangeForm').on('submit',function (e) {
    e.preventDefault();
    elementsForm = [
        "passwordChange",
        "newPasswordChange",
        "new2PasswordChange",
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

    var data = $(this).serialize();

    swal({
        text: "Espere un momento",
        icon: imageURL,
        button: false,
        closeOnClickOutside: false,
    });

    $.ajax({
        url: https + "passwordChange",
        method: "POST",
        data: data,
        success: function (data) {
            if ($.trim(data) == "complet"){
                location.reload();
            } else {
                swal({
                    text: "" + data,
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
