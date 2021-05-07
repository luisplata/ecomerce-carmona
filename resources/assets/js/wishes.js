$('.notWishes').click(function (e) {
    var idLogin = this.id;
    swal("Para guardar un producto, debe iniciar sesion", {
        buttons: {
            cancel: "Cancelar",
            catch: {
                text: "Acceder",
                value: "login",
            },
            defeat: false,
        },
        icon: "warning",
    })
        .then((value) => {
            switch (value) {
                case "defeat":
                    return false;
                    break;
                case "login":
                    localStorage.setItem('id_wishes', idLogin);
                    $('#modalLogin').modal('open');
                    break;
                default:
                    return false;
            }
        });
});

$('.addWishes').click(function (e) {
    $.ajax({
        type: "post",
        url: https + "addWishes",
        data: {
            id_product: this.id,
        },
        success: function (data) {
            if ($.trim(data) == "1") {
                $('#numberWishes').html(parseInt($('#numberWishes').html())+1);
                $('#numberWishesMobile').html(parseInt($('#numberWishesMobile').html())+1);
                swal({
                    text: "Producto Guardado con exito en su lista de deseo",
                    icon: imageURL,
                    button: "OK!",
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

$('.delete_wishes').click(function () {
    var idWISHES = this.id;
    swal("¿Seguro de eliminar este producto?", {
        buttons: {
            cancel: "Cancelar",
            catch: {
                text: "Eliminar",
                value: "delete",
            },
            defeat: false,
        },
        icon: "warning",
    })
        .then((value) => {
            switch (value) {
                case "defeat":
                    return false;
                    break;
                case "delete":
                    $.ajax({
                        type: "post",
                        url: https + "deleteWishes",
                        data: {
                            id_wishes: idWISHES,
                        },
                        success: function (data) {
                            if ($.trim(data) == "1") {
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
                    break;
                default:
                    return false;
            }
        });
});
