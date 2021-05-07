$('.btnFormLogin').on('click',function () {
    Login();
});
$('#user').keypress(function(e) {
    if(e.which == 13) {
        Login();
    }
});
$('#pass').keypress(function(e) {
    if(e.which == 13) {
        Login();
    }
});
var typeLogin='';
function Login() {
    $('#user').removeClass('error');
    $('#pass').removeClass('error');
    var contLogin = 1;
    if ($.trim($("#user").val()) == "" ) {
        contLogin = 0;
        $('#user').addClass('error');
    }

    if ($.trim($("#pass").val()) == "" ) {
        contLogin = 0;
        $('#pass').addClass('error');
    }

    if(contLogin == 0)
    {
        return false;
    }

    if(!validarEmail($('#user').val())){
        $('#user').addClass('error');
        return false;
    }

    var type = $('#typeLogin').val();
    var email = $('#user').val();
    var password = $('#pass').val();

    $.ajax({
        type: "post",
        url: https + "login",
        data: {
            type: type,
            email: email,
            pass: password
        },
        success: function (data) {
            if ($.trim(data) == "1") {
                if(localStorage.getItem('id_wishes') != null){
                    add_whishes(localStorage.getItem('id_wishes'))
                }else{
                    location.reload();
                }
            } else {
                swal({
                    text: "" + data,
                    icon: imageURL,
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

$('#modalLogin .buttonChangeLogin').click(function () {
    $('#modalLogin .buttonChangeLogin').removeClass('active');
    $(this).addClass('active');
    $('#typeLogin').val(this.id);
});

function add_whishes(id_product){
    $.ajax({
        type: "post",
        url: https + "addWishes",
        data: {
            id_product: id_product,
        },
        success: function (data) {
            if ($.trim(data) == "1") {
                localStorage.removeItem('id_wishes');
                location.href = https + 'wishlist';
            } else {
                swal({
                    text: "" + data,
                    icon: imageURL,
                    button: "OK!",
                });
                localStorage.removeItem('id_wishes');
                setTimeout(function () {
                    location.reload();
                },500);
            }
        }
    });
}
