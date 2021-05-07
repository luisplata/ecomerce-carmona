var  elementsForm,contLogin,idShop;

$('.buyProduct').click(function () {
    $('#selectProduct').submit();
});

$('#selectProduct').on('submit', function (e) {
    e.preventDefault();

    elementsForm = [
        "idProduct",
        "cantproduct",
    ];

    contLogin = validationForm(elementsForm, contLogin = 1);

    if (contLogin == 0) {
        swal({
            text: "Debes seleccionar todo",
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
        url: https + 'buyProduct',
        method: "POST",
        data: data,
        success: function (data) {
            swal.close();
            if ($.trim(data) > 0) {
                $('#numberCarShop').html(data);
                $('#numberCarShopMobile').html(data);

                //hello
                swal({
                    title: "Producto agregado",
                    text: "¿Que desea hacer?",
                    icon: imageURL,
                    buttons: ["Seguir comprando", "Ir al carrito"],
                    dangerMode: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        location.href = https + 'shop';
                    } else {
                    }
                });

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

function validationForm(elementsForm, contLogin) {
    for (var i = 0; i < elementsForm.length; i++) {

        $('#' + elementsForm[i]).removeClass('error');

        if ($.trim($("#" + elementsForm[i]).val()) == "") {
            contLogin = 0;
            $('#' + elementsForm[i]).addClass('error');
        }

    }

    return contLogin;
}

$('.sectionDescriptionProduct .cant .less').click(function () {
    if($('#cantproduct').val() <= 1){
        $('.sectionDescriptionProduct .cant span').html('&ensp;'+1+'&ensp;');
        $('#cantproduct').val(1);
    }else{
        var cant_number = parseInt($('#cantproduct').val())-1;
        $('.sectionDescriptionProduct .cant span').html('&ensp;'+cant_number+'&ensp;');
        $('#cantproduct').val(parseInt($('#cantproduct').val())-1);
    }
});

$('.sectionDescriptionProduct .cant .plus').click(function () {
    var cant_number = parseInt($('#cantproduct').val())+1;
    $('.sectionDescriptionProduct .cant span').html('&ensp;'+cant_number+'&ensp;');
    $('#cantproduct').val(parseInt($('#cantproduct').val())+1);
});

$('.notPedido').on('click',function () {
    swal({
        text: "No tiene productos para comprar",
        icon: imageURL,
        button: "OK!",
    });
});
